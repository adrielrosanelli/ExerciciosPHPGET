<?php
$a = $_GET["a"];

echo str_replace(" ", "", "$a")."<br>";
echo strtolower("$a"). "<br>";
echo "Este nome tem : " . strlen("$a") . "<br>";
if(empty("$a")) {
    echo "INSIRA UM VALOR";
}

if (is_dir("/$a") ===true) {
    rmdir("/$a");
    echo "Pasta substituida com sucesso";
    mkdir("/$a", "0777");
}else{
    echo "Não foi possivel realizar a operação";
}
?>