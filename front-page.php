<?php get_header(); ?>

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

        
        <!-- Compétences -->
        <section id="skills" class="mb-3">
            <div class="container">   
                <?php get_template_part('competences'); ?>
            </div>
        </section>
        <!-- Réalisations -->
        <?php get_template_part('realisations'); ?>
        <!-- Expériences -->
        <?php get_template_part('experiences'); ?>

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