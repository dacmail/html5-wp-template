<?php while (have_posts()) : the_post(); ?>
	<article <?php post_class(); ?> id="post-<? the_ID(); ?>">
		<h1 class="post-title">
			<a href="<?php the_permalink() ?>" title="Enlace a <?php the_title_attribute(); ?>">
				<?php the_title(); ?>
			</a>
		</h1>
		<div class="post-content">
			<?php the_content('Leer más &raquo;'); ?>
		</div>
	</article>		
<?php endwhile; ?>