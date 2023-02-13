<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

   <!--  <script src="script/open_accordeon.js"></script> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style/style.css">


    <!-- site sur lequel s'inspirer un jour https://kuon.space/ -->
    <!-- delphine-scepanek -->

</head>


<body>

    <header>
        <div class="container header_container d-flex flex-column justify-content-between">
            <!-- header--top -->
            <div class="row p-1"> <!-- Partie haute -->
                <div class="col-6 align-self-start">
                    <p class="font_custom_dev color_custom_01 fs-3">Laëtitia <br>TURQUOIS</p>               
                </div> 

                <div class="col-6 text-left"> 
                    <nav class="navbar navbar-expand-lg justify-content-end">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="bi bi-list"></i>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                            <ul class="navbar-nav d-flex flex-column align-items-end mb-2 mb-lg-0">
                            <!-- <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">Home</a>                                                     
                                </li> -->                
                                <li class="nav-item">
                                    <a class="nav-link" href="#aboutMe">A propos de moi</a>
                                </li>                
                                <li class="nav-item">
                                    <a class="nav-link" href="#skills">Compétences</a>
                                </li>                
                                <li class="nav-item">
                                    <a class="nav-link" href="#rea">Réalisations</a>
                                </li>
                            </ul>
                        </div>
                    </nav>    
                </div>
            </div>
            <!-- header--middle -->  
            <div class="row align-items-center h-50"> <!-- Partie médiane -->
                <div class="col-12 col-sm-6"> 
                    <p class="text-center font_custom_dev color_custom_01 mt-5 mt-sm-0 fs-1">Système d'informations géographiques</p>
                </div>
                <div class="col-12 col-sm-6">
                    <p class="text-center font_custom_dev fs-1 text-white mt-5 mt-sm-0 fs-1">Eau & Milieux aquatiques</p>                
                </div>
                
            </div>
            <!-- header--bottom // h-sm-auto existe ?-->        
            <div class="row  pt-sm-5 mb-2 mb-sm-0"> <!-- Partie basse -->
                <div class="col-9">
                    <div class="menu">
                        <ul class="d-flex flex-column list-unstyled my-0">
                            <li>
                                <a id="header_devWeb" class="lien" href="#skill_devWeb" onclick="open_menu_dev()">
                                    <span class="menu_deco"></span>
                                    <span class="menu_deploy text-white">Développement Web</span>
                                </a>
                            </li>
                            <li>
                                <a id="header_geomatik" class="lien" href="#skill_geomatik" onclick="open_menu_geo()">
                                    <span class="menu_deco"></span>
                                    <span class="menu_deploy text-white">Géomatique</span>
                                </a>
                            </li>
                            <li>
                                <a id="header_sgbd" class="lien"  href="#skill_sgbd" onclick="open_menu_sgbd()">
                                    <span class="menu_deco"></span>
                                    <span class="menu_deploy text-white">Base de données</span>
                                </a>
                            </li>
                        </ul>
<!--                         <ul class="list-group list-group-flush flex-column flex-sm-row">
                            <li class="list-group-item p-1 bg-transparent header--bottom--list--skills" >Développement WEB<span class="border-end ps-1"></span></li>
                            <li class="list-group-item p-1 bg-transparent header--bottom--list--skills">Base de données<span class="border-end ps-1"></span></li>
                            <li class="list-group-item p-1 bg-transparent header--bottom--list--skills">Géomatique</li>
                        </ul> -->
                    </div>                    
                </div>

                <div class="col-3 mt-auto text-end">
                    <a href="#contact" class="text-white text-decoration-none p-1">
                        <span>Contact</span>
                    </a>                                
                </div>
            </div>
        </div>
    </header>

    <main>
        <!-- A propos de moi -->
        <section id="aboutMe" class="mb-3">
            <div class="container">
                <div class="row aboutMe__photo justify-content-center"> <!-- Maphoto -->
                    <div class="col-6 text-center">
                        <div>                            
                            <img class="avatar rounded-circle" src="" alt="ma tête">
                        </div>                        
                    </div>        
                </div>

                <div class="row align-items-center justify-content-center"> <!-- Le texte -->
                    <div class="col-12 col-lg-6 d-flex flex-column align-items-center">
                            <h3 class="font_custom_dev color_custom_01">Chef de projet SIG et DevWeb</h3>
                            <p class="fw-lighter lh-lg myClass_text-align-justify">
                                Seconde vie professionnelle (12 ans en métrologie)
                                <br>
                                Chef de projet SIG (Système d'Informations Géographiques) depuis 2015
                                <br>
                                Spécialisation en développement WEB & Base de données
                                <br>
                                De formation scientifique 
                                <br>
                                Projets dans la protection de l’environnement
                            </p>
                    </div>
    
                    <div class="col-12 col-lg-6 aboutMe__layus fw-lighter">
                        <p>Je suis à la <span class="color_custom_01 fw-semibold">recherche d'un stage</span> de fin d'études au sein d'une agence de développement WEB du mois <span class="color_custom_01 fw-semibold">avril 2023 jusqu'en juillet 2023</span>
                            <br>
                            Compte tenu de ma formation scientifique, je suis à même de comprendre les problématiques métiers clients
                        </p>
                    </div>
                </div>              
            </div>
        </section>

        <!-- Compétences : Menu accordeon En commentaire le carroussel-->
        <section id="skills" class="mb-3">
            <div class="container">   
                <h1>Competences</h1>                 
                <div class="row mt-3">
                    <div class="col-12 px-0">
                        <div class="accordion" id="accordionExample">
                            <div id="skill_devWeb" class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                <button id="collapseOne_btn" class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Développement Web
                                </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>DEVELOPPEMENT FRONT-END D’UNE APPLICATION WEB OU WEB MOBILE EN INTÉGRANT LES RECOMMANDATIONS DE SÉCURITÉ</strong>
                                         <ul>
                                            <li>Maquetter une application</li>
                                            <li>Réaliser une interface utilisateur web statique et adaptable</li>
                                            <li>Développer une interface web dynamique</li>
                                            <li>Réaliser une interface utilisateur avec une solution de gestion de contenu ou e-commerce</li>
                                         </ul>
                                         <strong>DEVELOPPEMENT BACK-END D’UNE APPLICATION WEB OU WEB MOBILE EN INTÉGRANT LES RECOMMANDATIONS DE SÉCURITÉ</strong>
                                         <ul>
                                            <li>Créer une base de données</li>
                                            <li>Développer les composants d’accès aux données</li>
                                            <li>Développer la partie back-end d’une application web ou web mobile</li>
                                            <li>Élaborer et mettre en oeuvre des composants d’une application de gestion de contenu ou e-commerce.</li>
                                         </ul>
                                    </div>
                                </div>
                            </div>
                            <div id="skill_geomatik" class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                <button id="collapseTwo_btn" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Géomatique - Chef de projet SIG
                                </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>La géomatique</strong> Combinaison du mot Géographie et Informatique <br>
                                        <p>La géomatique est un concept, méthodes, outils que l'on integre dans des thématiques métiers telles que l'environnement, l'agriculture, l'aménagement du territoire et propose aux gestionnaires, décideurs des solutions pour les aider dans leur prise de décision.
                                        </p>
                                        <br>
                                        <strong>Chef de projet SIG</strong> pour Système d'Informations Géographiques<br>
                                        <p>Le chef de projet organise l'acquisition, la représentation, l'analyse et l'integration de données géographiques puis leur diffusion. Ce sont des données géolocalisées. <br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div id="skill_sgbd" class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                <button id="collapseThree_btn" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Base de données
                                </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <li><strong>Modélisation MCD</strong> MERISE et UML </li>
                                            <li>PostGreSQL</li>
                                            <li>MySQL</li>
                                        </ul>
                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--<div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div> -->                            
                        <!--<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active position-relative">
                                        <img src="images/skill_dev_web.jpg" class="d-block w-100 vh-50" alt="devWeb">
                                        <p class="position-absolute bottom-50 end-50 text-white fs-2">Développement WEB</p>
                                    </div>
                                    <div class="carousel-item">                                            
                                        <img src="images/skill_db.jpg" class="d-block w-562 vh-50" alt="database">
                                        <p class="position-absolute bottom-50 end-50 text-white fs-2">Système de gestion de base de données</p>
                                    </div>
                                    <div class="carousel-item sig">
                                        <img src="images/skill_sig.jpg" class="d-block w-562 vh-50 opacity-75" alt="SIG"  >
                                        <p class="position-absolute bottom-50 end-50 text-white fs-2">Géomatique</p>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>

                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div> -->
                    </div>        
                </div>                  
            </div>
        </section>

        <!-- Réalisations-->
        <section id="rea" class="mb-3">
            <div class="container">
                <h1>Realisations</h1> 
                <div class="row justify-content-between">
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="card mx-auto shadow-lg p-3 mb-5 card_dim bg-white">
                            <div class="bcg__card__rea">
                                <img src="" class="card-img-top" alt="..."> <!-- images/aeag.jpg -->
                            </div>                            
                            <div class="card-body display-card">
                                <h5 class="card-title">Replique site Web AEAG</h5>
                                <p class="card-text">Réplique du site de l'Agence de l'eau Adour Garonne : statique avec un petit peu de js.</p>
                                <a href="https://laetitia-turquois-brief2.netlify.app/" target="_blank" class="btn btn-primary">Voir</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="card mx-auto shadow-lg p-3 mb-5 card_dim bg-white">
                            <div class="bcg__card__rea img__02 ">
                            </div>
                            <!-- <img src="images/nasa_saturn.jpg" class="card-img-top" alt="..."> -->
                            <div class="card-body display-card">
                                <h5 class="card-title">Portfolio</h5>
                                <p class="card-text">Présentation de mon parcours, mes compétences et mes réalisations</p>
                                <a href="#" class="btn btn-primary">Go anywhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="card mx-auto shadow-lg p-3 mb-5 card_dim bg-white">
                            <div class="bcg__card__rea img__03">
                            </div>                            
                            <div class="card-body display-card">
                                <h5 class="card-title">Fiche diagnosyic</h5>
                                <p class="card-text">Développment d'un outil de diagnostic sur les masses d'eau DCE du bassin Viaur Agout. Site Web sous traité</p>
                                <a href="#" class="btn btn-primary">Go anywhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Timeline -->
        <div class="container timeline">
            <h1>Experiences</h1> 
            <div class="timeline-object">
                <div class="timeline-date">09/2020 - 07/2021</div>
                <div class="timeline-status"></div> <!-- le point -->
                <div class="timeline-content">
                    <h3>Syndicat de rivière</h3>
                    <span> <strong>Chef de projet SIG</strong> 
                        <br>
                        Conception et réalisation d’un outil de diagnostic des pressions sur les masses d’eau DCE
                    </span>
                </div>
            </div>
            <div class="timeline-object">
                <div class="timeline-date">04/2019 - 09/2020</div>
                <div class="timeline-status"></div> <!-- le point -->
                <div class="timeline-content">
                    <h3>UFBAG</h3>
                    <span> <strong>Coordinatrice de bassin</strong> 
                        <br>
                        Animation du réseau des associations de protection des milieux aquatiques <br>
                        Mise en place d'un groupe de travail sur une structuration informatique des données des 18 associations du bassin Adour Garonne
                </div> 
                    </span>
            </div>
            <div class="timeline-object">
                <div class="timeline-date">04/2015 - 04/2019</div>
                <div class="timeline-status last"></div> <!-- le point -->
                <div class="timeline-content last">
                    <h3>Association de protection des milieux aquatiques de l'Aveyron</h3>
                    <span> <strong>Chef de projet SIG</strong> 
                        <br>
                        Mise en place d'une architecture informatique pour la structuration, l'exploitation et la valorisation des données de l'association (température de l'eau, inventaires piscicoles et hydro-morphologie)
                    </span>
                </div>
            </div>
        </div>

        <!-- Expériences-->
 <!--        <section id="exp" class="mb-3">
            <div class="container">
                <h1>Experiences</h1> 
                <row class="row exp__backgr">
                    <div class="col-12">
                        <div class="exp__part__01 w-100 d-flex justify-content-between align-items-center">
                            <div class="exp__square__red p-1 text-white fs-6">
                                <p class="m-0">Syndicat de rivière <br>
                                09/2020 - 07/2021</p>
                            </div>
                            <div class="exp__detail fs-5 my-2" >
                                <p class="my-0 fs-5">Chef de projet SIG</p>
                                <p class="my-0 fs-6">Conception et réalisation d’un outil de diagnostic des pressions sur les masses d’eau DCE</p>
                            </div>
                        </div>   
                    </div>
                    <div class="col-12">
                        <div class="exp__part__01 w-100 d-flex justify-content-between align-items-center">    
                            <div class="exp__detail__02 fs-5 my-2" >
                                <p class="my-0 fs-5">Coordinatrice bassin versant</p>
                                <p class="my-0 fs-6">A renseigner</p>
                            </div>
                            <div class="exp__square__red__02 p-1 text-white fs-6">
                                <p class="m-0">UFBAG<br>
                                    04/2019 - 09/2020
                                </p>
                            </div>
                           
                        </div>   
                    </div>
                    <div class="col-12">
                        <div class="exp__part__01 w-100 d-flex justify-content-between align-items-center">
                            <div class="exp__square__red p-1 text-white fs-6">
                                <p class="m-0">Association protection des milieux aquatiques<br>
                                    04/2015 - 09/2019</p>
                            </div>
                            <div class="exp__detail fs-5 my-2" >
                                <p class="my-0 fs-5">Chef de projet SIG</p>
                                <p class="my-0 fs-6">Mise en place d'une architecture informatique pour la structuration, l'exploitation et la valorisation des données de l'association (température de l'eau, inventaires piscicoles et hydro-morphologie)</p>
                            </div>
                        </div>   
                    </div>
                </row>
            </div>
        </section>
 -->
        <!-- Contact -->
        <!-- https://lesdocs.fr/envoi-du-contenu-dun-formulaire-vers-un-email/ -->
        <section class="mt-5 mb-3">
            <div id="contact" class="container">
                <div class="row justify-content-center">
                    <div class="col-8 encadre px-5 py-3 text-white">
                        <h2 class="text-uppercase text-center">Contactez-moi</h2>
                        <form action="email.php" method="post">

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Votre email</label>
                                <input name="expediteur_name" type="email" class="form-control" id="id_mail" placeholder="name@example.com">
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput2" class="form-label">Sujet</label>
                                <input name="sujet_name" type="text" class="form-control" id="id_sujet">
                            </div>                            

                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                <textarea name="message_name" class="form-control" id="id_description" rows="3"></textarea>
                            </div>

                            <input class="text-center mb-3" type="submit" value="Envoyez">

                        </form>
                    </div>
                </div>
                <div class="d-flex justify-content-end mt-3">
                    <span>L. TURQUOIS - </span><span id="date_folio"></span>
                    <script>
                        let date = new Date();
                        let auj = date.getFullYear();
                        console.log(auj) 
                        let date_folio = document.getElementById("date_folio");
                        date_folio.innerHTML = auj;                    
                    </script>
                </div>

            </div>
        </section>

    </main>

    <footer>
        <div class="container">
            <div class="background_footer">
                <div class="row">
                    <div class="col">
                        <ul class = "icon--contact">
                            <!-- icones récupérées sur https://icons.getbootstrap.com/#icons -->
                            <li><a href="https://www.linkedin.com/in/laetitia-turquois-07130676" target="_blank"><i class="bi bi-linkedin"></i></a></li>
                            <li><a href="https://github.com/dame8tia" target="_blank"><i class="bi bi-github "></i></a>  </li>
                        </ul>            
                    </div>
                </div>
            </div>
        </div>
    </footer>   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>