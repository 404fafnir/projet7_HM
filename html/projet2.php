<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php include "../phpimports/StyleImports.php"; ?>

    <title>Py_Chaos</title>
</head>
    <body>
        
    <?php include "../phpimports/navbar.php"; ?>

        <img hidden id="rain" src="../img/rain.gif" alt="gif de pluie">
        <!--projet 2-->
        <div class="container center-align" id="projet1">
            <h1 class="play">Py Chaos</h1>
            <p class="tinos">
                Py_Chaos est un code python que j'ai (Heiko) créer en ... 2022, à la suite du visionage 
                d'une vidéo de la chaine youtube NumberPhile intitulée "Chaos Game". Le jeu est très simple mais pourtant,
                il produit des résultats pour le moins surprenants...
                sur un graphique orthonormé, choisissez aléatoirement 3 points A, B et C. Créez ensuite un point depuis lequel vous allez commencer.
                Prenez ensuite un dé classique, si le dé tombe sur 1 ou 2, vous vous déplacerez de votre position actuelle à la moitié de
                la distance qui vous sépare du point A, si le dé tombe sur 3 ou 4, c'est pareil mais vers le point B et pour 5 et 6 c'est vers 
                le point C.

                répétez autant de fois que vous en aurez le courage.
            
            </p>
            
            <!--Parallax-->
            <div class="parallax-container">
                <div class="parallax"><img src="../img/triangle-de-sierpinski.jpg" alt="image en parallaxe d'un triangle de sierpinski"></div>
            </div>
            
                        
            <img class="responsive-img imgw" src="../img/Screenshot_code_Py_Chaos.png" alt="photo de mon code">

            <p class="black-text tinos">
                Vous pourrez vous apperçevoir que malgré l'omniprésence de l'aléatoirement
                on se retrouve quand même avec des figures extrêmement régulières, ordonnées et même spéciales, j'ai
                nommé des fractales et dans cet exemple plus précisement des triangles de Sierpiński.
            </p>

            <!--Carousel projet 2-->
            <div class="row valign-wrapper">
            
                <i class="material-icons medium prev col m1 l1 hide-on-small-and-down">chevron_left</i>
                
                <div class="container carousel carousel-slider col s12 m12 l12">
                    <a href="#one!" class="carousel-item">
                        <div class="row yellow accent-4">
                            <img src="../img/PyChaos_150_3_2_10k.png" alt="capture d'écran de la première figure" class="col s6">
                            <p class="col s6 black-text lobster">Voici la figue que l'on obtient en ayant une grille de 150, 3 points de départs, que la division
                                s'effectue par 2 et que l'on a 10000 itérations !
                            </p>    
                        </div>
                    </a>

                    <a href="#two!" class="carousel-item">
                        <div class="row blue-grey">
                            <img src="../img/PyChaos_150_4_2_10k.png" alt="capture d'écran de la deuxième figure" class="col s6">
                            <p class="col s6 black-text lobster">
                                Voici la figue que l'on obtient en ayant une grille de 150, 4 points de départs, que la division
                                s'effectue par 2 et que l'on a 10000 itérations, ce n'est plus techniquement un triangle de serpinski, mais ça n'en reste pas moins 
                                une fractale !
                            </p>    
                        </div>
                    </a>

                    <a href="#three!" class="carousel-item">
                        <div class="row light-blue">
                            <img src="../img/PyChaos_150_3_3_1k.png" alt="capture d'écran de la troisième figure" class="col s6">
                            <p class="col s6 black-text lobster">
                                Voici la figue que l'on obtient en ayant une grille de 150, 3 points de départs, que la division
                                s'effectue par 3 et que l'on a 1000 itérations, on se retrouve avec des mini triangles de serpinksi qui se répètent.
                            </p>
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