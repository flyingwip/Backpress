<?php

//Global settings
//test url local on http://www.techlab.nl/backbone/wordpress/

$theme_version = "1.1.0";

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}



function theme_name_scripts() {
  
   // echo 'yo';  
  //add app.js for the masonry frontpage
  global $theme_version;
  
  //wp_enqueue_script( 'ionicons', 'http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css', array(), '2.0.0', true );	
  	
  wp_enqueue_script( 'jquery.min', get_template_directory_uri() . '/js/vendor/jquery.min.js', array(), '2.1.3', true );
  wp_enqueue_script( 'underscore-min', get_template_directory_uri() . '/js/vendor/underscore-min.js', array(), '1.7.0', true );
  wp_enqueue_script( 'backbone-min', get_template_directory_uri() . '/js/vendor/backbone-min.js', array(), '1.1.2', true );
  wp_enqueue_script( 'infinitescroll', get_template_directory_uri() . '/js/vendor/jquery.infinitescroll.min.js', array(), '3.3.2', true );	
  wp_enqueue_script( 'imagesloaded.pkgd.min', 'http://imagesloaded.desandro.com/imagesloaded.pkgd.min.js', array(), '1.0.0', true );
  wp_enqueue_script( 'masonry', 'http://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js', array(), '3.3.2', true );	
	


  if ( is_home() ){
	  wp_enqueue_script( 'models_post', get_template_directory_uri() . '/js/models/post.js', array(), $theme_version, true );
	  wp_enqueue_script( 'collections_archive', get_template_directory_uri() . '/js/collections/archive.js', array(), $theme_version, true );	
	  wp_enqueue_script( 'views_list', get_template_directory_uri() . '/js/views/list.js', array(), $theme_version, true );
	  wp_enqueue_script( 'views_post', get_template_directory_uri() . '/js/views/post.js', array(), $theme_version, true );
	  wp_enqueue_script( 'views_core', get_template_directory_uri() . '/js/views/core.js', array(), $theme_version, true );
	  wp_enqueue_script( 'router', get_template_directory_uri() . '/js/routers/router.js', array(), $theme_version, true );
//	  wp_enqueue_script( 'blaat', get_template_directory_uri() . '/js/routers/router.php', array(), $theme_version, true );	  

	  wp_enqueue_script( 'scrollview', get_template_directory_uri() . '/js/views/scrollview.js', array(), $theme_version, true );
	  wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.js', array(), $theme_version, true );
  } 
  

  
}

//wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.js', array(), '1.0.0', true );

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
add_action( 'init', 'register_my_menu' );


add_theme_support( 'post-thumbnails' ); 




/**
 * Register our sidebars and widgetized areas.
 *
 */
function gridster_widgets_init() {

	register_sidebar( array(
		'name'          => 'Right sidebar',
		'id'            => 'right_sidebar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '<hr/></h2>',
	) );

}
add_action( 'widgets_init', 'gridster_widgets_init' );


//////// DEMO for WP JSON V2


add_action( 'rest_api_init', 'get_category_post' );
function get_category_post() {
    register_api_field( 'post',
        'categories',
        array(
            'get_callback'    => 'get_category_name',
            'update_callback' => null,
            'schema'          => null,
        )
    );
}

/**
 * Get the value of the "starship" field
 *
 * @param array $object Details of current post.
 * @param string $field_name Name of field.
 * @param WP_REST_Request $request Current request
 *
 * @return mixed
 */
 function get_category_name( $object, $field_name, $request ) {
    //return get_post_meta( $object[ 'id' ], $field_name, true );
    
    $categories = [];
    $ids = wp_get_post_categories( $object[ 'id'] );
    
    foreach ($ids as &$id) {
		array_push($categories, get_category( $id));
	}
	

    return $categories;
}


function my_posts_results_filter( $posts ) {
		
		if(isset($_GET['filter']['s'])){
			$filtered_posts = array();
			//print_r( $posts );
			foreach ( $posts as $post ) {
				//if ( false === strpos($post->post_title, 'selfie')) {
					// safe to add non-selfie title post to array
					$post->post_content = str_ireplace($_GET['filter']['s'], '<span class="highlight">'.$_GET['filter']['s'].'</span>', $post->post_content);
					$filtered_posts[] = $post;
				//}
			}
			return $filtered_posts ;
		} else {
			return $posts;
		}

}
add_filter( 'posts_results', 'my_posts_results_filter' );




// MAKE CUSTOM POST TYPES SEARCHABLE
function searchAll( $query ) {
/*
 echo '<pre>';
 print_r($query);
 echo '</pre>'; 	
*/
 //if ( $query->is_search ) { $query->set( 'post_type', array( 'site', 'plugin', 'theme', 'person' )); } 
 	//return $query;
}
add_filter( 'the_search_query', 'searchAll' );


?>