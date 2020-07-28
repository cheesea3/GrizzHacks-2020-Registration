<?php
$servername = "127.0.0.1";
$username = "root";
$password= "";

try {
    $conn = new PDO("mysql:host=$servername",$username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE DATABASE IF NOT EXISTS users";
    $conn->exec($sql);
    $sql = "use users";
    $conn->exec($sql);



} catch(PDOException $e){
    echo "connected nerrr" . $e->getMessage();
}


