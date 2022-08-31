<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/index.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>:.index.:</title>
</head>
<body>
    <div class="contenedor">
        <form action="ingreso_al_sistema.php" method="POST">
            <h3 class="titulo">Ingreso al sistema</h3>
            <hr>
            <input class="form-control" type="user" name="usuario" id="usuario" placeholder="USUARIO">
            <br>
            <input class="form-control" type="password" name="password" id="password" placeholder="CONTRASEÑA">
            <br>
            <button type="submit" class="boton boton-primario">Ingresar <img class="imagen-user" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSb31gbW49Vraden0FDw9ghlFgRV7znVdmUAw&usqp=CAU" alt=""></button>
        </form>
    </div>
    <script src="js/app.js"></script>
</body>

</html>