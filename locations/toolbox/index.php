<?php

$root = $_SERVER['DOCUMENT_ROOT'];
require $root . '/pltools/Resources/PHP/Utilities/session.php';
require $root . '/pltools/Resources/PHP/Utilities/header.php';
 ?>

 <!DOCTYPE html>
  <html>
   <body style="min-height:100%">

    <div class="container-fluid pt-3" style="margin-top: 75px">
      <div class="row">
        <div class="col-lg-3">
          <div class="card toolbox-item">
            <div class="card-body">
              <h4 class="card-title">Bitácora Operaciones</h4>
              <p>Control interno de operaciones.</p>
              <a role="button" href="#" class="btn btn-info toolbox-btn">Abrir</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card toolbox-item">
            <div class="card-body">
              <h4 class="card-title">Procesamiento de Facturas</h4>
              <p>Esta herramienta permite procesar la factura de motores.</p>
              <a role="button" href="invoice_processing" class="btn btn-info toolbox-btn">Abrir</a>
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
