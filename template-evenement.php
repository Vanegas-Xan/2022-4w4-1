<?php
get_header();
/**
* Template Name: evenement
*
* @package WordPress
* @subpackage cidw-4w4
*/
?>

<main class="site__main">
     <section class="evenement">
     <h1>---- template-evenement.php juju ------</h1>
     <?php if (have_posts()):  the_post(); ?>
     <?php the_post_thumbnail(); ?>
     <?php the_title() ?>
     <p class='evenement__resume'><?php the_field('resume'); ?></p>
     <p class='evenement__endroit'><?php the_field('endroit'); ?></p> 
     <p><?php the_field('organisateur'); ?></p>
     <p><?php the_field('date'); ?></p>
     <p><?php the_field('heure'); ?></p>
     <?php endif ?>
     </section>
</main>
<?php get_footer() ?>



