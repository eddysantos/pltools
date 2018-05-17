<?php
session_start();

if (isset($_POST['login'])) {
  if (isset($_POST['userName']) && isset($_POST['password'])) {
    include ('resources/php/loginDatabase.php');

    $usuario = $_POST['userName'];
    $pass = hash('sha256', $_POST['password']);

    $loginQry = "SELECT pk_id_user idusuario, s_nombre nombre, s_apellido apellido FROM cu_lista_usuarios WHERE s_username = ? AND s_password = ?";


    $stmt = $db->prepare($loginQry) or die ('Error Login('.$db->errno.'): '.$db->error);
    $stmt->bind_param('ss',$usuario, $pass);
    $stmt->execute();
    $results = $stmt->get_result();
    $_SESSION['user']['data'] = $results->fetch_array(MYSQLI_ASSOC);
    $validador = $results->num_rows;

    if ($validador == 1) {
      $id = $_SESSION['user']['data']['idusuario'];

      $qry = "SELECT * FROM permisos_pltoolbox WHERE fk_id_usuario = $id";
      $stmt = $db->query($qry);
      $_SESSION['user']['permissions'] = $stmt->fetch_assoc();

      if ($_SESSION['user']['permissions']['acceso_principal'] == 1) {
        header('location:locations/toolbox');
      } else {
        header('Refresh:0');
      }

      exit();
    }else {
      // echo "<script>alert('Validation failed')<script>";
    }
  }

}


 ?>

 <!DOCTYPE html>
 <html lang="en">
   <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="Resources/Bootstrap/css/bootstrap.min.css">
     <link rel="stylesheet" media="screen and (min-device-width: 701px)" href="Resources/CSS/main.css">
     <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
   </head>
   <body>
 		<div class="container-fluid login-box">
 			<div class="login-wrapper">
 				<div class="login-header">
 					<p>Prolog Tools</p>
 				</div>
 				<div class="login-info">
 					<form class="form-group p-5" method="post">
            <label for="userName">Nombre de Usuario</label>
 						<input type="text" class="form-control login-input" name="userName" placeholder="Username" value="">
            <label for="userName" class="mt-3">Contraseña</label>
 						<input type="password" class="form-control login-input" name="password" placeholder="Password" value="">
 						<br>
 						<div class="">
 							<!-- <a href="#" class="text-secondary">Forgot password?</a> -->
 							<input type="submit" class="btn btn-outline-primary float-right" name="login" id="login" value="Login">
 						</div>
 					</form>
 				</div>
 			</div>
 		</div>
     <!-- jQuery first, then Tether, then Bootstrap JS. -->
 		<script src="Resources/JQuery/jquery-3.2.1.min.js" charset="utf-8"></script>
     <!--script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script-->
 		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
     <!--script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script-->
     <script src="Resources/Bootstrap4/js/bootstrap.min.js"></script>
   </body>
 </html>
