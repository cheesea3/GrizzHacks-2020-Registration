<?php
$namepass = false;
$emailpass = false;
$passwordpass = false;
require_once "./validation.php";
require_once "user.php";



if ($namepass && $emailpass && $passwordpass === true) {
    $user = new User("$name", "$email", $password);
    $name = $user->getName();
    $email = $user->getEmail();
    //bcrpyt encryption
    $password = password_hash($user->getPassword(), PASSWORD_BCRYPT);
    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->exec("INSERT INTO Users (username, password, email) VALUES ('$name','$password','$email')");
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
} else {
    echo "flop";
}


$conn = null;
