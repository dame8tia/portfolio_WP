<!-- <!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title> -->

   <!--  <script src="script/open_accordeon.js"></script> -->

<!--     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style/style.css"> -->


    <!-- site sur lequel s'inspirer un jour https://kuon.space/ -->
    <!-- delphine-scepanek -->

<!-- </head> -->


<!-- <body> -->

<?php get_header(); ?>

<h1>INDEX</h1>

    <main>
        <!-- A propos de moi -->
        <section id="aboutMe" class="mb-3">
            <div class="container">
                <div class="row aboutMe__photo justify-content-center"> <!-- Maphoto -->
                    <div class="col-6 text-center">
                        <div>                            
                            <img class="avatar rounded-circle" src=<?= home_url("wp-content/uploads/2023/02/ma_tete.png")?> alt="ma tête">
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
                                <img src=<?= home_url("wp-content/uploads/2023/02/aeag-scaled.jpg")?> class="card-img-top" alt="..."> <!-- images/aeag.jpg -->
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
                            <img src=<?= home_url("wp-content/uploads/2023/02/nasa_saturn.jpg")?> class="card-img-top" alt="..." width= "150px" height = "150px">
                            
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
                                <img src=<?= home_url("wp-content/uploads/2023/02/rivers.jpg")?> class="card-img-top" alt="..." width= "150px" height = "150px">
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

  
    <?php get_footer(); ?>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
</body>

</html>