<?php

$root = $_SERVER['DOCUMENT_ROOT'];
// require $root . '/plsuite/Resources/PHP/Utilities/initialScript.php';

$sc = [];
$data = $_POST[];

$query = "INSERT INTO cu_lista_usuarios(s_username, s_nombre, s_apellido, s_password) VALUES (?, ?, ?, ?)";
$string_password = substr($data['nombre'], 0, 3) . substr($data['apellido'], 0, 3) . rand(1, 999);
$new_password = hash('sha256', $string_password);

$stmt = $db->prepare($query);
if (!($stmt)) {
  $sc['code'] = "500";
  $sc['query'] = $query;
  $sc['message'] = "Error during query prepare [$stmt->errno]: $stmt->error";
  exit_script($sc);
}


$stmt->bind_param('ssss', $data['username'], $data['nombre'], $data['apellido'], $new_password);
if (!($stmt)) {
  $sc['code'] = "500";
  $sc['query'] = $query;
  $sc['message'] = "Error during variables binding [$stmt->errno]: $stmt->error";
  exit_script($sc);
}

if (!($stmt->execute())) {
  $sc['code'] = "500";
  $sc['query'] = $query;
  $sc['message'] = "Error during query execution [$stmt->errno]: $stmt->error";
  exit_script($sc);
}

if ($stmt->affected_rows == 0) {
  $sc['code'] = 2;
  $sc['message'] = "No se agregó ningún usuario.";
  exit_script($sc);
}

if ($stmt->affected_rows > 0) {
  $sc['code'] = 1;
  $sc['message'] = "El usuario fue agregado correctamente.";
  exit_script($sc);
}






?>
