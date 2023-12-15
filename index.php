<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figuras geometricas</title>
</head>
<body>
    <label for="figura">Elige una figura geometrica</label>
    <form action="./proc/validateForm.php" method="post">
        <select name="figura" id="figura">
            <option value="0">Elige una opción</option>
            <option value="1">Triangulo</option>
            <option value="2">Circulo</option>
            <option value="3">Cuadrado</option>
            <option value="4">Rectangulo</option>
        </select>
        <input type="hidden" name="form1" value="form1">
        <button type="submit">Enviar</button>
    </form>
    <script src="./js/script.js"></script>
</body>
</html>