<?php get_header(); ?>

<section id="container">
	<aside>
		<a href="<?php echo esc_url( get_post_format_link( 'wordpress//milkshake' ) ); ?>" class="zt-control">milkshake</a>
		<a href="<?php echo esc_url( get_post_format_link( 'audio' ) ); ?>" class="zt-control">Audio</a>
		<a href="<?php echo esc_url( get_post_format_link( 'video' ) ); ?>" class="zt-control">Video</a>
	</aside>

	<section id="posts">
		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>
			<?php get_template_part( '_archive', 'body' ); ?>
		<?php endwhile; ?>
	</section>
</section>

<?php get_footer(); ?>