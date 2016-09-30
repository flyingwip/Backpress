<?php
/*
Template Name: Development
*/


//header("content-type: application/json");

//echo 'yo' ;




//array with titles
/*
$titles = array("bloemkool", "worsjes","ijs", "bananen", "linzen", "yoghurt" , "Kroketten", "aardappelen" , "broccoli" , "vis" , "Griesmeel" );echo 


$arr = array("Um,", "is", "this", "the", "boring,", "peaceful", "kind", "of", "taking", "to", "the", "streets?", "Guards!", "Bring", "me", "the", "forms", "I", "need", "to", "fill", "out", "to", "have", "her", "taken", "away!", "Ah,", "the", "'Breakfast", "Club'", "soundtrack!", "I", "can't", "wait", "til", "I'm", "old", "enough", "to", "feel", "ways", "about", "stuff!", "Good", "news,", "everyone!", "There's", "a", "report", "on", "TV", "with", "some", "very", "bad", "news!", "Okay,", "it's", "500", "dollars,", "you", "have", "no", "choice", "of", "carrier,", "the", "battery", "can't", "hold", "the", "charge", "and", "the", "reception", "isn't", "very…", "My", "fellow", "Earthicans,", "as", "I", "have", "explained", "in", "my", "book", "Earth", "in", "the", "Balance,", "and", "the", "much", "more", "popular", "''Harry", "Potter", "and", "the", "Balance", "of", "Earth',", "we", "need", "to", "defend", "our", "planet", "against", "pollution.", "Also", "dark", "wizards");

$desc = implode(" ", array_slice($arr, 0, rand(0, 44)));


$images = array( );
array_push($images, "http://41.media.tumblr.com/5e25d5723c93e14a31ed4f8eaf899000/tumblr_mx1j0peawg1sl2o1mo1_500.png");
array_push($images, "http://41.media.tumblr.com/f5f8a82f137efb1ba42ddf89f44bd2fe/tumblr_n27alzgFPV1sl2o1mo1_500.png");
array_push($images, "http://40.media.tumblr.com/a1e53713e1a98882ffa6c94edcd4de60/tumblr_n27ahnyrOT1sl2o1mo1_500.png");
array_push($images, "http://40.media.tumblr.com/e0337082939eb1522b727a792b006cf4/tumblr_nl5kriyUOZ1smw1wso1_500.jpg");
array_push($images, "http://41.media.tumblr.com/b03a59eae77b16b8ce1ba612aefdbfa9/tumblr_nugj9sGEyA1sl2o1mo1_500.jpg");
array_push($images, "http://36.media.tumblr.com/07bf3cd1c2e6c449ac06953a21c9a8ab/tumblr_nuh8ysN9Jb1smw1wso1_500.jpg");
array_push($images, "http://41.media.tumblr.com/dab4959e43761a9927d264ce119886a5/tumblr_nuif9prWT51sl2o1mo1_500.png");
array_push($images, "http://41.media.tumblr.com/4590d68745293abadfbbee547e82c915/tumblr_nuin2ve4FE1sl2o1mo1_500.jpg");
array_push($images, "http://40.media.tumblr.com/8ceadb6d6adbc9c064b61c56f8da95a2/tumblr_noit2lYslN1r8efu6o1_500.jpg");
array_push($images, "https://c2.staticflickr.com/8/7258/7094385295_9d23ba7c04.jpg");
array_push($images, "http://www.usmilitaryveteran.com/1israeli-girls-in-army-idf-20.jpg");
array_push($images, "http://www.usmilitaryveteran.com/1385197494_32e4d8a9c6.jpg");
array_push($images, "http://www.usmilitaryveteran.com/newgirsl22.jpg");
array_push($images, "http://www.usmilitaryveteran.com/19.jpg");




//echo $desc;

$image = $images[rand ( 0 , count($images)-1 )];

$href = "http://www.techlab.nl/backbone/wordpress/octpopus/";

// Create post object

for ($i=0; $i<25 ; $i++){

	  $title = $titles[rand ( 0 , count($titles)-1 )];
	  $desc = implode(" ", array_slice($arr, 0, rand(0, 44)));
	  
	  echo $title .'<hr/>' ;

	  $my_post = array();
	  $my_post['post_title'] = $title;
	  $my_post['post_content'] = $desc;
	  $my_post['post_status'] = 'publish';
	//  $my_post['post_author'] = 1;
	//  $my_post['post_category'] = array(8,39);
	
	// Insert the post into the database
	  //wp_insert_post( $my_post );
	
}
*/

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args= array(
	'posts_per_page' => -1,
	'paged' => $paged
);
$posts = query_posts($args);

$categories = [7, 5, 4, 3,6,8];

echo '<pre>';
foreach ($posts as &$post) {
    //print_r($post->ID);
    //$cat = implode(" ", array_slice($categories, 0, rand(0, 4)));
    $cat_index = array_rand($categories, rand(1, 4));
    //	print_r($cat_index);
    
    $post_categories = [];	
    if(is_array($cat_index)){
	    foreach ($cat_index as &$cat) {
	    	array_push($post_categories,$categories[$cat]);
	    	//print_r($category);
		}
	} else {
    //	
	    array_push($post_categories, $categories[$cat_index]);	    
    }	
    /*	    
    */
	//print_r($post_categories);
    
    $cat_ids = wp_set_post_categories( $post->ID, $post_categories);
	print_r($cat_ids);        
	//echo '<hr/>';



}
echo 'Klaar';
echo '</pre>';




?>