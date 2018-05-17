<!DOCTYPE html>
<body>

<footer class="d-flex justify-content-between align-items-center">
  <div class="">
    Welcome <?php echo $_SESSION['user']['data']['nombre']?>!
  </div>

</footer>

<?php

require $root . '/pltools/resources/php/modales/cerrarSesion.php';

 ?>

  <script src="/pltools/resources/JQuery/jquery-3.2.1.min.js" charset="utf-8"></script>
  <script src="/pltools/resources/swal/swal.min.js" charset="utf-8"></script>
  <script src="/pltools/resources/popper/popper.min.js"></script>
  <script src="/pltools/resources/Bootstrap4/js/bootstrap.min.js"></script>
  <script src="/pltools/resources/JS/main.js"></script>
</body>
