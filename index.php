<?php


?>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--Material icons-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <!-- Materialize CSS -->
        <link rel="stylesheet" href="css/materialize.css">
        <link rel="stylesheet" href="css/styles.css">

        <!--Google Fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Tinos&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lobster+Two&display=swap" rel="stylesheet">

        <title>Max and Heiko</title>
    </head>

    <body>
        
        <nav class="purple darken-2 navbar-fixed saira">
            <div class="nav-wrapper container">
                <a href="#" class="brand-logo hide-on-small-only" id="mh">Max & Heiko</a>
                <a href="#" class="brand-logo hide-on-med-and-up center-align">Max & Heiko</a>
                <a href="#" class="sidenav-trigger" data-target="mobile-links">
                    <i class="material-icons">menu</i>
                </a>

                <ul class="right hide-on-med-and-down">
                    <li><a href="index.php">Présentation</a></li>
                    <li><a href="html/projet1.php">Projet 1</a></li>
                    <li><a href="html/projet2.php">Projet 2</a></li>
                    <li><a href="html/projet3.php">Projet 3</a></li>
                    <li><a href="#contact" class="modal-trigger">Contact</a></li>
                </ul>
            </div>
        </nav>

        <ul class="sidenav saira" id="mobile-links">
            <li><a href="#presentation">Présentation</a></li>
            <li><a href="html/projet1.php">Projet 1</a></li>
            <li><a href="html/projet2.php">Projet 2</a></li>
            <li><a href="html/projet3.php">Projet 3</a></li>
            <li><a href="#contact" class="modal-trigger">Contact</a></li>
        </ul>

        <img hidden id="rain" src="img/rain.gif" alt="gif de pluie">

        <img hidden id="animal" src="img/louttre.gif" alt="gif d'une loutre qui glisse">

        <!--Présentation groupe-->
        <div class="container center-align" id="presentation">
            <h1 class="play">Présentation</h1>
            <div class="row">
                <div class="col s6 bor">
                    <h2 class="play flow-text">Maxence</h2>
                    <img class="responsive-img" src="img/Maxence.png" alt="photo de max" onmouseover="changeimage1(1,this)" onmouseout="changeimage1(2,this)">
                    <p class="josefin">Maxence Senetaire, 20 ans en première année à Guardia CyberSecurity School, possédant deux titres professionnels en informatique.</p>
                </div>
                <div class="col s6 bor">
                    <h2 class="play flow-text">Heiko</h2>
                    <img class="responsive-img" src="img/Heiko.jpg" alt="photo de heiko" onmouseover="changeimage2(1,this)" onmouseout="changeimage2(2,this)">
                    <p class="josefin">Heiko Carlier, 22 ans en première année à Guardia CyberSecurity School, précédement en prépa intégrée à EPITA Toulouse.</p>
                </div>
            </div>
        </div>

        <div class="center-align" >
            <h2>
                Voici nos projets :
            </h2>
        </div>

        <!--carrousel des projets-->
        <div class="container">
            <div class="carousel carousel-slider">
                <a href="html/projet1.php" class="carousel-item"><img class="" src="img/trophy.jpg" alt="photo 4l trophy"></a>
                <a href="html/projet2.php" class="carousel-item"><img class="" src="img/Screenshot_code_Py_Chaos.png" alt="photo projet Py Chaos"></a>
                <a href="html/projet3.php" class="carousel-item"><img class="" src="img/salle_info.webp" alt="photo projet python"></a>
            </div>
        </div>

        <?php include '../phpimports/template.php'; ?>
        
        <!--JS-->
        <script src="js/jquery.min.js" charset="utf-8"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script src="js/script.js" charset="utf-8"></script> 
    </body>
</html>