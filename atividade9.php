<?php
$texto = $_GET["texto"];
$a = strlen("$texto");
echo "Este nome tem : ". strlen("$texto"). " letras" ."<br>";
for($i =1;$i< $a; $i ++){
    echo "$i". "<br>";
}

?>
