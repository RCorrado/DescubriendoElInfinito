<?php get_header();?>

<?php if (have_posts()) : ?>
	<section class="content">
		<?php while (have_posts()) : the_post();?>
			<article class="solid-white box-shadow post">
				<a href="<?php the_permalink();?>">
					<header class="header-post centrar">
						<h1 class="titles"><?php the_title();?></h1>
						<address class="datos"><?php the_author();?></address>
						<address class="datos"><?php the_time('F j, Y');?></address>
					</header>
					<p class="body-post centrar">
						<?php if(has_post_thumbnail()): ?>
							<span><?php the_post_thumbnail('post-thumbnail', array('class'=>'attachment-post-thumbnail size-post-thumbnail imagen'));?></span>
						<?php endif;?>
						<span><?php echo wp_trim_words(get_the_content(), 50, '...'); ?></span>
					</p>
				</a>
			</article>
		<?php endwhile; ?>
	</section>
<?php endif;?>

<?php get_footer();?>