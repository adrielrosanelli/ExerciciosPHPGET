<?php
$a = $_GET["a"];
echo "$a". "<br>";


$str = "30000000";
substr_replace($str, '.', "1", 0);
substr_replace($str, ',', "4", 0);
echo "$str";



?>