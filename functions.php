<?php
	if ( function_exists('register_sidebar') ){
		 register_sidebar(array(
		    'before_widget' => '<div id="%1$s" class="widget %2$s">',
		    'after_widget' => '</div>',
		    'before_title' => '<h2 class="title">',
		 	'after_title' => '</h2>',
		 ));
	}

	if ( function_exists( 'register_nav_menus' ) ) {
		register_nav_menus(
			array(
			  'main' => 'Menu principal'
			)
		);
	}
	add_theme_support( 'post-thumbnails' );
	
	if ( function_exists( 'add_image_size' ) ) { 
		add_image_size( 'featured', 800, 400, true );
	}
	
	add_action('wp','proximamente');
	function proximamente() {
		if ( !is_user_logged_in()) { header("Location: http://google.com/"); }
	}
	add_filter( "show_admin_bar", "__return_false" );
	
	function comentarios($comment, $args, $depth) {
	   $GLOBALS['comment'] = $comment; ?>
	   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
	     <div id="comment-<?php comment_ID(); ?>" class="clearfix">
		  <?php echo get_avatar($comment,$size='75' ); ?>
	    	<div class="comment-content">
	    		<?php comment_text() ?>
		      	<h5 class="author">
					<? comment_author_link(); ?>
					<?php if ($comment->comment_approved == '0') : ?>
			         	<em><?php _e('Your comment is awaiting moderation.') ?></em>
			      	<?php endif; ?>
			      	<?php edit_comment_link(__('(Edit)'),'  ','') ?>
				</h5>
	    	</div>
	     </div>
	<?php
	}
?>