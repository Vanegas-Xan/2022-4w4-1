 <?php
     /**
      *  Template pour afficher le footer
      */
 ?>

 <footer class="site__footer">

     <div class="site__info">
         
         <section class="site__info__adresse">
             <p>3 800, rue Sherbrook Est Montréal</p>
             <p>(Québec) H1x 2A2</p>
             <p>514-254-7131</p>
             
             
         </section>

         <section class="site__info__liens">
             <a href="" class="site__info__liens__a">Nouveau lien</a>
             <a href="" class="site__info__liens__a">Nouveau lien</a>
             <a href="" class="site__info__liens__a">Nouveau lien</a>
             <a href="" class="site__info__liens__a">Nouveau lien</a>
             <a href="" class="site__info__liens__a">Nouveau lien</a>
             <a href="" class="site__info__liens__a">Nouveau lien</a>
             <a href="" class="site__info__liens__a">Nouveau lien</a>
         </section>

         <section class="site__info__nouvelle">
             <p>Lorem ipsum dolor sit amet consectetur</p>
         </section>
     </div>

     <div class="site__info2">
         <nav class="site__info2__menu">
             <a href="#" class="site__info2__menu__a">Choix 1</a>
             <a href="#" class="site__info2__menu__a">Choix 2</a>
             <a href="#" class="site__info2__menu__a">Choix 3</a>
             <a href="#" class="site__info2__menu__a">Choix 4</a>
             <a href="#" class="site__info2__menu__a">Choix 5</a>
         </nav>

         <section class="site__info2__droit">
             <p>Copyright 2022 - College de Maisonneuve.</p>
         </section>
     </div>
     <?php wp_footer(); ?>
     <section class="site__footer__menu">

     <?php 

                $icone = '<svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#f00"><path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>';
                wp_nav_menu(array(
                    "menu"=>"footer",
                    "container"=>"nav",
                    "container_class"=>"site__footer__menu",
                    "menu_class"=>"site__footer__menu__ul",

                    "link_before"=>$icone)); ?>

     </section>

</body>
</html>




















 </footer>