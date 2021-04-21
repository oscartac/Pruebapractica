<?php

$servidor = "localhost";
$usuari = "pruebapractica";
$contrasenya = "pruebapractica";
$basededades = "pruebapractica";
$taula = "pruebapracica";

$sql = "SELECT * FROM $taula";

$conn = new mysqli($servidor, $usuari, $contrasenya, $basededades);

if ($conn->connect_error) {
  echo "Fallada en la connexió: ".$conn->connect_error;
  die();
}else{
  echo "ok<br>";
}

$resultat = $conn->query($sql);

if ($resultat->num_rows > 0) {
  echo "<table border='1px'>";
  echo "<tr><th>ID</th><th>id</th><th>item</th><th>stock</th><th>eliminar</th></tr>";
  while($fila = $resultat->fetch_assoc()) {
      echo "<tr><td>".$fila["id"]."</td><td>".$fila["id"]."</td><td>".$fila["item"]."</td><td>".$fila["stock"]."</td></td><td>".$fila["eliminar"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "Sense resultats...";
}

$conn->close();
?>
