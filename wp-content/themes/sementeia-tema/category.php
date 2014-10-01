
<?php get_header(); ?>

<div class="content">
	
	<div class="conteudo">

		<div class="conteudo-titulo">


			<div class="titulo">
				<?php 
  					if(!is_category('agenda')) {
						single_cat_title('', true );
						$class = "conteudo-agenda";
					} 
				?>
			</div>

		</div>
		<div class="conteudo-texto">
			<?php echo category_description(); ?>

		</div>

		<div class="conteudo-postagem">
		
				<ul>
					<?php
						if(is_category('agenda')){
								$id_agenda=get_cat_ID('agenda');
								query_posts('showposts=10&cat='.$id_agenda);		
								if (have_posts()): while (have_posts()) : the_post();
										echo '<a href="'.get_permalink();
										echo'">';
										the_title();
										echo "</a>";
										echo "<div class=body>" . get_the_content() . "</div>";
										//the_excerpt_rereloaded(18,'');
								endwhile; else:
								endif;
						}?>
					<?php
						if(!is_category('agenda')){
								//query_posts('showposts=4');		
								if (have_posts()): while (have_posts()) : the_post();
										echo '<li><a href="'.get_permalink();
										echo'">';
										the_title();
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