<?php
$idFigura = $_POST["figura"];
$form ="<form action='' method='post'>";
switch ($idFigura) {
    case '1':
        $figuraNom = "Triangulo";
        $form .='<input type="hidden" id="tipo" value="'.$figuraNom.'">
        <input type="number" id="lado1" placeholder="Lado 1">
        <input type="number" id="lado2" placeholder="Lado 2">';
        break;
    case '2':
        $figuraNom = "Circulo";
        $form .='<input type="hidden" id="tipo" value="'.$figuraNom.'">
        <input type="number" id="lado1" placeholder="Radio">';
        break;
    case '3':
        $figuraNom = "Cuadrado";
        $form .='<input type="hidden" id="tipo" value="'.$figuraNom.'">
        <input type="number" id="lado1" placeholder="Lado 1">';
        break;
    case '4':
        $figuraNom = "Rectangulo";
        $form .='<input type="hidden" id="tipo" value="'.$figuraNom.'">
        <input type="number" id="lado1" placeholder="Lado 1">
        <input type="number" id="lado2" placeholder="Lado 2">';
        break;
    
    default: 
        exit();
        break;
        
}
    $form .="<input type='button' value='Calcular' onclick='calculardatos()'></form>";
    echo"<h1>Figura elegida: $figuraNom</h1>$form";
?>

