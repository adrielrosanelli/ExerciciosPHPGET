<?php
$tabuada = $_GET["numero"];
echo "Tabuada do $tabuada". "<br>";
for ($x=1;$x<=20;$x++){
    echo "$x x $tabuada = " . ($tabuada*$x). "<br>";
}

?>