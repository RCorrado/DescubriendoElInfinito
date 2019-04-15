<?php
	/**
  	* Template Name: Menu-Template
  	*/

get_header()?>

<?php if (have_posts()) : ?>
	<section class="contenido-listado">
		<?php while (have_posts()) : the_post();?>
			<article class="solid-white box-shadow list-post">
				<a href="<?php the_permalink();?>">
					<header class="header-list-post">
						<h1 class="titles"><?php the_title();?></h1>
						<address class="datos"><?php the_author();?></address>
						<address class="datos"><?php the_time('F j, Y');?></address>
					</header>
					<?php if(has_post_thumbnail()): ?>
						<p><?php the_post_thumbnail('post-thumbnail', array('class'=>'attachment-post-thumbnail size-post-thumbnail imagen'));?></p>
					<?php endif;?>
					<p class="body-post"><?php echo wp_trim_words(get_the_content(), 30, '...'); ?></p>
				</a>
			</article>
		<?php endwhile; ?>
	</section>
<?php endif;?>

<?php get_footer();?>