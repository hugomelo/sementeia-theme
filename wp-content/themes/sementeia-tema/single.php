<?php get_header(); ?>


<div class="content">

	<div class="conteudo">

		<div class="conteudo-titulo">

		<?php
			while ( have_posts() ) : the_post();
					echo '<h2>';
					the_title();
					echo '</h2>';
					
				endwhile;
			?>
			 
		
		</div>

		<div class="conteudo-categorias">
			 
			 
			 <?php 
			 if (!in_category("agenda"))
			 	echo get_sidebar();
			 ?>
			

		</div>
		<div class="conteudo-texto">
			
			<?php
				while ( have_posts() ) : the_post();
					
					the_content();
					
				endwhile;
			?>
			
		</div>
		
	</div>
	
</div>






