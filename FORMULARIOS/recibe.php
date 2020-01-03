<?php
// print_r($_POST);

if(!$_POST) {
    header('Location: http://localhost/ejerciciosPHP/FORMULARIOS/');
}

$nombre = $_POST['nombre'];
$sexo = $_POST['sexo'];

echo 'Hola ' . $nombre .', eres ' . $sexo;





?>