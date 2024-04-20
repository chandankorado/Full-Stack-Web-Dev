<?php
  if($_POST["name"] || $_POST["age"]){
	  if(preg_match("/[^A-Za-z'-]/",$_POST['name'])){
		  die ("Invalid name and name should be alphabet !");
	  }
	  echo "Welcome ".$_POST['name']."<br>";
	  echo "You are".$_POST['age']."years old<br>";
	  echo "Your password is  ".$_POST['paswd'];
	  
	  exit();
  }
?>
<html>
	<body>
		<form action = "<?php $_PHP_SELF?>" method = "POST">
			Name: <input type = "text" name = "name"/>
			Age: <input type = "text" name = "age"/>
			Password: <input type = "password" name = "paswd"/>
			<input type = "submit"/>
		</form>
	</body>
</html>