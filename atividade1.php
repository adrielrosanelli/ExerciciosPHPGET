<?php

$numero = $_GET["numero"];
echo "O número anterior: " . ($numero -1). "<br>";
echo "O número: " ."$numero"."<br>";
echo "O número adjasente: " .($numero +1)."<br>";
if(is_numeric($numero)){
    echo "Tem numero na url";
}else{
    echo "Está faltando o número";
}
?>
