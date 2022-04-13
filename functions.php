<?php
function cidw_4w4_enqueue() {
// wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css')
    wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css', 
    array(), 
    filemtime(get_template_directory() . '/style.css'),
     false);

} 

add_action("wp_enqueue_scripts", "cidw_4w4_enqueue");

function cidw_4w4_font() {

  wp_enqueue_style('cidw_4w4_police_google','https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap','https://fonts.googleapis.com/css2?family=Bayon&display=swap', false);

}
add_action("wp_enqueue_scripts", "cidw_4w4_font");

//-------------------------------------------------------------Enregistrer le menu

function cidw_4w4_enregistre_mon_menu() {
  register_nav_menus(array( 
                       'principal' => __( 'Menu_principal', 'cidw_4w4' ),
                       'Footer' => __ ('Menu_Footer', 'cidw_4w4'),         
                       'menu_lien_externe' => __('Menu lien externe', 'cidw_4w4'),
                       'menu_categorie_cours' => __('Menu category', 'cidw_4w4'),
                       'menu_accueil' => __('Menu accueil', 'cidw_4w4'),
                       'menu_accueil_evenement' => __('Menu accueil evenement', 'cidw_4w4')
  ));
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

/*---------------------Ajout de la description -----------------

/* ----------------------------------------------------------- Ajout de la description dans menu */
function prefix_nav_description( $item_output, $item) {
  if ( !empty( $item->description ) ) {
      $item_output = str_replace( '</a>',
      '<hr><span class="menu-item-description">' . $item->description . '</span><div class="menu-item-icone"></div></a>',
            $item_output );
  }
  return $item_output;
}




add_filter( 'walker_nav_menu_start_el', 'prefix_nav_description', 10, 2 );
// l'argument 10 : niveau de privilège
// l'argument 2 : le nombre d'argument dans la fonction de rappel: «prefix_nav_description»

/* -----------------------------------------------------------   add_theme_support() */
function cidw_4w4_add_theme_support(){

  add_theme_support('post-thumbnails');
  
  add_theme_support('custom-logo', array(
    'width' => 100,
    'height' => 100
  ));
}
add_action( 'after_setup_theme', 'cidw_4w4_enregistre_mon_menu' );


/*---------------------------------------------------------- Enregistrement des sidebar */
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


//------------------------------------------------------------
function trouve_la_categorie($tableau){
    foreach($tableau as $cle){
        if(is_category($cle)) return($cle);
    }
}
/* ---------------------------------------------------------------------- */
/**
 * @param : WP_Query $query
 */
function cidw_4w4_pre_get_posts(WP_Query $query)
{
   if (!is_admin() 
  || !$query -> is_main_query()
  || !$query -> is_category(array("cours","web","jeu","creation-3d","utilitaires", "design","animation","video" )))  
      
      {
        return $query;
      }
      else
     {  
    // var_dump($query);
    //    die();
    $ordre = get_query_var('ordre');
    $cle = get_query_var('cletri');
    $query->set('orderby', $cle);
    $query->set('order', $ordre);
    $query->set('posts_per_page', '-1');
    return $query;
//echo "----ordre =". $ordre ."----------------<br>";
//echo "----cle =". $cle ."----------------<br>";
   }
 
   }
/*

  if (!is_admin() && is_main_query() && is_category(array('web','cours','design','video','utilitaire','creation-3d','jeu'))) 
    {
    //$ordre = get_query_var('ordre');
    $query->set('posts_per_page', -1);
    // $query->set('orderby', $cle);
    $query->set('orderby', 'title');
    // $query->set('order',  $ordre);
    $query->set('order',  'ASC');
    // var_dump($query);
    // die();
   }

  */ 

function cidw_4w4_query_vars($params){


    $params[] = "cletri";
    $params[] = "ordre";
    /*
    $params["cletri"] = "title";
    var_dump($params); die();
    */




    return $params;
}
add_action('pre_get_posts', 'cidw_4w4_pre_get_posts');
/* Le hook «pre_get_posts» nous permet d'alterer les composante de la requête WP_query */
add_filter('query_vars', 'cidw_4w4_query_vars' );
/* Le hook «query_vars» nous permet d'alterer les arguments de l'URL */
?>