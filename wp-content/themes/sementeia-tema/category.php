

<?php get_header(); ?>

<div class="content">
	<div class="conteudo-agenda">
		<div class="conteudo-titulo-agenda">
			<div class="titulo">
				<p>
				<?php 
  					if(!is_category('agenda')) {
						single_cat_title('', true );
						$class = "conteudo-agenda";
					} 
				?>
				</p>
			</div>
		</div>
		
		<div class="conteudo-texto">
			<?php echo category_description(); ?>

		</div>
		
		

		<div class="conteudo-postagem">
			<ul>
					<?php 
						if(is_category('agenda'))
							load_template(WP_CONTENT_DIR . '\themes\sementeia-tema\category-a.php'); 
						else{
								//query_posts('showposts=4');		
								if (have_posts()): while (have_posts()) : the_post();
										echo '<li><a href="'.get_permalink();
										echo'">';
										echo "<span>".the_title()."</span>";
										echo "</a></li>";
								if(function_exists('the_tags'))
									echo '<div class="tags">';
										the_tags('');
										echo '</div>';
										
									endwhile; else:
								endif;
					}?>
				</ul>
		</div>

	</div>

		<?php

			if(!is_category('agenda')){

									echo '<div class="conteudo-categorias">';
									get_sidebar();
									echo '</div>';
									}?>
	</div>
</div>