<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //name
    if (empty($_POST["name"])) {
        $nameErr = "* Name is required";
    } else {
        $name = $_POST["name"];
        $namepass = true;
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "* Only letters and white space allowed";
        }
    }

    //email
    if (empty($_POST["email"])) {
        $emailErr = "* Email is required";
    } else {
        $email = $_POST["email"];
        $emailpass = true;
    }

    if (empty($_POST["password"])) {
        $passErr = "Password cannot be empty";
    } else {
        if (empty($_POST["confirmpassword"])) {
            $passErr = "Confirmed Password cannot be empty";
        } else {
            //password
            if ($_POST["password"] === $_POST["confirmpassword"]) {
                $password = $_POST["password"];
                $passwordpass = true;
            } else {
                $passErr = "Password does not match";
            }
        }
    }
}
