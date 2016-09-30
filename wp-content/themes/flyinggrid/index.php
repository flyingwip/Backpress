<?php get_header(); ?>

<section id="container">
	<aside>
		<a href="#posts" class="zt-control">Posts</a>
		<a href="#pages" class="zt-control">Pages</a>

	</aside>

	<section id="posts">
		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>
			<?php get_template_part( '_archive', 'body' ); ?>
		<?php endwhile; ?>
	</section>
</section>

<?php get_footer(); ?>