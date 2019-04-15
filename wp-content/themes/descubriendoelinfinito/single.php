<?php get_header();


if(have_posts()) : the_post()?>

		<article class="post-list solid-white box-shadow">
			<header class="header-post centrar">
				<h1 class="titles"><?php the_title();?></h1>
				<address class="datos"><?php the_author();?></address>
				<address class="datos"><?php the_time('F j, Y');?></address>
			</header>
			<p class="body-post"><?php the_content(); ?></p>
		</article>
		
<?php else : ?>

	<article class="no-found">
		<h1>No encontrado</h1>
		<p>Esa entrada no está disponible :c</p>
	</article>

<?php endif;

get_footer();?>