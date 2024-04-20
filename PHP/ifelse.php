<?php
  $t = date("H");
  
  if($t < "20"){
	  echo "Have a good day !";
  }
  else if($t < "10"){
	  echo "Have a nice day !";
  }else{
	  echo "Have a beautiful day !";
  }
?>