<?php

    //Aqui hacemos una conexcion con pdo a la base de

    $credentials = 'mysql:host=localhost;dbname=ts_colors'; //Aqui ponemos el host y el nombre de la base de datos para acceder
    $user = 'root'; //aqui es el usuario para a la base de datos
    $pass = null;   // El password de la base de datos

    try{
        $pdo  = new PDO($credentials,$user,$pass);

        // echo 'Conectado';

    }catch(PDOException $e){
        print "¡Error!:" . $e->getMessage() . "</br>";
        die();
    }