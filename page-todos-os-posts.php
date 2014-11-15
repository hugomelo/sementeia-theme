
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
					echo '<div class="tags">';
						the_tags('');
					echo '</div>';
					$author = get_the_author();
					echo '<div class="dados-postagem">';
						echo '<span class="author">';echo 'Parceiro: '.$author;echo'</span>';	
						echo '<span class="date">';the_time('d/m/Y');echo'</span>';
					echo '</div>'; ?>	
					<div class=clear></div>
				<?php endwhile; ?>
		
			</ul>
		</div>
		<div class=clear></div>
			<!-- then the pagination links -->
		<nav class=post-navigation>
			<div class=nav-previous>
			<?php next_posts_link( 'anteriores', $wp_query ->max_num_pages); ?>
			</div>
			<div class=nav-next>
				<?php previous_posts_link( 'posteriores' ); ?>
			</div>
		</nav>
		<div class=breath></div>
	</div>
	

</div>	 
					<div class=breath></div>
