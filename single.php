<?php get_header() ?>
<div id="container" <? body_class('clearfix'); ?>>
	<section id="content" class="clearfix">
		<? get_template_part( 'loop', 'single' ); ?>
		<?php comments_template(); ?>
	</section>
	<?php get_sidebar() ?>
</div>
<?php get_footer() ?>