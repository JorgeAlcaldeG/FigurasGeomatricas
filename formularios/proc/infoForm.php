<?php
$idFigura = $_POST["figura"];
$form ="<form action='' method='post'>";
switch ($idFigura) {
    case '1':
        $figuraNom = "Triangulo";
        $form .='<input type="hidden" id="tipo" value="'.$figuraNom.'">
        <input type="number" id="lado1" placeholder="Lado 1" onblur="validatecampo(this)">
        <input type="number" id="lado2" placeholder="Lado 2" onblur="validatecampo(this)">
        <input type="number" id="lado3" placeholder="Lado 3" onblur="validatecampo(this)">';
        break;
    case '2':
        $figuraNom = "Circulo";
        $form .='<input type="hidden" id="tipo" value="'.$figuraNom.'">
        <input type="number" id="lado1" placeholder="Radio" onblur="validatecampo(this)">';
        break;
    case '3':
        $figuraNom = "Cuadrado";
        $form .='<input type="hidden" id="tipo" value="'.$figuraNom.'">
        <input type="number" id="lado1" placeholder="Lado 1" onblur="validatecampo(this)">';
        break;
    case '4':
        $figuraNom = "Rectangulo";
        $form .='<input type="hidden" id="tipo" value="'.$figuraNom.'">
        <input type="number" id="lado1" placeholder="Lado 1" onblur="validatecampo(this)">
        <input type="number" id="lado2" placeholder="Lado 2" onblur="validatecampo(this)">';
        break;
    
    default: 
        exit();
        break;
        
}
    $form .="<input type='button' value='Calcular' onclick='calculardatos()'></form>
    <p id='error1' class='error'></p>
    <p id='error2'class='error'></p>
    <p id='error3'class='error'></p>";
    echo"<h2>Figura elegida: $figuraNom</h2>$form";
    echo"<img src='./img/$figuraNom.png' id='imagen' alt=''>";
?>

