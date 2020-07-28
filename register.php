<?php
require_once ("inc/conn.php");

$name = $email = $password = "";
$nameErr = $emailErr = $passErr  = "*";

// Return current date
$date = date('d-m-y h:i:s');
echo $date;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //name
    if (empty($_POST["name"])) {
        $nameErr = "* Name is required";
    } else {
        $name = $_POST["name"];
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "* Only letters and white space allowed";
        }
    }

    //email
    if (empty($_POST["email"])) {
        $emailErr = "* Email is required";
    } else {
        $email = $_POST["email"];
    }

    //password
    if (empty($_POST["password"])) {
        $passErr = "* Password is required";
    } else {
        $password = $_POST["password"];
    }

}
?>

<div class="input-content">

    <form class="input-content" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="inputbox">
            <div class="inputbox-content">
                <input id="name" type="text" name="name"  value="<?php echo $name;?>" required/>
                <label for="name">Name <span class="error"><?php echo $nameErr;?></span></label>
                <div class="underline"></div>
            </div>
        </div>

    <div class="inputbox">
        <div class="inputbox-content">
            <input id="email" type="email" name="email" value="<?php echo $email;?>" required/>
            <label for="email">Email <span class="error"><?php echo $emailErr;?></span></label>
            <div class="underline"></div>
        </div>
    </div>

    <div class="inputbox">
        <div class="inputbox-content">
            <input type="password" value="<?php echo $password;?>" id="pswd" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
            <label for="password">Password <span class="error"><?php echo $passErr;?></span></label>
            <div class="underline"></div>
        </div>
    </div>
        <input class="btn-confirm" type="submit" name="submit" value="Submit">
</form>

</div>

<?php
require "inc/classes/user.php";
$user = new User("$name", "$email", $password);
//bcrpyt encryption
$hash = password_hash($user->getPassword(), PASSWORD_BCRYPT);
?>


