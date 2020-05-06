<?php
$a = $_GET["a"];
$b = rand("0","10");
echo "Seu número: $a". "<BR>";
echo "Número sorteado: $b". "<br>";
if($a == $b ){
    echo "Parabéns você acertou";
}else{
    echo "Não foi dessa vez";
}

?>