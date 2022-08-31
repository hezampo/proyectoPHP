<?php
include 'databaseconnect.php';
$query = "DELETE FROM usuarios WHERE id = '".$_GET["id"]."'";
$result = mysqli_query($conn, $query);
if($result){
    header("Location: menu_crud_usuario.php");
}