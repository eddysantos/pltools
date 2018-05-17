<?php

$root = $_SERVER['DOCUMENT_ROOT'];
require $root . '/pltools/Resources/PHP/Utilities/session.php';
require $root . '/pltools/Resources/PHP/Utilities/header.php';
 ?>

 <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="/pltools/Resources/Bootstrap4/css/bootstrap.min.css">
      <link rel="stylesheet" media="screen and (min-device-width: 701px)" href="/pltools/Resources/CSS/main.css">

      <link rel="stylesheet" media="screen and (min-device-width: 701px)" href="/pltools/Resources/fontAwesome/css/font-awesome.min.css">
      <!-- <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet"> -->
      <title>Prolog Transportation Inc</title>
    </head>
   <body style="min-height:100%">

    <div class="container-fluid pt-3" style="margin-top: 75px">
      <form class="form-inline" onsubmit="return false;" method="post">
        <label for="invoice-file" class="my-1 mr-3">Selecciona la factura (en excel):</label>
        <input type="file" class="form-control mr-4" name="invoice-file" id="invoice-file" value="">
        <input type="submit" class="btn btn-primary" role="button" name="process-invoice" id="process-invoice" value="Procesar Archivo">
      </form>
    </div>

    <div class="container-fluid mt-5">
      <h5>Encabezado factura - IRH5456</h5>
      <table class="table table-striped">
        <thead>
          <th>Fecha</th>
          <th>Pais</th>
          <th>Entidad</th>
          <th>Moneda</th>
          <th>Termino</th>
          <th>Valor ME</th>
          <th>Valor Comercial</th>
          <th>Flete</th>
          <th>Seguros</th>
          <th>Embalajes</th>
          <th>Incrementables</th>
          <th>Deducibles</th>
          <th>Factor ME</th>
        </thead>
        <tbody>
          <td> <input type="text" class="form-control" name="" value=""> </td>
          <td> <input type="text" class="form-control" name="" value=""> </td>
          <td> <input type="text" class="form-control" name="" value=""> </td>
          <td> <input type="text" class="form-control" name="" value=""> </td>
          <td> <input type="text" class="form-control" name="" value=""> </td>
          <td> <input type="text" class="form-control" name="" value=""> </td>
          <td> <input type="text" class="form-control" name="" value=""> </td>
          <td> <input type="text" class="form-control" name="" value=""> </td>
          <td> <input type="text" class="form-control" name="" value=""> </td>
          <td> <input type="text" class="form-control" name="" value=""> </td>
          <td> <input type="text" class="form-control" name="" value=""> </td>
          <td> <input type="text" class="form-control" name="" value=""> </td>
          <td> <input type="text" class="form-control" name="" value=""> </td>
        </tbody>
      </table>
    </div>




   </body>
  </html>

<?php
require $root . '/pltools/Resources/PHP/Utilities/footer.php';
 ?>
