<?php

session_start();

if (isset($_SESSION["user_id"])) {

    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM client
            WHERE id = {$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}

$id_voiture = $_GET['id'];
echo $id_voiture;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Détails voiture</title>
    <meta name="description" content="Supercar sales website">
    <link rel="shortcut icon" href="assets/img/logo.jpg" type="image/jpg">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Raleway:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Antic">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/best-carousel-slide.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Footer-Big-Logo.css">
    <link rel="stylesheet" href="assets/css/Carousel_Image_Slider-mycarousel.css">
    <link rel="stylesheet" href="assets/css/Carousel_Image_Slider.css">
    <link rel="stylesheet" href="assets/css/Carousel-Hero.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-v2-Modal--Full-with-Google-Map.css">
    <link rel="stylesheet" href="assets/css/Contact-FormModal-Contact-Form-with-Google-Map.css">
    <link rel="stylesheet" href="assets/css/divider-text-middle.css">
    <link rel="stylesheet" href="assets/css/Feature-Block-Image-Three-With-Full-Wide-Screen.css">
    <link rel="stylesheet" href="assets/css/Form-Search.css">
    <link rel="stylesheet" href="assets/css/Image-Tab-Gallery-Horizontal.css">
    <link rel="stylesheet" href="assets/css/Login-Box-En-login-box-en.css">
    <link rel="stylesheet" href="assets/css/Ludens---4-Show-Details.css">
    <link rel="stylesheet" href="assets/css/Ludens-Client---Login-Dropdown.css">
    <link rel="stylesheet" href="assets/css/Navbar-with-menu-and-login-km-Navbar.css">
    <link rel="stylesheet" href="assets/css/Pretty-Search-Form-.css">
    <link rel="stylesheet" href="assets/css/Responsive-Form-Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Responsive-Form.css">
    <link rel="stylesheet" href="assets/css/Search-Input-responsive.css">
    <link rel="stylesheet" href="assets/css/Section-Title.css">
    <link rel="stylesheet" href="assets/css/Sign-Up-Form---Gabriela-Carvalho.css">
    <link rel="stylesheet" href="assets/css/Single-Page-Contact-Us-Form.css">
    <link rel="stylesheet" href="assets/css/Swipe-Slider-7-styles.min.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search-search-table.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="assets/bootstrap/css/style.css">

    <style>
        @media (max-width: 767px) {
            .top-container {
                padding: 0;
            }

            .w3-content {
                max-width: 100%;
            }

            .w3-col {
                flex: 1 1 50%;
            }

            .col-md-6 {
                padding: 0;
            }

            .col-xl-4 {
                flex: 1 1 100%;
                margin-top: 20px;
            }
        }

        .w3-content {
            max-width: 100px;
        }

        .w3-opacity,
        .w3-hover-opacity:hover {
            opacity: 1 !important;
        }

        @media screen and (max-width: 767px) {
            .table-responsive {
                overflow-x: auto;
            }

            table {
                width: 100%;
                max-width: none;
            }

            td {
                display: block;
                text-align: center;
            }

            td:first-child {
                margin-bottom: 20px;
            }

            td:last-child {
                margin-top: 20px;
            }
        }
    </style>

</head>

<body>
    <br><br><br><br><br>


    <nav class="fixed-top bg-white">
        <nav class="navbar navbar-light navbar-expand-md">
            <div class="container"><button data-bs-toggle="collapse" class="navbar-toggler text-primary border-0"
                    data-bs-target="#navcol-1"><span><i class="fas fa-bars fs-4"></i></span></button>
                <div></div>
                <header id="header-2"></header>
                <div class="logo">
                    <a class="navbar-brand d-flex align-items-center logo" href="Accueil.php">
                        <img src="assets/img/logo.jpg" alt="Supercar Logo">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><a class="nav-link" href="Accueil.php">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link active" href="Voitures.php">Voitures<br></a></li>
                        <li class="nav-item"><a class="nav-link" href="Demande d_essai1.php">Demande d’Essai<br></a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="Evenement.php">Évenement</a></li>
                        <li class="nav-item"><a class="nav-link" href="Contactez-nous.php">Contactez-nous</a></li>
                    </ul>
                </div>

                <?php if (isset($user)): ?>

                    <div class="dropdown show">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fa fa-user"></i>&nbsp;&nbsp;
                            <?= htmlspecialchars($user["name"]) ?>&nbsp;
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="deconnexion.php">Se déconnecter</a>
                            <a class="dropdown-item" href="Liste_demande.php">Liste des demandes</a>
                        </div>
                    </div>

                <?php else: ?>

                    <div class="dropdown show">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fa fa-user"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="Se connecter.php">Se connecter</a>
                            <a class="dropdown-item" href="S_inscrire.php">S'inscrire</a>
                        </div>
                    </div>

                <?php endif; ?>


            </div>
            </div>
        </nav>
    </nav>


    <?php
    // Connexion à la base de données
    $mysqli = require __DIR__ . "/database.php";
    $sql_voiture = "select * from voiture WHERE id_voiture = '$id_voiture' ";
    $detail = mysqli_query($mysqli, $sql_voiture);
    //print_r($detail);
    
    while ($row_voiture = mysqli_fetch_assoc($detail)) {
        echo "<div class='table-responsive'>";
        echo "<table style='table-layout: fixed; width: 100%;'>";
        echo "<tr>";
        echo "<td>";
        echo "<div class='w3-content' style='max-width:700px; margin-left:50px; margin-right:50px;'>";
        echo "<img class='mySlides' src='assets/img/VOITURE/" . $row_voiture['image1'] . "' style='width:100%'>";
        echo "<img class='mySlides' src='assets/img/VOITURE/" . $row_voiture['image2'] . "' style='width:100%;display:none'>";
        echo "<img class='mySlides' src='assets/img/VOITURE/" . $row_voiture['image3'] . "' style='width:100%;display:none'>";
        echo "<img class='mySlides' src='assets/img/VOITURE/" . $row_voiture['image4'] . "' style='width:100%;display:none'>";

        echo "<div class='w3-row-padding w3-section'>";
        echo "<div class='w3-col s3'>";
        echo "<img class='demo w3-opacity w3-hover-opacity-off' src='assets/img/VOITURE/" . $row_voiture['image1'] . "' style='width:100%;cursor:pointer' onclick='currentDiv(1)'>";
        echo "</div>";
        echo "<div class='w3-col s3'>";
        echo "<img class='demo w3-opacity w3-hover-opacity-off' src='assets/img/VOITURE/" . $row_voiture['image2'] . "' style='width:100%;cursor:pointer' onclick='currentDiv(2)'>";
        echo "</div>";
        echo "<div class='w3-col s3'>";
        echo "<img class='demo w3-opacity w3-hover-opacity-off' src='assets/img/VOITURE/" . $row_voiture['image3'] . "' style='width:100%;cursor:pointer' onclick='currentDiv(3)'>";
        echo "</div>";
        echo "<div class='w3-col s3'>";
        echo "<img class='demo w3-opacity w3-hover-opacity-off' src='assets/img/VOITURE/" . $row_voiture['image4'] . "' style='width:100%;cursor:pointer' onclick='currentDiv(4)'>";
        echo "</div>";
        echo "</div>";
        echo "</div>";


        echo "</td>";

        echo "<td>";
        echo "<div class='col-md-20'>";
        echo "<div class='col-sm-10 col-md-20 col-xl-10 offset-xl-0' style='margin-left:50px; margin-right:50px;'>";
        echo "<h1>" . $row_voiture['marque'] . "&nbsp;&nbsp;" . $row_voiture['modele'] . "</h1>";
        echo "<ul class='list-inline fs-6' style='margin-top: 30px;'>";
        $rating = $row_voiture['rating'];
        for ($i = 1; $i <= 5; $i++) {
            if ($i <= $rating) {
                echo "<li class='list-inline-item'><i class='fas fa-star text-warning'></i></li>";
            } else {
                echo "<li class='list-inline-item'><i class='far fa-star text-muted'></i></li>";
            }
        }
        echo "</ul>";
        echo "<h2 style='margin-top: 30px;margin-bottom: 10px;padding-top: 0px;padding-bottom: 30px;padding-left: 12px;'>RS " . $row_voiture['prix'] . "</h2>";
        echo "<p style='font-size: 20px;'>";
        echo "<span style='color: rgb(17, 17, 17);'>Marque : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;" . $row_voiture['marque'] . "</span><br>";
        echo "<span style='color: rgb(17, 17, 17);'>Modèle : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;" . $row_voiture['modele'] . "</span><br>";
        echo "<span style='color: rgb(17, 17, 17);'>Type : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; " . $row_voiture['type'] . "&nbsp;</span><br>";
        echo "<span style='color: rgb(17, 17, 17);'>Année : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;" . $row_voiture['annee'] . "</span><br>";
        echo "</p>";
        echo "<p style='margin-top: 30px;'>" . $row_voiture['description'] . "</p>";
        echo "<a href='Demande d_essai.php?id=" . $row_voiture['id_voiture'] . "' class='btn btn-primary' style='margin-top:20px;'>Demander en essai</a>";
        echo "</div>";
        echo "</div>";
        echo "</td>";
        echo "</tr>";
        echo "</table>";
        echo "</div>";
    }
    ?>


    <br><br><br><br>
    

    <footer id="myFooter" style="padding-bottom: 0px;margin-bottom: 0px;margin-top: 0px;">
        <div class="container-fluid" style="margin-bottom: -103px;padding-bottom: 28px;">
            <div class="row text-center">
                <div class="col-12 col-sm-6 col-md-3">
                    <h1 class="logo" style="margin-top:35px;"><a href="Accueil.php">&nbsp;<a href="Accueil.php">
                          <img src="assets/img/logo.jpg" alt="Supercar Logo">
                        </a>&nbsp;</a></h1>
                </div>
                <div class="col-12 col-sm-6 col-md-2">
                    <h5>Commencer</h5>
                    <ul>
                        <li><a href="Accueil.php">Accueil</a></li>
                        <li><a href="Voitures.php">Voitures<br></a></li>
                        <li><a href="Demande d_essai1.php">Demande d'essai</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-md-2">
                    <h5>Nos voitures</h5>
                    <ul>
                        <li><a href="Voitures.php">Marques</a></li>
                        <li><a href="Détails.php">Détails voitures<br></a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-2">
                    <h5>Nos évènements</h5>
                </div>
                <div class="col-md-3 social-networks">
                    <div></div><a class="facebook" href="#"><i class="fa fa-facebook"></i></a><a class="twitter" href="#"><i class="fa fa-twitter"></i></a><a class="google" href="#"><i class="fa fa-google-plus"></i></a><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a><button class="btn btn-primary" href="Contactez-nous.html" style="margin-top: 5px;padding-left: 0px;padding-right: 0px;" type="button" onclick="window.location.href='Contactez-nous.php'">Contactez-nous</button><button class="btn btn-primary" style="margin-top: 5px;padding-left: 0px;padding-right: 0px;" type="button" onclick="window.location.href='Politiques de confidentialité.php'">Politiques de confidentialité</button>
                </div>
            </div>
            <div class="row footer-copyright" style="margin-bottom: -30px; margin-top: -60px;">
                <div class="col-lg-12">
                    <p>© 2023 Supercar ~ Designed By&nbsp;<a href="#">Anditiana - Kim - Loïc.</a></p>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/bold-and-bright.js"></script>
    <script src="assets/js/Contact-FormModal-Contact-Form-with-Google-Map.js"></script>
    <script src="assets/js/Image-Tab-Gallery-Horizontal.js"></script>
    <script src="assets/js/Swipe-Slider-7.js"></script>
    <script src="assets/js/Table-With-Search.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <style>
        .owl-carousel .item img {
            display: block;
            width: 100%;
            height: auto;
        }
    </style>
    <script>

        $(document).ready(function () {
            $('.owl-carousel').owlCarousel({
                items: 1,
                loop: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                dots: true,
                dotsEach: true
            });
        });

        function currentDiv(n) {
            showDivs(slideIndex = n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            if (n > x.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = x.length }
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
            }
            x[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " w3-opacity-off";
        }
    </script>
</body>

</html>