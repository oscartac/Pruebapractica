<?php
  $arxiu = "files/demo01.txt";
  $fp = fopen($arxiu, "r");
  $contingut = fread($fp, filesize($arxiu));
  echo $contingut;
  fclose($fp);
?>
