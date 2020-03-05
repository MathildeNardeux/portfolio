<!DOCTYPE html>
<html lang="fr" class="w-100">

<head>
    <meta charset="UTF-8">
    <title>Portfolio Mathilde Nardeux</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 500px)" href="css/inf800.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


</head>

<body data-spy="scroll" data-offset="80">
    <header>
        <div class="container-fluid p-0">

            <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
                <a class="navbar-brand text-light" href="#accueil">Logo</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon "></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav nav text-light">
                        <li class="nav-item">
                            <a class="nav-link" href="#accueil">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#presentation">Présentation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#projets">Projets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#competences">Compétences</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>

                    </ul>
                </div>
            </nav>

        </div>
    </header>




    <main class="container-fluid">
        <section id="accueil" class="marginNav">
            <div class="accueilBloc">
                <div class="elementPres">
                    <h1>Portfolio</h1>
                    <h2 class="mathilde">Mathilde</h2>
                    <h2 class="nardeux">Nardeux</h2>
                    <h3>Webdesign - Intégration web</h3>
                    <!--                    <h2>Etudiante IUT MMI - Laval</h2>-->
                </div>

                <div class="ombrePhoto">
                    <div class="ombreBis">
                        <img src="css/images/identit%C3%A9.png" alt="" class="photoPerso">
                    </div>
                </div>


            </div>
            <div class="declencheScroll"><a href="#presentation"><i class="fas fa-chevron-down"></i></a>
                <p>Scroll ou clic pour découvrir</p>
            </div>

        </section>

        <section id="presentation">
            <div class="aPropos marginNav">
                <h3>A propos</h3>

                <div class="fondPres bg-white">
                    <p class="text-justify">Je m'appelle <strong>Mathilde NARDEUX</strong> et je suis étudiante en deuxième année à <strong>l'IUT Métiers du multimédia et de l'Internet</strong> de Laval. Je me passionne par <strong>le web, le design et l'audiovisuel</strong>. Je souhaiterai me spécialiser dans les domaines du webdesign ou du développement front end. Après un bac ES, j'ai choisi le DUT MMI pour approfondir mes connaissances dans le multimédia et avoir une formation polyvalente autour de la création graphique et le développement web. Je souhaite intégrer une licence pro dans le web en <strong>alternance</strong> dans le milieu du <strong>web</strong></p>
                </div>

                <a href="images/documents/CV.pdf"><button class="boutonCV">Voir mon CV</button>
                </a>
            </div>
        </section>



        <section id="projets">
            <div id="Galerie" class="marginNav">
                <h3>Mes réalisations</h3>
                <p class="introProj">Dans le cadre de projets scolaires, professionnels, personnels ou associatifs, j'ai pu aborder différens types de projet : du web à l'audiovisuel, en passant par l'infographie. </p>

                <div id="listeProjet">
                    <div class="zeroDechet">
                        <div class="unProjet" data-toggle="modal" data-target="#zerodechet">
                            <img src="images/galerie/zeroDechet/couv.png">
                            <div class="descProjet">
                                <p><strong>WEB</strong></p>
                                <p>Développement webdocumentaire sur le zéro déchet</p>

                                <div class="outil">
                                    <img src="images/logiciel/photoshop.png" alt="">
                                    <img src="images/logiciel/html.png" alt="">
                                    <img src="images/logiciel/css3.png" alt="">
                                </div>
                            </div>
                        </div>


                        <div class="modal fade" id="zerodechet" tabindex="-1" role="dialog" aria-labelledby="#zerodechet" aria-hidden="true">
                            <div class="modal-dialog  modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-body text-justify container-fluid pb-5">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>

                                        <div class="row col-md">
                                            <div class="col image form-group">
                                                <div id="carousel0Dech" class="carousel slide" data-ride="carousel">
                                                    <div class="rea carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="images/galerie/zeroDechet/Accueil.png" class="d-block w-100" alt="Magazine sur l'archtecture minimaliste">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="images/galerie/zeroDechet/Astuce.png" class="d-block w-100" alt="Magazine sur l'archtecture minimaliste">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="images/galerie/zeroDechet/Concept.jpg" class="d-block w-100" alt="Magazine sur l'archtecture minimaliste">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="images/galerie/zeroDechet/Historique.png" class="d-block w-100" alt="Magazine sur l'archtecture minimaliste">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="images/galerie/zeroDechet/Menu.jpg" class="d-block w-100" alt="Magazine sur l'archtecture minimaliste">
                                                        </div>
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carousel0Dech" role="button" data-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carousel0Dech" role="button" data-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>

                                            </div>
                                            <div class="col">
                                                <h2>Webdocumentaire Zéro déchet</h2>
                                                <p>Dans le cadre du module « infographie » et « intégration web » de ma seconde année de DUT, nous devons réaliser un webdocumentaire sur le sujet de notre choix. J’ai souhaité m’intéresser au Zéro déchet. Après avoir fait de nombreuses recherches, j’ai pu cibler l’univers graphique que je souhaitais donner à mon webdocumentaire. A partir de ces couleurs, j’ai pu créer les maquettes des différentes pages. Ce site est en cours de développement. Ce projet a été l’occasion d’approfondir mes compétences de maquettage, et de webdesign à l’aide du logiciel Adobe XD. </p>



                                                <div class="row col-sm">
                                                    <div class="col">
                                                        <h5>Date</h5>
                                                        <p>Janvier 2020</p>
                                                    </div>

                                                    <div class="col">
                                                        <h5>Logiciels utilisés</h5>
                                                        <p>InDesign</p>
                                                    </div>
                                                </div>
                                                <a href="images/galerie/zeroDechet/webdocumentaire.pdf" target="_blank">
                                                    <bouton class="boutonCV">CONSULTER</bouton>
                                                </a>


                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="cousezVosReves">
                        <div class="unProjet" data-toggle="modal" data-target="#cousezVosReves">
                            <img src="images/galerie/cousezVosReves/couv.png">
                            <div class="descProjet">
                                <p><strong>WEB DESIGN</strong></p>
                                <p>Cousez vos rêves – Site vitrine </p>

                                <div class="outil">
                                    <img src="images/logiciel/html.png" alt="">
                                    <img src="images/logiciel/css3.png" alt="">
                                </div>
                            </div>
                        </div>



                        <div class="modal fade" id="cousezVosReves" tabindex="-1" role="dialog" aria-labelledby="#cousezVosReves" aria-hidden="true">
                            <div class="modal-dialog  modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-body text-justify container-fluid pb-5">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>

                                        <div class="row col-md">
                                            <div class="col image form-group">
                                                <div id="carouselCVR" class="carousel slide" data-ride="carousel">
                                                    <div class="rea carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="images/galerie/cousezVosReves/Coup%20de%20coeur.png" class="d-block w-100" alt="Magazine sur l'archtecture minimaliste">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="images/galerie/cousezVosReves/Les%20cours%20%E2%80%93%20Enfant%20ado.png" class="d-block w-100" alt="Magazine sur l'archtecture minimaliste">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="images/galerie/cousezVosReves/Les%20cours.png" class="d-block w-100" alt="Magazine sur l'archtecture minimaliste">
                                                        </div>
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carouselCVR" role="button" data-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carouselCVR" role="button" data-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>

                                            </div>
                                            <div class="col">
                                                <h2>Webdocumentaire Zéro déchet</h2>
                                                <p>Dans le cadre du module « infographie » et « intégration web » de ma seconde année de DUT, nous devons réaliser un webdocumentaire sur le sujet de notre choix. J’ai souhaité m’intéresser au Zéro déchet. Après avoir fait de nombreuses recherches, j’ai pu cibler l’univers graphique que je souhaitais donner à mon webdocumentaire. A partir de ces couleurs, j’ai pu créer les maquettes des différentes pages. Ce site est en cours de développement. Ce projet a été l’occasion d’approfondir mes compétences de maquettage, et de webdesign à l’aide du logiciel Adobe XD. </p>



                                                <div class="row col-sm">
                                                    <div class="col">
                                                        <h5>Date</h5>
                                                        <p>Avril 2019</p>
                                                    </div>

                                                    <div class="col">
                                                        <h5>Logiciels utilisés</h5>
                                                        <p>InDesign</p>
                                                    </div>
                                                </div>
                                                <a href="./media/magazine.pdf" target="_blank">
                                                    <bouton class="boutonCV">CONSULTER</bouton>
                                                </a>


                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="datavis">
                        <div class="unProjet" data-toggle="modal" data-target="#datavis">
                            <img src="images/galerie/datavis/couverture.png">
                            <div class="descProjet">
                                <p><strong>INFOGRAPHIE</strong></p>
                                <p>Datavisualisation - Les pâtes</p>

                                <div class="outil">
                                    <img src="images/logiciel/photoshop.png" alt="">
                                    <img src="images/logiciel/html.png" alt="">
                                    <img src="images/logiciel/css3.png" alt="">
                                </div>
                            </div>
                        </div>


                        <div class="modal fade" id="datavis" tabindex="-1" role="dialog" aria-labelledby="#datavis" aria-hidden="true">
                            <div class="modal-dialog  modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-body text-justify container-fluid pb-5">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>

                                        <div class="row col-md">
                                            <div class="col image form-group">
                                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                                    <div class="rea carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="images/galerie/datavis/couverture.png" class="d-block w-100" alt="Datavisualisation sur les pâtes">
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="col">
                                                <h2>Datavisualisation - Les pâtes</h2>
                                                <p>Dans le cadre du cours d'infographie, nous devions réaliser une data visualisation sur le thème de notre choix, les outils et le style de notre choix. J'ai opté pour un style un peu “ardoise” avec le fond noir et les polices et dessins comme dessinés à la craie. J'ai réalisé cette affiche à l'aide de l'iPad pro et de son stylet, ainsi que de l'application Affinity Designer.</p>



                                                <div class="row col-sm">
                                                    <div class="col">
                                                        <h5>Date</h5>
                                                        <p>Mai 2019</p>
                                                    </div>

                                                    <div class="col">
                                                        <h5>Logiciels utilisés</h5>
                                                        <p>InDesign</p>
                                                    </div>
                                                </div>
                                                <a href="images/galerie/datavis/couverture.png" target="_blank">
                                                    <bouton class="boutonCV">CONSULTER</bouton>
                                                </a>


                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="leStudio">
                        <div class="unProjet" data-toggle="modal" data-target="#leStudio">
                            <img src="images/galerie/leStudio/couv.png">
                            <div class="descProjet">
                                <p><strong>INFOGRAPHIE</strong></p>
                                <p>Poster didactique - Le Studio</p>

                                <div class="outil">
                                    <img src="images/logiciel/photoshop.png" alt="">
                                    <img src="images/logiciel/html.png" alt="">
                                    <img src="images/logiciel/css3.png" alt="">
                                </div>
                            </div>
                        </div>


                        <div class="modal fade" id="leStudio" tabindex="-1" role="dialog" aria-labelledby="#leStudio" aria-hidden="true">
                            <div class="modal-dialog  modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-body text-justify container-fluid pb-5">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>

                                        <div class="row col-md">
                                            <div class="col image form-group">
                                                <div id="carouselStudio" class="carousel slide" data-ride="carousel">
                                                    <div class="rea carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="images/galerie/leStudio/couv.png" class="d-block w-100" alt="Magazine sur l'archtecture minimaliste">
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                            <div class="col">
                                                <h2>Poster didactique - Le Studio</h2>
                                                <p>Dans le cadre du cours d'infographie, nous devions réaliser une data visualisation sur le thème de notre choix, les outils et le style de notre choix. J'ai opté pour un style un peu “ardoise” avec le fond noir et les polices et dessins comme dessinés à la craie. J'ai réalisé cette affiche à l'aide de l'iPad pro et de son stylet, ainsi que de l'application Affinity Designer.</p>



                                                <div class="row col-sm">
                                                    <div class="col">
                                                        <h5>Date</h5>
                                                        <p>Avril 2019</p>
                                                    </div>

                                                    <div class="col">
                                                        <h5>Logiciels utilisés</h5>
                                                        <p>InDesign</p>
                                                    </div>
                                                </div>
                                                <a href="images/galerie/leStudio/La%20webradio.pdf" target="_blank">
                                                    <bouton class="boutonCV">CONSULTER</bouton>
                                                </a>


                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="leStudio">
                        <div class="unProjet" data-toggle="modal" data-target="#mariage">
                            <img src="images/galerie/mariage/mockup.png">
                            <div class="descProjet">
                                <p><strong>INFOGRAPHIE</strong></p>
                                <p>Poster didactique - Le Studio</p>

                                <div class="outil">
                                    <img src="images/logiciel/photoshop.png" alt="">
                                    <img src="images/logiciel/html.png" alt="">
                                    <img src="images/logiciel/css3.png" alt="">
                                </div>
                            </div>
                        </div>


                        <div class="modal fade" id="mariage" tabindex="-1" role="dialog" aria-labelledby="#mariage" aria-hidden="true">
                            <div class="modal-dialog  modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-body text-justify container-fluid pb-5">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>

                                        <div class="row col-md">
                                            <div class="col image form-group">
                                                <div id="carouselmariage" class="carousel slide" data-ride="carousel">
                                                    <div class="rea carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="images/galerie/mariage/mockup.png" class="d-block w-100" alt="Magazine sur l'archtecture minimaliste">
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                            <div class="col">
                                                <h2>Poster didactique - Le Studio</h2>
                                                <p>Dans le cadre du cours d'infographie, nous devions réaliser une data visualisation sur le thème de notre choix, les outils et le style de notre choix. J'ai opté pour un style un peu “ardoise” avec le fond noir et les polices et dessins comme dessinés à la craie. J'ai réalisé cette affiche à l'aide de l'iPad pro et de son stylet, ainsi que de l'application Affinity Designer.</p>



                                                <div class="row col-sm">
                                                    <div class="col">
                                                        <h5>Date</h5>
                                                        <p>Avril 2019</p>
                                                    </div>

                                                    <div class="col">
                                                        <h5>Logiciels utilisés</h5>
                                                        <p>InDesign</p>
                                                    </div>
                                                </div>
                                                <a href="images/galerie/leStudio/La%20webradio.pdf" target="_blank">
                                                    <bouton class="boutonCV">CONSULTER</bouton>
                                                </a>


                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="magazineNetflix">
                        <div class="unProjet" data-toggle="modal" data-target="#magazineNetflix">
                            <img src="images/galerie/magazine/couvertureMagazine.png">
                            <div class="descProjet">
                                <p><strong>INFOGRAPHIE / COMMUNICATION </strong></p>
                                <p>Rédaction et mise en page magazine fictif</p>

                                <div class="outil">
                                    <img src="images/logiciel/photoshop.png" alt="">
                                    <img src="images/logiciel/html.png" alt="">
                                    <img src="images/logiciel/css3.png" alt="">
                                </div>
                            </div>
                        </div>


                        <div class="modal fade" id="magazineNetflix" tabindex="-1" role="dialog" aria-labelledby="#leStudio" aria-hidden="true">
                            <div class="modal-dialog  modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-body text-justify container-fluid pb-5">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>

                                        <div class="row col-md">
                                            <div class="col image form-group">
                                                <div id="carouselNetflix" class="carousel slide" data-ride="carousel">
                                                    <div class="rea carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="images/galerie/magazine/couvertureMagazine.png" class="d-block w-100" alt="Magazine sur l'archtecture minimaliste">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="images/galerie/magazine/magazineNetflix.png" class="d-block w-100" alt="Magazine sur l'archtecture minimaliste">
                                                        </div>
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carouselNetflix" role="button" data-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carouselNetflix" role="button" data-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>

                                            </div>
                                            <div class="col">
                                                <h2>Rédaction et mise en page magazine</h2>
                                                <p>Dans le cadre du cours d’expression communication et du cours de PAO, j'ai réalisé un magazine sur Netflix. J'ai ainsi réalisé chaque étape de la conception du magazine : de la recherche d’information, à la recherche de l’identité du magazine. Cela a été l'occasion d'approfondir l'utilisation d'InDesign.</p>



                                                <div class="row col-sm">
                                                    <div class="col">
                                                        <h5>Date</h5>
                                                        <p>Avril 2019</p>
                                                    </div>

                                                    <div class="col">
                                                        <h5>Logiciels utilisés</h5>
                                                        <p>InDesign</p>
                                                    </div>
                                                </div>
                                                <a href="images/galerie/magazine/magazine.pdf" target="_blank">
                                                    <bouton class="boutonCV">CONSULTER</bouton>
                                                </a>


                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="videosMEJ">
                        <div class="unProjet" data-toggle="modal" data-target="#magazineNetflix">
                            <img src="images/galerie/dvltAsphalt.png">
                            <div class="descProjet">
                                <p><strong>Audiovisuel</strong></p>
                                <p>Communication évènementielle</p>

                                <div class="outil">
                                    <img src="images/logiciel/photoshop.png" alt="">
                                    <img src="images/logiciel/html.png" alt="">
                                    <img src="images/logiciel/css3.png" alt="">
                                </div>
                            </div>
                        </div>


                        <div class="modal fade" id="videosMEJ" tabindex="-1" role="dialog" aria-labelledby="#videosMEJ" aria-hidden="true">
                            <div class="modal-dialog  modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-body text-justify container-fluid pb-5">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>

                                        <div class="row col-md">
                                            <div class="col image form-group">
                                                <div id="carouselMEJ" class="carousel slide" data-ride="carousel">
                                                    <div class="rea carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="images/galerie/couvertureMagazine.png" class="d-block w-100" alt="Magazine sur l'archtecture minimaliste">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="images/galerie/magazineNetflix.png" class="d-block w-100" alt="Magazine sur l'archtecture minimaliste">
                                                        </div>
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carouselMEJ" role="button" data-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carouselMEJ" role="button" data-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>

                                            </div>
                                            <div class="col">
                                                <h2>Communication évènementielle</h2>
                                                <p>Implication bénévole dans l’équipe de communication d’un mouvement de jeunes de 7 à 18 ans.

                                                    Création de supports de communication vidéo dans le cadre d’évènement du mouvement : vidéos récapitulatives des journées de rassemblement, création de miniature, adaptations et sous titrage de vidéo pour les réseaux sociaux. </p>



                                                <div class="row col-sm">
                                                    <div class="col">
                                                        <h5>Date</h5>
                                                        <p>Avril 2019</p>
                                                    </div>

                                                    <div class="col">
                                                        <h5>Logiciels utilisés</h5>
                                                        <p>InDesign</p>
                                                    </div>
                                                </div>
                                                <a href="./media/magazine.pdf" target="_blank">
                                                    <bouton class="boutonCV">CONSULTER</bouton>
                                                </a>


                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                </div>








            </div>

        </section>
        <section id="competences">
            <h3>Mes compétences</h3>
            <div class="competences">
                <div class="infographie">
                    <h4>INFOGRAPHIE</h4>
                    <p>Maitrise des logiciels de PAO, création d'affiche, de flyer, supports de communication</p>
                </div>
                <div class="devWeb">
                    <h4>DEVELOPPEMENT WEB</h4>
                    <p>Création de structure de site web avec HTML5, style et animation via CSS
                        Utilisation de PHP, gestion de bases de données
                    </p>
                </div>
                <div class="audiovisuel">
                    <h4>AUDIOVISUEL</h4>
                    <p>Création de supports vidéo pour des évènements à l'aide des logiciels de montage, photographie avec reflex</p>
                </div>
            </div>


        </section>


        <?php
        if ($_SERVER['REQUEST_METHOD']=='POST') {
            $nom     = htmlentities($_POST['nom']); 
            $email     = htmlentities($_POST['email']); 
            $message    = htmlentities($_POST['message']); 
            
            $destinataire ='mathilde.nardeux@gmail.com';
            $sujet = 'Formulaire de contact - Portfolio';
            $contenu = '<html>
                
                <head>
  <meta charset="UTF-8">
  <title>Titre du message</title></head><body>';
  $contenu .= '<p>Messagerie portfolio Mathilde Nardeux</p>';
  $contenu .= '<p><strong>Nom</strong>: '.$nom.'</p>';
  $contenu .= '<p><strong>Email</strong>: '.$email.'</p>';
  $contenu .= '<p><strong>Message</strong>: '.$message.'</p>';

  
  $contenu .= '</body></html>'; // Contenu du message de 
$headers = 'From: Portfolio Mathilde Nardeux'."\r\n";
$headers .= 'Mime-Version: 1.0'."\r\n";
  $headers .= 'Content-type: text/html; charset=utf-8'."\r\n";
    if(($_POST['nom'] != "" ) && ( $_POST['email'] !="") && ( $_POST['message'] != "")){
  mail($destinataire, $sujet, $contenu, $headers); // Fonction principale qui envoi l'email
    echo '<script>alert("Votre message a bien été envoyé");</script>'; // Afficher un message pour indiquer que le message a été envoyé
  // (2) Fin du code pour traiter l'envoi de l'email
    }
        }
        ?>

        <section id="contact" class="marginNav">
            <h3>Me contacter</h3>
            <p>Si vous avez une question, un projet, ou autres, n'hésitez pas à me contacter</p>

            <div class="fondContact">
                <form action="index.php" method="post">
                    <fieldset class="formulaireContact">

                        <fieldset class="champ">
                            <label for="nom">Votre nom : </label>
                            <input type="text" name="nom" id="nom" placeholder="Nom et prénom" id="nom" required="Veuillez renseigner ce champs"></fieldset>

                        <fieldset class="champ"><label for="mail">Votre adresse e-mail : </label>
                            <input type="email" name="email" id="email" placeholder="Votre email" required="Veuillez renseigner ce champs"></fieldset>
                        <fieldset class="champ">
                            <label for="message" id="message">Votre message : </label>
                            <textarea id="message" name="message" rows="5" cols="50" placeholder="Tapez ici votre message" required="Veuillez renseigner ce champs"></textarea>

                        </fieldset>
                        <button type="submit">Envoyer</button>
                    </fieldset>

                </form>


                <a href="https://fr.freepik.com/photos-vecteurs-libre/logo">Logo PSD créé par freepik - fr.freepik.com</a>


            </div>
        </section>

    </main>
    <footer>

    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/script.js"></script>
</body>

</html>