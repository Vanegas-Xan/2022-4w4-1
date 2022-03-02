<?php get_header() ?>
<main class="principal">
    <section class="animation">
        <div class="animation_bloc">1</div>
        <div class="animation_bloc">2</div>
        <div class="animation_bloc">3</div>
        <div class="animation_bloc">4</div>
    </section>
    <h1>----------front-page.php-----------</h1>
    <?php if (have_posts()):the_post() ?>
            <?php
              the_title();
              the_content();
              
            ?>
                  
              
    <?php endif ?>
     
</main>
<?php get_footer()?>