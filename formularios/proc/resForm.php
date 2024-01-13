<?php
$error=false;
$figuraNom = $_POST["figura"];

include("../functions/validateInput.php");
include("../../object/".$figuraNom.".php");
$lado1 = $_POST["lado1"];
if(validateInput($lado1)){
    $figura = new $figuraNom($figuraNom,$lado1);
}else{
    $error = true;
    echo "error";
}

if(!$error){
    if(isset($_POST["lado2"])){
        $lado2 = $_POST["lado2"];
        // echo validateInput($lado2);
        if(validateInput($lado2)){
            $figura->setLado2($lado2);
        }else{
            $error = true;
        }
    }
    if(isset($_POST["lado3"])){
        $lado3 = $_POST["lado3"];
    
        if(validateInput($lado3)){
            $figura->setLado3($lado3);
        }else{
            $error = true;
        }
    }
    if(!$error){
        echo "<p class='resu'><strong>Area:</strong> ".round($figura->area(), 2)."</p>";
        // echo "</br>";
        echo "<p class='resu'><strong>Perimetro:</strong> ".round($figura->perimetro(), 1)."</p>";
    }else{
        echo "error";
    }
}

?>