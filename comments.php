<?php // Do not delete these lines
	if (isset($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Por favor, no cargue esta página directamente.');
	
	if ( post_password_required() ) { ?>
		<p class="nocomments">Esta noticia está protegida por contraseña. Introdúzcala para ver los comentarios</p> 
	<?php
		return;
	}
	?>

<?php if ( have_comments() ) : ?>
	<div id="comments-title">
		<h3 id="comments"><?php comments_number('Sin comentarios','1 comentario','% comentarios');?> </h3>
	</div>
	
	<div class="navigation_comment clearfix">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
	</div>

	<ol class="commentlist">
	<?php wp_list_comments("callback=comentarios");?>
	</ol>

	<div class="navigation_comment clearfix">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
	</div>

 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Los comentarios están cerrados</p>

	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>
	<?php comment_form(); ?>
<?php endif; // if you delete this the sky will fall on your head ?>