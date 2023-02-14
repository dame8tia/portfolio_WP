<?php 
/**
* Template Name: Expériences 
*/
?>
<?php wp_reset_postdata();?>
<?php 
$query = new WP_Query(
    [
    'post_type'=> 'experiences'    
    ]
);?>

<h1>Expériences Professionnelles</h1>
<?php if ( $query->have_posts() ) : ?>
<?php while($query->have_posts()): $query->the_post();?>
    <div class="timeline-object">
        <div class="timeline-date"><?php echo get_field( 'date_debut' ); ?> - <?php echo get_field( 'date_fin' ); ?></div>
        <div class="timeline-status last"></div>
        <div class="timeline-content last">
            <h3><?php echo get_field( 'structure' );?></h3>
            <span> <strong><?php echo get_field( 'fonction' );?></strong> 
                <br>
                <?php echo the_content();?>
            </span>
        </div>
    </div>
<?php endwhile; ?>
<?php endif; ?>
