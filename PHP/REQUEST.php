<?php
  if($_REQUEST["name"] || $_REQUEST["age"]){
	  echo"Wlcome ".$_REQUEST['name']."<br>";
	  echo"You are ".$_REQUEST['age']."years old";
	  exit();
  }
?>
<html>
  <body>
    <form action = "<?php $_PHP_SELF ?>" method = "POST">
		Name: <input type = "text" name = "name"/>
		Age: <input type = "text" name = "age"/>
		<input type = "submit"/>
	</form>
  </body>
</html>