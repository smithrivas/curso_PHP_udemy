<?php
//$id = $_GET['id'];

try {
  $conexion=new PDO('mysql:host=localhost; dbname=prueba_datos','root','');
  //echo "Conexio OK";

  //METODO QUERY
  /*
  $resultados = $conexion->query('INSERT INTO usuarios VALUES(NULL,"Brayan")');
  $resultados = $conexion->query("SELECT * FROM usuarios WHERE ID=$id");

  foreach ($resultados as $usuarios) {
    echo $usuarios['ID'].' - '.$usuarios['nombre'].'</br>';
  }
  */

  //PREPARED SATEMENTS - consulta preparada
  $statement = $conexion->prepare('SELECT * FROM usuarios');  //Se prepara consulta
  //$statement = $conexion->prepare('INSERT INTO usuarios VALUES(NULL, "Pedro")');  //Insertar

  //$statement->execute(array(':id' => $id));  //Se ejecuta consulta ingresando datos.
  $statement->execute(); //Cuando es una consuta sin insertar datos.

  //$resultados = $statement->fetch();  //Devulve 1 registro.
  $resultados = $statement->fetchAll();  //Devulve todos los registros.
  foreach ($resultados as $usuarios) {
    echo $usuarios['ID'].' - '.$usuarios['nombre'].'</br>';
  }
  /*
  echo "<pre>";
  print_r($resultados);
  echo "</pre>";
  */

} catch(PDOException $e) {
  echo "ERROR: ".$e->getMessage();
}

?>
