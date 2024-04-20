<?php
$x = 20;
echo $x,"<br>";

/*define("GREETINGS","Welcome to RGUKT Srikakulam !");
echo GREETINGS;*/

define("GREETINGS","Welcome to RGUKT Srikakulam !",true);
echo "<br><br>",GREETINGS,"<br><br>";

define("cars",["Alfa Romeo","BMW","Toyota"]);
echo cars[1];
?>