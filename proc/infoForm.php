<?php
// include("../../object/FiguraGeometrica.php");
// include("../../object/PermietroM.php");
// include("../../object/Triangulo.php");
$idFigura = $_POST["figura"];
$form ="<form action='' method='post'>";
switch ($idFigura) {
    case '1':
        $figuraNom = "triangulo";
        $form .='<input type="hidden" value="'.$figuraNom.'">
        <input type="number" id="lado1" placeholder="Lado 1">
        <input type="number" id="lado2" placeholder="Lado 2">';
        break;
    case '2':
        $figuraNom = "circulo";
        break;
    case '3':
        $figuraNom = "cuadrado";
        break;
    case '4':
        $figuraNom = "rectangulo";
        break;
    
    default: 
        exit();
        break;
        
}
    $form .="<input type='button' value='Calcular'></form>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserar lados</title>
</head>
<body>
    <h1>Figura elegida: <?php echo $figuraNom;?></h1>
    <?php
        echo $form;
    ?>
</body>
</html>
