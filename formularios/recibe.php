<?php
//print_r($_POST);

// if (!$_POST) {
//   header('location: http://localhost/curso_php/formularios');
// }
// $nombre = $_POST['nombre'];
// $sexo = $_POST['sexo'];
// $year = $_POST['year'];
// $terminos = $_POST['terminos'];
//
// echo 'Hola, '.$nombre.' eres '.$sexo;


//print_r($_GET);

if (!$_GET) {
   header('location: http://localhost/curso_php/formularios');
}

$nombre = $_GET['nombre'];
$sexo = $_GET['sexo'];
$year = $_GET['year'];
$terminos = $_GET['terminos'];

echo $nombre.'<br/>';
echo $sexo.'<br/>';
echo $year.'<br/>';
echo $terminos.'<br/>';
?>
