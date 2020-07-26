<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Daiyaan Ijaz">
    <title>GrizzHacks</title>


    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">


    <!-- Inline CSS -->
    <style>

    </style>
    <!-- Custom styles -->
    <link href="css/site.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top" style="border-bottom: 4px solid #0A1172">
    <a class="navbar-brand" href="index.php">Grizzhacks 5</a>
</nav>

<div class="container" style="padding: 40px;">
        <h1>GrizzHacks 5 Registration</h1>
        <p class="lead">Please complete the below form to register for GrizzHacks 5 at Oakland University.<br> GrizzHacks is open to all graduate, undergraduate, high school, and middle school students, as well as those who have graduated within the last calendar year. You don’t need to be an engineering major; If you have a passion for technology and the drive to change the world, you belong at GrizzHacks.</p>
    <button class="button" style="font-size:14px;" onclick="window.location.href= 'https\:\/\/forms.gle/E4EHr6GWZAfF41qu5'">Application Open Now!</button>


</div><!-- /.container -->




<!-- Login Module -->
<button class="open-button" onclick="openForm()">Log In</button>

<div class="form-popup" id="myForm">
    <form action="/action_page.php" class="form-container">
        <h1>Login</h1>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit" class="btn">Login</button>
        <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
    </form>
</div>




<footer class="footer mt-auto py-3" style="padding-top: 20px; display:block; position:relative; bottom:0; border-top: 1px solid #225378; margin-bottom:0;">
    <div class="container">

        <div class="row">
            <div class="col-sm-3"><span class="text-muted lead"><h6>The GrizzHacks student team is passionate about technology and organizing engaging events on Oakland University's campus. Contact us to know more or to get involved!</h6></span></div>
        </div>
    </div>
</footer>

</body>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


<!--- to top -->
<script src="js/main.js"></script>

</html>
