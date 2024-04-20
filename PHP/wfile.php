<html>
 <head>
   <title>Reading a file using PHP !</title>
 </head>
  <body>
	<?php
	
	$filename = "C:\Users\ALAKHA BEHERA\Desktop\mp.txt";
	$file = fopen($filename, "a+");
	
	if($fie = false)
	{
		echo("Error in opening file !");
		exit();
	}
	fwrite($file,"\nThis is simple test \n");
	
	$filesize = filesize($filename);
	$filetext = fread($file, $filesize);
	
	echo ("File size = $filesize bytes");
	echo "$filetext";
	fclose($file);
	
	
	?>
  </body>
</html>