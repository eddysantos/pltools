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
      <link rel="stylesheet" href="/plsuite/Resources/Bootstrap4/css/bootstrap.min.css">
      <link rel="stylesheet" media="screen and (min-device-width: 701px)" href="/plsuite/Resources/CSS/main.css">
      <link rel="stylesheet" media="screen and (min-device-width: 701px)" href="/plsuite/Resources/fontAwesome/css/font-awesome.min.css">
      <!-- <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet"> -->
      <title>Prolog Transportation Inc</title>
    </head>
   <body style="min-height:100%">

    <div class="container-fluid pt-3" style="margin-top: 75px">
      <div class="row">
        <div class="col-lg-3">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Factura Motores (Pantoja)</h4>
              <p>Esta herramienta permite procesar la factura de motores.</p>
              <a role="button" href="invoice_processing" class="btn btn-info">Abrir</a>
            </div>
          </div>
        </div>
      </div>
    </div>


   </body>
  </html>

<?php
require $root . '/pltools/Resources/PHP/Utilities/footer.php';
 ?>
