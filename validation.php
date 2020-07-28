<?php
$name = $email = $password = "";
$nameErr = $emailErr = $passErr  = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //name
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = $_POST["name"];
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    //email
    if (empty($_POST["email"])) {
        $emailErr = "Name is required";
    } else {
        $email = $_POST["email"];
    }

    //password
    if (empty($_POST["password"])) {
        $passErr = "Password is required";
    } else {
        $password = $_POST["password"];
    }

}
