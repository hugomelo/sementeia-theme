
<?php get_header(); ?>

<div class="content">

	<?php
		echo '<div class="conteudo-categorias">';
		get_sidebar();
		echo '</div>';
	?>


	<div class="conteudo">
		<div class="conteudo-titulo">
			<div class="titulo">
				<p>TODOS OS POSTS</p>
			</div>
		</div>
		<div class=clear></div>
		<div class="conteudo-postagem">
			<ul>
				<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args = array( 'post_type' => 'post', 'posts_per_page' => 20, 'paged' => $paged );
				$wp_query = new WP_Query($args);
				while ( have_posts() ) : the_post();
			 		 echo '<li><a href="'.get_permalink();
					echo'">';
					echo "<span>".the_title()."</span>";
					echo "</a></li>";
					if(function_exists('the_tags'))
						echo '<div class="tags">';
					the_tags('');
					echo '</div>'; ?>
					<div class=clear></div>
				<?php endwhile; ?>
		
			</ul>
		</div>
		<div class=clear></div>
			<!-- then the pagination links -->
		<nav class=post-navigation>
			<div class=nav-previous>
				<?php previous_posts_link( 'anteriores' ); ?>
			</div>
			<div class=nav-next>
			<?php next_posts_link( 'posteriores', $wp_query ->max_num_pages); ?>
			</div>
		</nav>
		<div class=breath></div>
	</div>
	

</div>	 
					<div class=breath></div>
