<?php
$nome = $_GET["nome"];
if(strlen("$nome")>="5"){
    echo "Este nome tem : ". strlen("$nome") . "<br>";
    echo "Seu nome ao contrario: ". strrev("$nome"). "<br>";
    echo "Seu nome todo em maiusculo: ". strtoupper("$nome");
}else{
    echo "NOME COM NO MINIMO 5 LETRAS";
}



?>
