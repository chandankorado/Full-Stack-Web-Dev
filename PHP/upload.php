<?php
  $target_dir = "pphp/";
  $target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
  if(isset($_POST["submit"]))
  {
	  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	  if($check != false)
	  {
		  echo "File is an Image - ".$check["mime"].".";
		  $uploadOk = 1;
	  }else
	  {
		 echo "File is not an Image";
		 $uploadOk = 0;
	  }
  }if(file_exists($target_file))
  {
	  echo "Sorry, File already Exist !";
	  $uploadOk = 0;
  }if($_FILES["fileToUpload"]["size"] > 500000)
  {
	  echo "Sorry your file is too large !";
	  $uploadOk = 0;
  }if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif")
  {
	  echo "Sorry, only JPG,PNG,JPEG & GIF are allowed !";
	  $uploadOk = 0;
  }if($uploadOk == 0)
  {
	  echo "Sorry your file is not uploaded !";
  }else
  {
	  if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file))
	  {
		  echo "The file".htmlspecialchars(basename($_FILES["fileToUpload"]["name"]))." has been uploaded .";
	  }else
	  {
		  echo "Sorry, there was an error uploading your file !";
	  }
  }
  
?>