<?php
// destroy session variable

  session_start();
?>
<html>
  <body>
    <?php
	  session_unset();
	  session_destroy();
	  
	  print_r($_SESSION);
	?>
  </body>
</html>