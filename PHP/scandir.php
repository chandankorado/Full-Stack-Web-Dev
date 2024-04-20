<?php
  echo getcwd();
  
  $dir = "/pphp/";
  
  $a = scandir($dir);
  $b = scandir($dir,1);
  
  echo"$a";
  echo"$b";
?>