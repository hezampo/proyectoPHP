<?php
 include 'databaseconnect.php';
 $sql = "SELECT * FROM usuarios WHERE id = '".$_GET["id"]."' ";
 $result = mysqli_query($conn, $sql);
 foreach($result as $row){
    $id = $row["id"];
    $identificacion = $row["identificacion"];
    $nombre = $row["nombre"];
    $usuario = $row["usuario"];
    $clave = $row["clave"];
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>:.Editar Usuario.:</title>
</head>
<body>
    <div class="contenedorCRUD">
        <form>
            <table class="texto-alineado-derecha tabla">
                <tr>
                    <th>Identificacion</th>
                    <input type="hidden" name="id" value="<?php echo $id?>">
                    <th><input type="text" name="identificacion" id="identificacion" class="form-control" placeholder="identificaion" value="<?php echo $identificacion?>"></th>
                </tr>
                <tr>
                    <th>Nombre Completo</th>
                    <th><input type="text" name="nombre" id="nombre" class="form-control" placeholder="nombre" value="<?php echo $nombre?>"></th>
                </tr>
                <tr>
                    <th>Usuario</th>
                    <th><input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuario" value="<?php echo $usuario?>"></th>
                </tr>
                <tr>
                    <th>Clave</th>
                    <th><input type="password" name="password" id="password" class="form-control" placeholder="contraseña" value="<?php echo $clave?>"></th>
                </tr>
                <tr>
                    <th>
                        <input type="submit" value="Procesar" class="boton boton-primario">
                    </th>
                </tr>
            </table>
        </form>
        <?php
            if(isset($_GET["nombre"]) || isset($_GET["identificacion"]) && isset($_GET["clave"]) && isset($_GET["usuario"])){
                $query = "UPDATE usuarios SET
                            identificacion = '".$_GET["identificacion"]."',
                            nombre = '".$_GET["nombre"]."',
                            usuario = '".$_GET["usuario"]."',
                            clave = '".$_GET["password"]."'
                        WHERE id = '".$_GET["id"]."'";
                $result = mysqli_query($conn, $query);
                
                if($result){
                    header("Location: menu_crud_usuario.php");
                }else{
                    echo $query;
                }
                            
            }
        ?>
    </div>
</body>
</html>