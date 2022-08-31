<?php
    include 'databaseconnect.php';
    if(isset($_POST["nombre"]) != null || isset($_POST["identificacion"]) != null || isset($_POST["usuario"]) || isset($_POST["password"])){
        $sql = "INSERT INTO usuarios (identificacion,nombre,usuario, clave) VALUES('".$_POST["identificacion"]."','".$_POST["nombre"]."' ,'".$_POST["usuario"]."', '".$_POST["password"]."')";
        $result = mysqli_query($conn, $sql);
        if($result){
            header("Location: menu_crud_usuario.php");
        }
    }