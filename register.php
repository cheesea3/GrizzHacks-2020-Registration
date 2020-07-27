
<div class="input-content">
<form class="input-content" method="post" action="validation.php">

        <div class="inputbox">
            <div class="inputbox-content">
                <input id="name" type="text" required/>
                <label for="name">Name <span class="error">* <?php echo $nameErr;?></span></label>
                <div class="underline"></div>
            </div>
        </div>

    <div class="inputbox">
        <div class="inputbox-content">
            <input id="name" type="email" required/>
            <label for="name">Email <span class="error">* <?php echo $emailErr;?></span></label>
            <div class="underline"></div>
        </div>
    </div>

    <div class="inputbox">
        <div class="inputbox-content">

            <input type="password" id="pswd" name="pswd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
            <label for="pswd">Password <span class="error">* <?php echo $passErr;?></span></label>
            <div class="underline"></div>
        </div>
    </div>
        <input class="btn-confirm" type="submit" name="submit" value="Submit">

</form>

</div>



