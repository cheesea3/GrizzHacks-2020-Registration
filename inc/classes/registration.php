<?php
//initialize variables
$namepass = false;
$emailpass = false;
$passwordpass = false;
require_once "./validation.php";
require_once "user.php";


//first checks to make sure the name, email, and password is good.
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
    //mail to user
    $headers = 'From: noreply@grizzhacks.com';
    mail($email, "Thank you for registering to GrizzHacks", "Hello $name,\r\nThank you for registering. Don't forget too log back in to apply for GrizzHacks 5 and also upload your resume.\r\nFrom,\r\nThe GrizzHacks Team", $headers);


} else {
    echo "flop";
}



$conn = null;
