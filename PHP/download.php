<?php
  if(isset($_REQUEST["file"]))
  {
	  $file = urldecode($_REQUEST["file"]);
	  $filepath = "images/".$file;
	  
	  if(file_exists($filepath))
	  {
		  header('Content-Description: File Tranfer');
		  header('Content-Type: appliction/octet-stream');
		  header('Content-Disposition: File Tranfer');
		  header('Expire: 0');
		  header('Cache-Control: must-revalidate');
		  header('Pragma: public');
		  header('content-length:'.filesize($filepath));
		  flush();
		  readfile($filepath);
		  exit;
	  }
  }
?>