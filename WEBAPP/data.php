<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Plymouth Crime Offences</title>
    <!-- Tab Logo-->
    <link rel="icon" type="image/x-icon" href="assets/img/alex.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg bg-secondary text fixed-top" id="mainNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">Plymouth Crime Offences</a>
    <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">Home</a></li>
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="data.php">Dataset</a></li>
        </ul>
    </div>
</nav>
<!-- Masthead-->
<header class="masthead bg-primary text-black text-center">
</header>
<!-- Table Section-->
<h1 class="text-center masthead-heading text-uppercase mb-0">Plymouth Crime offences</h1>
<section class="page-section bg-primary text-black mb-5" id="dataset">
    <div class="container">
        <?php
        echo "<html><body><table align='center'>\n\n";
            $f = fopen("assets/data/crime.csv", "r");
            while (($line = fgetcsv($f)) !== false) {
            echo "<tr><tr>";
                foreach ($line as $cell) {
                echo "<td><td><td><td><td><td><td><td>" . htmlspecialchars($cell) . "</td></td></td></td></td></td></td></td>";
                }
                echo "</tr></tr>\n";
            }
            fclose($f);
            echo "\n</table></body></html>";
            ?>
    </div>
    </div>
</section>
<!-- Footer-->
<footer class="footer">
    <div class="container">
        <div class="text-center mt-4">
            <!-- Footer GitHub Icon-->
            <h4 class="text-center font-italic mb-4">My GitHub</h4>
            <div class="divider-custom"></div>
            <a class="btn btn-outline-danger btn-social mx-1" href="https://github.com/michalmpeis"><i class="fab fa-fw fa-github"></i></a>
            <div class="divider-custom"></div>
        </div>
    </div>
</footer>
<!-- Copyright Section-->
<div class="copyright py-4 text-center font-italic text-white">
    <div class="container"><small>Copyright © Alexandros Michalmpeis</small></div>
</div>
<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
<div class="scroll-to-top d-lg-none position-fixed">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
</div>
<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>


