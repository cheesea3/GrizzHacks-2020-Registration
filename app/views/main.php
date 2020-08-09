<html>
<head>
    <title>GrizzHacks 5</title>


    <!-- CUSTOM -->
    <!-- Custom Styles -->
    <link href="http://localhost/grizzhacks/public/temp/css/site.css" rel="stylesheet">
    <!-- Custom Styles -->
    <!-- Custom Scripts -->
    <!-- /CUSTOM -->







    <!-- Core -->
    <!-- Styles -->
    <link href="http://localhost/grizzhacks/public/temp/css/bootstrap.css" rel="stylesheet">
    <!-- Scripts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
</head>

<!-- body -->
<body>

<!-- Navbar -->
<nav class="navbar noselect" style="border-bottom: 4px solid #0A1172">
    <a class="navbar-brand" href="<?php echo ROOT_URL; ?>" id='no-link'>Grizzhacks 5</a>

    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link active" href="<?php echo ROOT_URL; ?>/users">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Register</a>
        </li>
</nav>
<!-- Navbar -->

<!-- container -->
<div class="container">

    <div class="row">
        <?php require($view); ?>
    </div>

</div>
<!-- /container -->

</body>
<!-- /body -->
</html>
