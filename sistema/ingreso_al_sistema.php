<?php
$usuario_correcto = "root";
$palabra_secreta_correcta = "root";
$usuario = $_POST["usuario"];
$palabra_secreta = $_POST["password"];
validarUsuarios($usuario, $palabra_secreta);


function validarUsuarios($usuario, $palabra_secreta){
    include 'databaseconnect.php';
    $query = "SELECT * FROM usuarios WHERE usuario = '".$usuario."' AND clave = '".$palabra_secreta."'";
    $result = mysqli_query($conn, $query);
    print_r($result->num_rows);
    if($result->num_rows != 0){
        header("Location: menu_crud_usuario.php");
    }else{
        header("Location: index.php");
    }
}
