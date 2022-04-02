<?php get_header() ?>
<main class="principal">
    <h1>category.php</h1>
    <section class="formation">
    <?php wp_nav_menu(array(
              "menu"=>"categorie_cours",
                       "container"=>"nav")); ?>


        <h2 class="formation__titre">Liste des cours du programme TIM</h2>

        <?php
        /*if(is_category('Web')){echo "<h3> Cours web </h3>";
       
        if(is_category('Jeu')){echo "<h3> Cours jeu </h3>";}
        if(is_category('Design')){echo "<h3> Cours design </h3>";}
        if(is_category('Création 3D')){echo "<h3> Cours 3d </h3>";}

        //retourne un string qui représente le slug de la catégorie
*/
        $url_categorie_slug = trouve_la_categorie(array('cours','web', 'design', 'jeu', 'utilitaires', 'creation-3d','video', 'animation'));
        $ma_categorie = get_category_by_slug($url_categorie);
        echo "<h3>" . $ma_categorie->description . "</h3>"; 
        ?>

        <div class="formation__liste">
            <?php if (have_posts()):
                while (have_posts()): the_post(); ?>
                 <?php get_template_part("gabarits/content", "cours");?>
           
            <?php endwhile ?>
            <?php endif ?>
        </div>
    </section>
</main>
<?php get_footer() ?>