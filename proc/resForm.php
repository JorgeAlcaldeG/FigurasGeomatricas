<?php
$figuraNom = $_POST["figura"];
$lado1 = $_POST["lado1"];
if(isset($_POST["lado2"])){
    $lado2 = $_POST["lado2"];
}
include("../../object/".$figuraNom.".php");

$figura = new $figuraNom($figuraNom,$lado1);

if(isset($_POST["lado2"])){
    $lado2 = $_POST["lado2"];
    $figura->setLado2($lado2);
}
echo $figura->area();
echo "</br>";
echo $figura->perimetro();

?>