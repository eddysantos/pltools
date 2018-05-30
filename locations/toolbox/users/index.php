<?php


$root = $_SERVER['DOCUMENT_ROOT'];
require $root . '/pltools/Resources/PHP/Utilities/session.php';

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/pltools/resources/Bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" media="screen and (min-device-width: 701px)" href="/pltools/resources/css/main.css">
    <link rel="stylesheet" media="screen and (min-device-width: 701px)" href="/pltools/resources/css/users.css">
    <script src="/pltools/Resources/JQuery/jquery-3.2.1.min.js" charset="utf-8"></script>
    <script src="/pltools/Resources/fa_5/js/fontawesome-all.js" charset="utf-8"></script>

    <!-- <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet"> -->
    <title>Proyeccón Logística</title>
  </head>
  <header>
     <div class="custom-header">
       <div class="w-100">
         <div class="custom-header-bar">&nbsp;</div>
         <div class="w-100 d-flex align-items-center justify-content-between">
           <div class="">
             <a class="ml-3 mr-5" role="button" href="../"> <i class="fa fa-chevron-left"></i> </a>Toolbox - Usuarios
           </div>
           <button type="button" class="btn btn-outline-info mr-5" data-toggle="modal" data-target="#addUserModal" name="button"><i class="fas fa-user-plus"></i></button>
         </div>
       </div>
     </div>
   </header>
   <div class="container-fluid mt-3">
     <table class="table table-striped">
       <tbody id="tabla-usuarios">
         <tr dbid="">
           <td class="user-status"><i class="fas fa-circle user-status-btn" role="button"></i></td>
           <td role="button" class="user-details">
             <p class="m-0">Eduardo Santos | <span class="user-mail font-italic">esantos@prolog-mex.com</span></p>
             <p class="m-0">Oficina Principal: Nuevo Laredo</p>
           </td>
           <td class="user-status user-details text-info" role="button"><i class="fas fa-chevron-right"></i></td>
         </tr>
       </tbody>
     </table>
   </div>
</html>


<?php

include 'modales/nuevo_usuario.php';


 ?>

 <script src="/pltools/resources/JQuery/jquery-3.2.1.min.js" charset="utf-8"></script>
 <script src="/pltools/resources/swal/swal.min.js" charset="utf-8"></script>
 <script src="/pltools/resources/popper/popper.min.js"></script>
 <script src="/pltools/resources/Bootstrap4/js/bootstrap.min.js"></script>
 <script src="js/index.js"></script>
