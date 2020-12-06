<?php

include_once 'conexionDB.php';
    
//READ DB
    //Aqui traemos todos los elementos de la tabla
    $sql_read = 'SELECT * FROM colores';
    $gsent = $pdo->prepare($sql_read);
    $gsent->execute();
    $result = $gsent->fetchAll();

//ADD DB
    //Aqui agregamos nuevos elementos a la tabla
    if($_POST){
        $color = $_POST['color'];
        $descripcion = $_POST['descripcion'];

        $sql_add = 'INSERT INTO colores (color, descripcion) VALUES ( ?, ? )';
        $add_sent = $pdo->prepare($sql_add);
        $add_sent->execute([$color, $descripcion]);

        header('location: index.php');

    }

//GET EDIT VIEW

    //Aqui traemos un elemento de la lista con su id

    if($_GET){
        $id = $_GET['id'];
        $sql_edit_unique = 'SELECT * FROM colores WHERE id=?';
        $edit_unique = $pdo->prepare($sql_edit_unique);
        $edit_unique->execute([$id]);
        $result_edit = $edit_unique->fetch();
    }

