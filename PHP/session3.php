<?php
// modify session variable

  session_start();
?>
<html>
  <body>
    <?php
	  $_SESSION["favcolor"] = "Yellow";
	  print_r($_SESSION);
	?>
  </body>
</html>