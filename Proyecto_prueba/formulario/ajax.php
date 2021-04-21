<?php
//dades de connexió
$servidor = "localhost";
$usuari = "pruebapractica";
$contraseya = "pruebapractica";
$basededades = "pruebapractica";
$taula = "pruebapractica";

sleep(1);

$conn = new mysqli($server, $user, $password, $database);

if ($conn->connect_error) {
  return "DATABASE ERROR: ".$conn->connect_error;
  die();
}

if(!empty($_POST["item"])) {
  $usuari = $_POST["item"];
  $sql = "SELECT * FROM users WHERE item='$usuari'";

  $result = $conn->query($sql);

  if ($result->num_rows == 0) {
    echo "disponible";
  }else{
    echo "no disponible";
  }
}
$conn->close();
?>
