<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figuras geometricas</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div id="container">
        <h1 class="centerText">🔥🔥Elige una figura geometrica🔥🔥</h1>
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