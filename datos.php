<?php

//$nombre = $_GET ['txtNombre'];
$nombre = $_POST ['txtNombre'];
//$apellido = $_GET ['txtApellido'];
$apellido = $_POST ['txtApellido'];
echo $nombre. "/" . $apellido;
?>