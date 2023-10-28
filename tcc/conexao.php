<?php
function conectar()
{

    //escolher mysql ou postgresql

    $host = 'localhost';
    $db = 'mystic';
    $userId = 'root';
    $password = '';
    //$user = 'postgres';
    //$password = 'postgres';
    // $pdo = new PDO("pgsql:host=$host;port=5432;dbname=$db;", $user, $password);

    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $userId, $password);
return  $pdo;
}