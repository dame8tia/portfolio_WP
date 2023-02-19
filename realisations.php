<?php 
/**
* Template Name: Réalisations 
*/
?>


<?php wp_reset_postdata();?>
<?php 
$query = new WP_Query(
    [
    'post_type'=> 'realisations'      
    ]
);?>

<div class="container my-5">
  <h1>Réalisations</h1> 
    <?php if ( $query->have_posts() ) : ?>
        <div class="row">
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class="col-md-4 mb-3">
                    <div class="card mx-auto shadow-lg p-3 mb-5 card_dim bg-white">
                        <?php set_post_thumbnail_size(250, 110, array( 'center', 'center')  ); ?>
                        
                        <div class="bcg__card__rea"> 
                            <?php the_post_thumbnail()?>
                        </div>
                        
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                            <p class="card-text"><?php the_content(); ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <?php the_posts_navigation(); ?>
    <?php endif; ?>
</div>


<?php wp_reset_postdata();?>

