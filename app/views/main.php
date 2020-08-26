<html >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Daiyaan Ijaz">
    <title>GrizzHacks 5</title>


    <!-- CUSTOM -->
    <!-- Custom Styles -->
    <link href="<?php echo ROOT_URL; ?>/assets/css/form/container.css" rel="stylesheet">
    <link href="<?php echo ROOT_URL; ?>/assets/css/form/input.css" rel="stylesheet">
    <link href="<?php echo ROOT_URL; ?>/assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo ROOT_URL; ?>/assets/css/site.css" rel="stylesheet">
    <!-- Custom Styles -->
    <!-- Custom Scripts -->
    <!-- /CUSTOM -->







    <!-- Core -->
    <!-- Styles -->
    <!-- Scripts -->
    <script src="https://raw.githubusercontent.com/swup/preload-plugin/master/dist/SwupPreloadPlugin.min.js"></script>
    <script src="https://unpkg.com/swup@latest/dist/swup.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- /Core -->
</head>

<!-- body -->
<body class="Site">

<!-- Navbar -->

<!-- Navbar -->

<nav class="navbar noselect" style="border-bottom: 4px solid #0A1172">
    <a class="navbar-brand" href="http://localhost/grizzhacks/public" id="no-link">Grizzhacks 5</a>
    <ul class="nav justify-content-end">
        <?php
        navbar($items = array(ROOT_PAGE."register","Register","test3"));
        navbar($items = array(ROOT_PAGE."login","Login","test3"));
        ?>
    </ul>
</nav>


<!-- container -->
<main id="swup" class="Site-content transition-fade">
<div class="container">
     <?php include_once($view); ?>
</div>
</main>
<!-- /container -->



<!-- Footer -->
<footer class="footer">
    <div class="container">
        <span class="text-muted">GrizzHacks 5 - 2020</span>
    </div>
</footer>
<!-- Footer -->

<!-- Makes the site go zoom -->
<script src="//instant.page/5.1.0" type="module" integrity="sha384-by67kQnR+pyfy8yWP4kPO12fHKRLHZPfEsiSXR8u2IKcTdxD805MGUXBzVPnkLHw"></script>

</body>

<!--- no link -->
<script src="<?php echo ROOT_URL; ?>/assets/js/main.js"></script>
</html>
