<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form method="post">
        <h2>Hola</h2>
        <p>Inicia tu registro</p>
        <div class="input-wrapper">
            <input type="text" name="name" placeholder="Nombre">
            <img class="input-icon" src="images/gente.svg" alt="">
        </div>
        <div class="input-wrapper">
            <input type="Hortaliza" name="Hortaliza" placeholder="Hortaliza ">
            <img class="input-icon" src="images/planta.svg" alt="">
        </div>
        <div class="input-wrapper">
            <input type="int" name="Cantidad" placeholder="Cantidad ">
            <img class="input-icon" src="images/siembra.svg" alt="">
        </div>
        <div class="input-wrapper">
            <input type="text" name="Estacion" placeholder="Estacion del año ">
            <img class="input-icon" src="images/4-estaciones.svg" alt="">
        </div>
        <div class="input-wrapper">
            <input type="text" name="Tipo" placeholder="Tipo de riego ">
            <img class="input-icon" src="images/auto.svg" alt="">
        </div>
        <input class="btn" type="submit" name="register" value="Enviar">

    <?php 
        include("Registrar.php")
    ?>

</form>

</body>
</html>