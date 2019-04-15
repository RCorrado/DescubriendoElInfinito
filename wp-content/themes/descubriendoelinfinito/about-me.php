<?php /**
		Template name: Sobre mí
	*/

get_header();

if (have_posts()) : the_post()?>

	<article class="post-list solid-white box-shadow">
		<p class="body-post list">
			<?php if(has_post_thumbnail()): ?>
				<div class="imagen-about box-shadow"><?php the_post_thumbnail('post-thumbnail', array('class'=>'attachment-post-thumbnail size-post-thumbnail imagen'));?></div>
			<?php endif;?>
			<div class="centrar about"><?php the_content(); ?></div>
		</p>
	</article>

<?php else : ?>

	<article class="no-found">
		<h1>No encontrado</h1>
		<p>Por ahora no hay contenido como el solicitado :c</p>
	</article>

<?php endif;

get_footer();?>