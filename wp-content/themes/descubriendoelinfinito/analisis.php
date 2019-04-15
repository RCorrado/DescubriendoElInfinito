<?php /**
		Template name: Análisis
	*/

get_header();

$posts_per_page = 10;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array('posts_per_page'  =>  $posts_per_page,
              'offset'          =>  ($paged-1)*$posts_per_page,
              'order'           =>  'DESC',
              'category_name'   =>  'Análisis'
        );
$posts = query_posts($args);

if(count($posts) > 0): 
	foreach($posts as $post) :
		setup_postdata($post);?>

		<article class="post-list solid-white box-shadow">
			<a href="<?php the_permalink()?>">
				<header class="header-post centrar">
					<h1 class="titles"><?php the_title();?></h1>
					<address class="datos"><?php the_author();?></address>
					<address class="datos"><?php the_time('F j, Y');?></address>
				</header>
			</a>
			<p class="body-post list">
				<?php if(has_post_thumbnail()): ?>
					<span><?php the_post_thumbnail('post-thumbnail', array('class'=>'attachment-post-thumbnail size-post-thumbnail imagen'));?></span>
				<?php endif;
				$mas = "<a href='". get_permalink(get_the_ID()) . "'><strong>&nbsp;&nbsp;Leer nota completa</strong></a>";?>
				<span><?php echo wp_trim_words(get_the_content(), 250, $mas); ?></span>
			</p>
		</article>
		<?php if ($wp_query->max_num_pages > 1) : ?>

	      <div class="box-shadow grey post arrow-div">
	        <span><?php next_posts_link('<span class="fas fa-arrow-circle-left icon-posts"></span> Anterior',true); ?></span>  
	        <span><?php previous_posts_link('<span class="fas fa-arrow-circle-right icon-posts"></span> Siguiente',true); ?></span>
	      </div>

    	<?php endif; ?>     
	<?php endforeach;
else : ?>
	<article class="no-found">
		<h1>No encontrado</h1>
		<p>Por ahora no hay contenido como el solicitado :c</p>
	</article>
<?php endif;

get_footer();?>