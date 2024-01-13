<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figuras geometricas</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;1,100;1,400&display=swap" rel="stylesheet">

</head>
<body>
    <div id="container">
        <h1 class="centerText">Elige una figura geométrica</h1>
        <br>
        <select name="figura" id="figura">
            <option value="0">Elige una opción</option>
            <option value="1">Triangulo</option>
            <option value="2">Circulo</option>
            <option value="3">Cuadrado</option>
            <option value="4">Rectangulo</option>
        </select>
        <div id="form"></div>
        <div id="res"></div>
    </div>
    <script src="./js/script.js"></script>
</body>
</html>