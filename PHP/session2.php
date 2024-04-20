<?php
// accessing session variable

  session_start();
?>
<html>
  <body>
    <?php
	  echo "My favourate color is ".$_SESSION["favcolor"]."<br>";
	  echo "My favourate animal is ".$_SESSION["favanimal"]."<br>";
	?>
  </body>
</html>