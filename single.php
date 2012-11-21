<?php get_header() ?>
<div id="container">
	<div id="content" class="clearfix">
		<? get_template_part( 'loop', 'single' ); ?>
		<?php comments_template(); ?>
	</div>
<?php get_sidebar() ?>
</div>


<?php get_footer() ?>
