<?php
$idFigura = $_GET["figura"];
switch ($idFigura) {
    case '1':
        $figura = "Triangulo";
        break;
    case '2':
        $figura = "Circulo";
        break;
    case '3':
        $figura = "Cuadrado";
        break;
    case '4':
        $figura = "Triangulo";
        break;
    
    default:
        header('Location: '.'index.php');  
        exit();
        break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserar lados</title>
</head>
<body>
    <h1>Figura elegida: <?php echo $figura;?></h1>
    <a href="index.php">Elegir otra figura</a>
</body>
</html>
