<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php include "../phpimports/StyleImports.php"; ?>

    <title>4L Trophy</title>
</head>
    <body>
        
        <?php include "../phpimports/navbar.php"; ?>

        <img hidden id="rain" src="../img/rain.gif" alt="gif de pluie">
        <!--projet 1-->
        <div class="container center-align" id="projet1">
            <h1 class="play">4L Trophy</h1>
            <p class="tinos">
                Le Raid 4L Trophy est un raid automobile solidaire destiné aux jeunes de moins de 28 ans et couru exclusivement en Renault 4.
                Créé par Jean-Jacques Rey en 1997, il est organisé par l'entreprise Desertours en partenariat avec l'École supérieure de commerce de Rennes, qui apporte l'encadrement bénévole.
                Ce raid, composé de plusieurs milliers de voitures, amène au Maroc des jouets et des fournitures scolaires, ainsi que quelques tonnes de nourriture et quelques milliers d'euros de dons.
            </p>

            <!--Parallax-->
            <div class="parallax-container">
                <div class="parallax"><img src="../img/trophy.jpg" alt="photo 4l trophy en parallax"></div>
            </div>

            <p class="tinos">
                Le 4L Trophy permet d'apporter des fournitures scolaires aux enfants du Maroc, en collaboration avec l'association « Enfants du désert ». Chaque équipage doit emporter soit deux sacs à dos avec des fournitures scolaires et deux sacs de sport avec des affaires sportives, soit un sac à dos et un de sport remplis et un chèque de minimum 20 € au nom de l'association « Enfants du désert ». Avant 2006, chaque équipage devait emporter 50 kg de matériel scolaire ou un chèque au nom de l'association. L'ensemble de la collecte est ensuite distribué sur place aux enfants marocains. Norauto a également pu offrir 90 vélos pour la mobilité des enfants pour aller à l’école, des vêtements de sports ont aussi été offerts.
            </p>
            <p class="tinos">
                Les dons faits à l'association « Enfants du désert » permettent la construction d'écoles au Maroc. Cette association effectue la distribution auprès d'associations locales, « pour ne pas faire de néo-colonialisme »3. Entre 2012 et 2019, 26 classes ont été ouvertes grâce au raid.
            </p>
            <img class="responsive-img imgw" src="../img/4lsand.webp" alt="photo 4L dans le sable">
            
            <!--Carousel projet 1-->
            <div class="row valign-wrapper">

                <i class="material-icons medium prev col m1 l1 hide-on-small-and-down">chevron_left</i>
                
                <div class="container carousel carousel-slider col s12 m12 l12">
                    <a href="#one!" class="carousel-item">
                        <div class="row yellow accent-4">
                            <img src="../img/4Lfun.jpg" alt="photo 4l avec des gens content" class="col s6">
                            <p class="col s6 black-text lobster">
                                Cet événement est avant tout une expérience inoubliable et partagée avec tous les participants du 4L Trophy, une ambiance de partage et d'entraide qui donne envie chaque années à de nouveaux adhérants de participer au projet.
                            </p>    
                        </div>
                    </a>

                    <a href="#two!" class="carousel-item">
                        <div class="row blue-grey">
                            <img src="../img/4Lmap.jpg" alt="image du trajet du 4L" class="col s6">
                            <p class="col s6 black-text lobster">
                                Plus de 8000 kilomètres en compagnie de milliers d'autres 4L, un premier trajet assez important consiste à ce rendre en bas des côtes Espagnol, grâce au ferry qui nous dépose au maroc on continue notre route dans le désert jusqu'a notre retour en France.
                            </p>    
                        </div>
                    </a>

                    <a href="#three!" class="carousel-item">
                        <div class="row light-blue">
                            <img src="../img/4Lsponsor.webp" alt="image d'une 4l floquée par les sponsors" class="col s6">
                            <p class="col s6 black-text lobster">
                                De nombreux sponsors permettent de faire cet événement comme des écoles (guardia) ou encore des marques qui aident à diminuer les frais de l'incription (3200 euros) ainsi que l'achat de la 4L, des fournitures pour les enfants du désert, les frais de péages, etc
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