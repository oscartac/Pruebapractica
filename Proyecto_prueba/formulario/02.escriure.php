<?php
  $arxiu = "files/demo02.txt";
  $contingut = "Pasta fresca";
  $fp = fopen($arxiu, "w");
  fwrite($fp, $contingut);
  fclose($fp);
?>
