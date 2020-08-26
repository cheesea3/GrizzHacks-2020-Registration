<?php

//initialize, used later to check input errors (if string is empty then...)
$name = $email = $password = $confirmpassword = "";
$nameErr = $emailErr = $passErr = "";
//hotfix
$asterik = "*";
?>


    <div class="input-content">
        <form class="input-content" name="session" method="post" action="../../inc/classes/registration.php">
            <div class="inputbox">
                <div class="inputbox-content">
                    <input id="name" type="text" name="name"  value="<?php echo $name;?>" required/>
                    <label for="name">Name <span class="error"><?php echo $asterik ." ". $nameErr;?></span></label>
                    <div class="underline"></div>
                </div>
            </div>

            <div class="inputbox">
                <div class="inputbox-content">
                    <input id="email" type="email" name="email" value="<?php echo $email;?>" required/>
                    <label for="email">Email <span class="error"><?php echo $asterik ." ". $emailErr;?></span></label>
                    <div class="underline"></div>
                </div>
            </div>

            <div class="inputbox">
                <div class="inputbox-content">
                    <input type="password" value="<?php echo $password;?>" id="pswd" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
                    <label for="password">Password <span class="error"><?php echo $asterik ." ". $passErr;?></span></label>
                    <div class="underline"></div>
                </div>
            </div>

            <div class="inputbox">
                <div class="inputbox-content">
                    <input type="password" value="<?php echo $confirmpassword;?>" name="confirmpassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
                    <label for="confirmpassword">Confirm Password <span class="error"><?php echo $asterik ." ". $passErr;?></span></label>
                    <div class="underline"></div>
                </div>
            </div>



            <input class="btn-confirm" type="submit" name="submit" value="Submit">
        </form>

    </div>


<?php
$_SESSION['name'] = $name;
$_SESSION['email'] = $email;
$_SESSION['password'] = $password;
?>
