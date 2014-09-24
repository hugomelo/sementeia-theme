<?php get_header(); ?>

<div class="content">
 
	<div class="conteudo">

		<div class="conteudo-titulo">

				<div class="titulo">

				</div>
		</div>
	
	<div class="conteudo-postagem">
	
	<ul>
		<li>
			
				
				<?php if (have_posts()): while (have_posts()) : the_post();?>
				<a href="<?php echo get_permalink();?>"><?php the_title(); ?></a>
				<?php the_excerpt();?>
				<?php endwhile; else:?>
				<?php endif; ?>
		</li>
	</ul>



	</div>

		







	</div>
</div>