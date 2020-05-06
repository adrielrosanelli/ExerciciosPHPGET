<?php
$a = $_GET["a"];
$b = $_GET["b"];
$c = $_GET["c"];
$d = $_GET["d"];
$media = (($a+$b+$c+$d)/4);

echo "Sua média é de: $media". "<br>";


if ($media >= 7){
    echo "Parabéns você foi aprovado";
}elseif ($media >=5){
    echo "Você está em exame";
}elseif ($media <5){
    echo "Você reprovou";
}

?>