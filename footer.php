 <?php
     /**
      *  Template pour afficher le footer
      */
 ?>

 <footer class="site__footer"  style="background-color:<?= get_theme_mod('background_footer'); ?> ;"></style> >
 <div class="footer__colonne">
        <section class="footer__adresse"><?php dynamic_sidebar( "pied_page_colonne_1" ); ?>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed, sint nemo! Delectus totam omnis aliquid voluptatem facilis itaque eum iure, accusamus iste vero nemo hic asperiores nobis. Vero, hic mollitia.</section>
        <section class="footer__article"> <?php dynamic_sidebar( "pied_page_colonne_2" ); ?>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor molestias ullam dignissimos. Molestias labore consequuntur rem nulla perspiciatis est, recusandae repellendus voluptatibus error dolorum? Eius laudantium nam debitis eaque cumque!</section>
        <section class="footer__lien"><?php dynamic_sidebar( "pied_page_colonne_3" ); ?> 
        <?php  wp_nav_menu(array("menu"=> "lien_externe"));?></section>
 </div>

 <div class="site__footer__ligne">
        <section class="footer__description"> <?php dynamic_sidebar( "pied_page_ligne_1" ); ?>4w4-Conception et développmeent web</section>
        <section class="footer__menu">  
        
        <?php 

            $icone = '<svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#f00"><path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>';
                wp_nav_menu(array(
                 "menu"=>"footer",
                 "container"=>"nav",
                 "container_class"=>"footer__menu_nav",
                 "menu_class"=>"footer__menu__nav__ul",

                 "link_before"=>$icone)); ?></section>
        
        <section class="footer__recherhe"><?php get_search_form(); ?></section>
        <section class="footer__copyright">&copy;Collège de Maisonnneuve TOUS DROITS RÉSERVÉS</section>
 <section class="footer__auteur">auteur: Xander Vanegas</section>

      
 </div>


     </footer>
     <div class="boite__modale">
     <button class="boite__modale__ferme">X</button>
     <p class="boite__modale__texte">
     Ceci est un texte pour déterminer le fonctionnnement de boite modale</p>
     </div>

     <div class="modale__fond"></div>
     <?php wp_footer(); ?>
    

</body>
</html>

