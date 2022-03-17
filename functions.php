<?php
function cidw_4w4_enqueue() {
// wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css')
    wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css', 
    array(), 
    filemtime(get_template_directory() . '/style.css'),
     false);

     wp_enqueue_style('cidw_4w4_police_google','https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap', false);
} 

add_action("wp_enqueue_scripts", "cidw_4w4_enqueue");

//-------------------------------------------------------------Enregistrer le menu

function cidw_4w4_enregistre_mon_menu() {
  register_nav_menu( 'principal', __( 'Menu_principal', 'cidw_4w4' ,
                       'Footer', __ ('Menu_Footer', 'cidw_4w4'),         
                       'menu_lien_externe', __('Menu lien externe', 'cidw_4w4')
                       ) );
}


//-------------------------------------------------------------Filtre chacun des choixs du menu

function cidw_4w4_filtre_le_menu($mon_objet){

foreach($mon_objet as $cle => $valeur){

//$valeur->title = substr($valeur->titre, 0, 7);

$valeur->title = wp_trim_words($valeur->title, 4, "...");
}

return $mon_objet;
}

add_filter("wp_nav_menu_objects", "cidw_4w4_filtre_le_menu");


function cidw_4w4_add_theme_support(){

  add_theme_support('post-thumbnails');
  
  add_theme_support('custom-logo', array(
    'width' => 100,
    'height' => 100
  ));
}
add_action( 'after_setup_theme', 'cidw_4w4_enregistre_mon_menu' );



function my_register_sidebars() {
   /* Register the 'primary' sidebar. */
  register_sidebar(
    array(
        'id'            => 'entete_1',
        'name'          => __( 'Entete 1' ),
        'description'   => __( 'Entete 1' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    )
);

    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'pied_page_colonne_1',
            'name'          => __( 'Pied de la page colonne 1' ),
            'description'   => __( 'Colonne de pied de page' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
      register_sidebar(
        array(
            'id'            => 'pied_page_colonne_2',
            'name'          => __( 'Pied de la page colonne 2' ),
            'description'   => __( 'Colonne de pied de page' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
      register_sidebar(
        array(
            'id'            => 'pied_page_colonne_3',
            'name'          => __( 'Pied de la page colonne 3' ),
            'description'   => __( 'Colonne de pied de page' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    register_sidebar(
        array(
            'id'            => 'pied_page_ligne_1',
            'name'          => __( 'Pied de la page ligne 1' ),
            'description'   => __( 'Colonne de pied de page' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}
add_action( 'widgets_init', 'my_register_sidebars' );
?>