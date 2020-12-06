<?php
// UPDATE DB

    //Aqui obtenemos los elementos nuevos de la edicion

$id = $_GET['id'];
$color = $_GET['color'];
$descripcion = $_GET['descripcion'];


 //Hacemos la conexion a la base de datos
include_once 'conexionDB.php';

    //Actualizamos los datos

    $sql_edit = 'UPDATE colores SET color=?,descripcion=? WHERE id=?';
    $update_sent = $pdo->prepare($sql_edit);
    $update_sent->execute([$color,$descripcion,$id]);

    //Redirecciona a la vista index
header('location: index.php');