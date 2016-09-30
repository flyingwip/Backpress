<?php get_header(); ?>

<?php 
//echo 'single post';	
?>

<div class="single_post">
	<h1><?php the_title(); ?></h1>
	<div>
		<?php echo $post->post_content; ?>
	</div>
</div>


<div class="side_bar">
	<?php dynamic_sidebar( 'right_sidebar' ); ?>
</div>






<?php get_footer(); ?>

