<?php

//initialize, used later to check input errors (if string is empty then...)
$name = $email = $password = $confirmpassword = "";
$nameErr = $emailErr = $passErr = $cpassErr = "";
//hotfix
$asterik = "*";
?>


<div class="FormContainer">
    <div class="loginFormContainer">
        <div class="leftDiv">
            <div class="content">
                <img src="https://pbs.twimg.com/profile_images/1121423887399518209/5My82RTk_400x400.png" />
                <h6>GrizzHacks 5</h6>
                <p>
                    We require you to sign up <br />
                    so we can give you notifications.
                </p>
            </div>
        </div>

        <div class="rightDiv">
            <div style="padding-bottom: 20px">
                <h5 class="input-header">Registration</h5>
            </div>
            <form class="" method="post" action="<?php echo ROOT_URL; ?>/register/signup">

                <div class="input-content">
                    <div class="inputbox-content">
                        <input id="username" type="text" value="<?php echo $name;?>" required/>
                        <label for="username">Username <span class="error"><?php echo $asterik ." ". $nameErr;?></span></label>
                        <div class="underline"></div>
                    </div>

                    <div style="padding-top: 20px; padding-bottom: 20px">
                        <div class="inputbox-content">
                            <input id="email" type="email" name="email" value="<?php echo $email;?>" required/>
                            <label for="email">Email <span class="error"><?php echo $asterik ." ". $emailErr;?></span></label>
                            <div class="underline"></div>
                        </div>
                    </div>


                    <div style="padding-top: 20px; padding-bottom: 20px">
                        <div class="inputbox-content">
                            <input id="password" type="password" value="<?php echo $password;?>" required/>
                            <label for="password">Password <span class="error"><?php echo $asterik ." ". $passErr;?></span></label>
                            <div class="underline"></div>
                        </div>
                    </div>

                    <div style="padding-top: 20px; padding-bottom: 20px">
                        <div class="inputbox-content">
                            <input id="password" type="password" value="<?php echo $password;?>" required/>
                            <label for="confirmpass">Confirm Password <span class="error"><?php echo $asterik ." ". $cpassErr;?></span></label>
                            <div class="underline"></div>
                        </div>
                    </div>

                    <div class="spacing">
                        <button class="cbutton hue">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
