<?php
  $arxiu = "files/demo03.txt";
  $contingut = "2\n";
  $fp = fopen($arxiu, "a");
  fwrite($fp, $contingut);
  fclose($fp);
?>
