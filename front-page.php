<?php get_header() ?>
<main class="site_main">
  
    <h1>----------Front-page.php-----------</h1>
    <?php wp_nav_menu(array(
        "menu" => "menu_accueil",
        "container" => "nav"  )); ?>
    <?php if (have_posts()): while(have_posts()):the_post() ?>
            
             <?php the_title();  ?>
             <?php  the_content();?>
             <?php endwhile ?>    
              
    <?php endif ?>
     
</main>
<?php get_footer()?>
