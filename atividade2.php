<?php
$a = $_GET["a"];
$b = $_GET["b"];
echo  "A Soma: " . ($a + $b). "<br>";
echo "A Multiplicação: " . ($a * $b). "<br>";
echo "A Divisão: " . ($a / $b). "<br>";
if(is_numeric($a)){
    echo "Tem numero na url";
}else{
    echo "Está faltando o número";
}


?>