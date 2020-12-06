<?php
include_once 'conexionDB.php';

    $id = $_GET['id'];

    $sql_delete = 'DELETE FROM colores WHERE id=?';
    $delete_sent = $pdo->prepare($sql_delete);
    $delete_sent->execute([$id]);
    
header('location: index.php');