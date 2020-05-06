<?php
$a = $_GET["a"];
if(empty("$a")){
  echo "INSIRA UM VALOR";
}else {

    echo str_replace(" ", "", "$a") . "<br>";
    echo "Este nome tem : " . strlen("$a") . "<br>";
    mkdir("/$a", "0777");
    strtolower("$a");
}


?>