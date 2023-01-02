<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php include "../phpimports/StyleImports.php"; ?>

    <title>Projet 3 Guardia</title>
</head>
    <body>
        
    <?php include "../phpimports/navbar.php"; ?>

        <img hidden id="rain" src="../img/rain.gif" alt="gif de la pluie">
        <!--projet 3-->
        <div class="container center-align" id="projet1">
            <h1 class="play">Initiation à l'Algo</h1>
            <p class="tinos">Pour ce troisième et dernier projet nous allons vous présenter le troisième projet que nous avons effectués au sein de Guardia Cybersecurity School.
                Ce projet a été assez facile pour moi car j'avais déjà fait du Pyhton auparavent et j'avais déjà de très bonnes bases en algorithmique.
            </p>
            
            <!--Parallax-->
            <div class="parallax-container">
                <div class="parallax"><img src="../img/python.webp" alt="logo du language de programmation Pyhton en parallaxe"></div>
            </div>
            <p class="tinos">Le projet consistait à coder plusieurs jeux différents en Python, un Pierre Feuille Ciseau, un Morpion et un PacMan pour les plus avancés
                <br> (Et si vous vous posez la question, oui, c'est moi sur la photo !)
            </p>           
            
            <img class="responsive-img imgw" src="../img/salle_info.webp" alt="photo d'une salle informatique">

            <!--Carousel projet 3-->
            <div class="row valign-wrapper">
                <i class="material-icons medium prev col m1 l1 hide-on-small-and-down">chevron_left</i>
                <div class="container carousel carousel-slider col s12 m12 l12">
                    <a href="#one!" class="carousel-item">
                        <div class="row yellow accent-4">
                            <img src="../img/ShiFuMi.png" alt="capture d'écran d'une partie de mon code shifumi" class="col s6">
                            <p class="col s6 black-text lobster">Voici une partie de mon code pour le ShiFuMi.</p>    
                        </div>
                    </a>

                    <a href="#two!" class="carousel-item">
                        <div class="row blue-grey">
                            <img src="../img/morpion.png" alt="capture d'écran d'une partie de mon code morpion" class="col s6">
                            <p class="col s6 black-text lobster">Ce Morpion a été codé pour qu'il s'affiche dans l'invité de commande et non grâce à une interface graphique.</p>    
                        </div>
                    </a>

                    <a href="#three!" class="carousel-item">
                        <div class="row light-blue">
                            <img src="../img/pacman.png" alt="capture d'écran d'une partie de mon code PacMan" class="col s6">
                            <p class="col s6 black-text lobster">Le PacMan a été le projet sur lequel j'ai passé le plus de temps et qui était le plus compliqué à mettre en place. Par ailleurs, il ne fonctionne toujours pas.</p>    
                        </div>
                    </a>
                </div>
                <i class="material-icons medium next col m1 l1 hide-on-small-and-down">chevron_right</i>
            </div>
        </div>

        

        <?php include '../phpimports/footer.php'; ?>

       <?php include "../phpimports/ScriptImports.php"; ?>

    </body>
</html>