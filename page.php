<?php get_header() ?>
<div id="container" <?php body_class('clearfix'); ?>>
	<section id="content" class="clearfix">
		<?php get_template_part( 'loop', 'single' ); ?>
	</section>
	<?php get_sidebar() ?>
</div>
<?php get_footer() ?>
