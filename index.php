<?php get_header() ?>
<div id="container" <?php body_class('clearfix'); ?>>
	<section id="content" class="clearfix">
		<?php get_template_part( 'loop', 'single' ); ?>
	</section>
	<nav class="pagination">
		<?php previous_posts_link( _('Anterior', 'ungrynerd')); ?>
		<?php next_posts_link( _('Siguiente', 'ungrynerd')); ?>
	</nav>
	<?php get_sidebar() ?>
</div>
<?php get_footer() ?>