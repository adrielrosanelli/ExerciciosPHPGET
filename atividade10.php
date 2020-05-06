<?php
$a = $_GET["a"];
$b = $_GET["b"];
$num ="0";
if(is_numeric($a)===true){
    for($i =($a +1);$i < $b; $i ++){
        echo "$i". "<br>";
    }
}else{
    echo "OS DOIS CAMPOS DEVEM ESTAR PREENCHIDOS COM NÚMEROS";
}
?>