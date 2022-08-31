<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>:.Crear Usuario.:</title>
</head>
<body>
    <div class="contenedorCRUD">
        <form action="Controller/controlador_crear_usuario.php" methoh="POST">
            <table class="texto-alineado-derecha tabla">
                <tr>
                    <th>Identificacion</th>
                    <th><input type="text" name="identificacion" id="identificacion" class="form-control" placeholder="identificaion"></th>
                </tr>
                <tr>
                    <th>Nombre Completo</th>
                    <th><input type="text" name="nombre" id="nombre" class="form-control" placeholder="nombre"></th>
                </tr>
                <tr>
                    <th>Usuario</th>
                    <th><input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuario"></th>
                </tr>
                <tr>
                    <th>Clave</th>
                    <th><input type="password" name="password" id="password" class="form-control" placeholder="contraseña"></th>
                </tr>
                <tr>
                    <th>
                        <input type="submit" value="Procesar" class="boton boton-primario">
                    </th>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>