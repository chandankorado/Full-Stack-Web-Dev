<?php
// creating session variable

  session_start();
?>
<html>
  <body>
	<?php
	  $_SESSION["favcolor"] = "white";
	  $_SESSION["favanimal"] = "cat";
	  
	  echo "Session variable are set .";
	?>
  </body>
</html>