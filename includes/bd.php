<?php

    use Medoo\Medoo;
    require_once 'includes/Medoo.php';
    $database= new Medoo([
        'type' => 'mysql',
        'host' => 'db4free.net:3306',
        'database' => 'efiama_bd',
        'username' => 'efiama',
        'password' => 'efiama2022'
      ]);

    /*
    use Medoo\Medoo;
    require_once 'includes/Medoo.php';
    $database= new Medoo([
        'type' => 'mysql',
        'host' => 'localhost',
        'database' => 'recetario',
        'username' => 'root',
        'password' => 'root'
      ]);
    */
?>