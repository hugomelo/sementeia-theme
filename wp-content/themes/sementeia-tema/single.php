
<?php get_header();?>

<div class="content">

	<div class="post-conteudo">

		<?php
			if (in_category('agenda')){
				load_template(WP_CONTENT_DIR . '\themes\sementeia-tema\category-a.php'); 
			}
			else {
				echo "<div class=\"conteudo-titulo-post\">";
				while ( have_posts() ) : the_post();			
						echo '<div class="post-title"><h2>';
						the_title();
						echo '</h2></div>';
						$author = get_the_author();
						if(!in_category('agenda')){
							echo '<div class="dados-postagem">';
							echo '<span class="author">';echo 'Autor: '.$author;echo'</span>';	
							echo '<span class="date">';the_time('d/m/Y');echo'</span>';
							echo '</div>';	
						}

				endwhile;
			}
		?>
		
		
		</div>
		
		<div class="conteudo-postagem">
			<div class="post">
			<?php
				if (have_posts()): while (have_posts()) : the_post();
					
					the_content();

					endwhile; else:
				endif;
			?>
			</div>
		</div>
		
	</div>
	
</div>







