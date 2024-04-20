<html>
  <head>
    <meta char_set = "UTF-8">
    <title>Simple Image Gallery</title>
	<style type = "text/css">
	  .img-box{
		  display: inline-block;
		  text-align: center;
		  margin: 0 15px;
	  }
	</style>
  </head>
  <body>
    <?php
	  $images = array("kites.jpg","ballons.jpg");
	  foreach($images as $image)
	  {
		  echo'<div class = "img-box">';
		  echo'<img src = "images/'.$image. '"width = "200" alt = "'.pathinfo($image, PATHINFO_FILENAME).'">';
		  echo '<p><a href = "download.php?file '= .urlencode($image).'">Download</a></p>';
		  echo '<div>';
	  }
	?>
  </body>
</html>