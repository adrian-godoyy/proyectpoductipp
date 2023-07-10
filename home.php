
<!DOCTYPE html>
<html>
<head>
    <title>Página de Inicio</title>
    
</head>
<body>
    <h1>Página de Inicio</h1>
    <form method="POST" action="index.php">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required><br><br>
        
        <label for="interes">¿Está interesado(a) en la información de la página?</label>
        <input type="checkbox" id="interes" name="interes"><br><br>
        
        <input type="submit" value="Enviar">


    </form>

</body>
</html>