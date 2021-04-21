<?php

$servidor = "localhost";
$usuari = "pruebapractica";
$contrasenya = "pruebapractica";
$basededades = "pruebapractica";
$taula = "pruebapractica";

$id = 4;


$sql = "DELETE FROM $taula WHERE id='$id'";

$conn = new mysqli($servidor, $usuari, $contrasenya, $basededades);

if ($conn->connect_error) {
  return "Fallada en la connexió: ".$conn->connect_error;
  die();
}

if ($conn->query($sql) === TRUE) {
  echo "Vale! Registro eliminado.";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
