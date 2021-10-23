<?php 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./components/css/estilos.css">
    <title>Inicio</title>
</head>

<body>
    <form action="otra.php" method="POST" class="form">
        <h3>Registro</h3>
        <input type="text" placeholder="Nombre" name="nombre" class="box">
        <input type="email" placeholder="Correo" name="email" class="box">
        <input type="password" placeholder="Contraseña" name="password" class="box">
        <input type="number" placeholder="Edad" name="edad" class="box">

        <input type="submit" value="Regitrar" class="submit">
    </form>
</body>

</html>