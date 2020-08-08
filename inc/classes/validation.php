<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //name
    if (empty($_POST["name"])) {
        $nameErr = "* Name is required";
    } else if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        $nameErr = "* Only letters and white space allowed";
    } else {
        //temporarily set variable to search and see if value exists in db already
        $namepass = $_POST["username"];


        //query to select, avoided using data variable in query, instead... a placeholder
        $conn->prepare("SELECT * FROM users WHERE email=?");

        //if all is well, variable will be set after validation
        $name = $_POST["name"];
        $namepass = true;
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
