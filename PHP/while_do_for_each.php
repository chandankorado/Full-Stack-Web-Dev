<?php
  $t = 1;
  
  while($t <= 5)
  {
	  echo "The number is : $t<br>";
	  $t++;
  }
  echo"<br><br>";
  $s = 1;
  do{
	  echo "The number is : $s<br>";
	  $s++;
  }while($s <= 5);
  
  echo"<br>";
  for($x = 0; $x <= 7; $x++)
  {
	  echo"The number is : $x<br>";
  }
  
  echo"<br>";
  $colors = array("red","green","blue","yellow");
  
  foreach($colors as $value)
  {
	  echo "$value<br>";
  }
?>