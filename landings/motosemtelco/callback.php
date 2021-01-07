<?php
require_once("../../wp-config.php");
echo "Procesando ...<br /><br />";

if(!empty($_POST)){
  $tipodocumento = empty($_POST["tipodocumento"]) ? "" : $_POST["tipodocumento"];
  $numerodocumento = empty($_POST["numerodocumento"]) ? "" : $_POST["numerodocumento"];
  $nombres = empty($_POST["nombres"]) ? "" : $_POST["nombres"];
  $apellidos = empty($_POST["apellidos"]) ? "" : $_POST["apellidos"];
  $ciudad = empty($_POST["ciudad"]) ? "" : $_POST["ciudad"];
  $direccion = empty($_POST["direccion"]) ? "" : $_POST["direccion"];
  $celular = empty($_POST["celular"]) ? "" : $_POST["celular"];
  $email = empty($_POST["email"]) ? "" : $_POST["email"];
  $nacimiento = empty($_POST["nacimiento"]) ? "" : $_POST["nacimiento"];
  $empresa = empty($_POST["empresa"]) ? "" : $_POST["empresa"];
  $antiguedad = empty($_POST["antiguedad"]) ? "" : $_POST["antiguedad"];
  $tipocontrato = empty($_POST["tipocontrato"]) ? "" : $_POST["tipocontrato"];
  $renovaciones = empty($_POST["renovaciones"]) ? "" : $_POST["renovaciones"];
  $fecharenovacion = empty($_POST["fecharenovacion"]) ? "" : $_POST["fecharenovacion"];
  $tyc = ($_POST["tyc"]<>"on") ? 0 : 1;
  $suministrar = ($_POST["suministrar"]<>"on") ? 0 : 1;

  $enlace = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

  if (!$enlace) {
      echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
      echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
      echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
      exit;
  }
  mysqli_set_charset($enlace, "utf8");

  $sql = "INSERT INTO landing_user_request_info (
    tipo_documento,
    numero_documento,
    nombres,
    apellidos,
    ciudad,
    direccion,
    celular,
    email,
    fecha_nacimiento,
    empresa,
    antiguedad,
    tipo_contrato,
    renovaciones,
    fecha_renovacion,
    acepta_politica,
    acepta_suministrar
  ) VALUES (
    '$tipodocumento',
    '$numerodocumento',
    '$nombres',
    '$apellidos',
    '$ciudad',
    '$direccion',
    '$celular',
    '$email',
    '$nacimiento',
    '$empresa',
    '$antiguedad',
    '$tipocontrato',
    '$renovaciones',
    '$fecharenovacion',
    $tyc,
    $suministrar
  )";

  if (mysqli_query($enlace, $sql)) {
    header('Location: '.get_site_url()."/landings/motosemtelco/index.php?return=success");
  } else {
    header('Location: '.get_site_url()."/landings/motosemtelco/index.php?return=error");
  }

  mysqli_close($enlace);

}else{
  die("No se recibieron parámetros del formulario");
}

?>