<?php
  $s = "chandan korado !";
  $t = "korado";
  $u = "korada";
  echo strlen($s);echo" strlen($s)<br>";
  echo str_word_count($s);echo" str_word_count($s)<br>";
  echo strrev($s);echo" strrev($s)<br>";
  echo strpos($s,$t);echo" strpos($s,$t)<br>";
  echo str_replace("korado","korada",$s);echo"<br>";//echo" str_replace(""korado","korada","$s) <br>";
?>