<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?>
</head>

<body <?php body_class();?>>
    <header class= "header-bcg">
        <div class="container header_container d-flex flex-column justify-content-between">
            <!-- header--top -->
            <div class="row p-1"> <!-- Partie haute -->
                <!-- coordonnées -->
                <div class="col-6 align-self-start">
                    <p class="font_custom_dev color_custom_01 fs-3">Laëtitia <br>TURQUOIS</p>               
                </div> 
                <!-- nav-bar -->
                <div class="col-6 text-left"> 
                    <nav class="navbar navbar-expand-lg justify-content-end">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="bi bi-list"></i>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                            <ul class="navbar-nav d-flex flex-column align-items-end mb-2 mb-lg-0">              
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

                            <?php wp_reset_postdata();?>
                                <?php 
                                $query = new WP_Query(
                                    [
                                    'post_type'=> 'competences'    
                                    ]
                                );?>
                                <?php if ( $query->have_posts() ) : ?>
                                    <?php while($query->have_posts()): $query->the_post();?>
                                        <li>
                                            <a id="<?php echo "header_".the_title(); ?>" class="lien" href="<?= "#skills_",the_ID(); ?>" onclick="open_menu_dev()">
                                                <span class="menu_deco"></span>
                                                <span class="menu_deploy text-white"><?php echo the_title(); ?></span>
                                            </a>
                                        </li>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            <?php wp_reset_postdata();?>

<!--                             <li>
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
                            </li> -->
                        </ul>
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

    <div class="container">