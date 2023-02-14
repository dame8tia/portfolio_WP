<?php 
/**
* Template Name: Competences 
*/
?>
<?php wp_reset_postdata();?>
<?php 
$query = new WP_Query(
    [
    'post_type'=> 'competences'    
    ]
);?>

<h1>Compétences</h1> 

<div class="accordion" id="accordionExample">
    <?php $i = 1; ?>
    <?php if ( $query->have_posts() ) : ?>
    <?php while($query->have_posts()): $query->the_post();?>
        <div class="accordion-item ">
           <h2 class="accordion-header" id="<?php echo $i; ?>">
             <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne<?php echo $i; ?>" aria-expanded="false" aria-controls="plush-collapseOne<?php echo $i; ?>">
              <?= the_title(); ?>
             </button>
           </h2>
           <div id="flush-collapseOne<?php echo $i; ?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne<?php echo $i; ?>">
             <div class="accordion-body">
                  <p><?= the_content(); ?></p>
             </div>
           </div>
        </div>
    <?php $i++; ?>
    <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php wp_reset_postdata();?>

