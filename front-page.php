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
        <?php get_template_part('competences'); ?>
        <!-- Réalisations -->
        <?php get_template_part('realisations'); ?>
        <!-- Expériences -->
        <?php get_template_part('experiences'); ?>

    </main>

<?php get_footer(); ?>