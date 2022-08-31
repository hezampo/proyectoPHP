<?php
    include 'databaseconnect.php';
    $sql = "SELECT * FROM usuarios";
    $result = mysqli_query($conn, $sql);
    //print_r($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>:.CRUD.:</title>
</head>
<body>
    <div class="contenedorCRUD">
        <a href="vista_creacion.php">Crear un nuevo Usuario</a>
        <table class="tabla" border="1" cellspacing="0">
            <thead>
                <tr>
                    <th>Identificacion</th>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th>Clave</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody class="centrar-texto">
                <?php while ($row = mysqli_fetch_assoc($result)){?>
                <tr>
                    <td><?php echo $row["identificacion"]?></td>
                    <td><?php echo $row["nombre"]?></td>
                    <td><?php echo $row["usuario"]?></td>
                    <td><?php echo $row["clave"]?></td>
                    <td>
                        <a href="vista_edicion.php?id=<?php echo $row["id"]?>">Editar</a>
                        <a href="vista_eliminar.php?id=<?php echo $row["id"]?>">Eliminarr</a>
                    </th>
                </tr>
                <?php 
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>