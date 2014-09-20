<?php get_header(); ?>

<div class="content">

	<div class="conteudo">

		<div class="conteudo-titulo">
			 
						<!-- LOOP inicio -->
			<?php if (have_posts()): while (have_posts()) : the_post();?>

			<spam class="titulo"><?php the_title();?></span>

			<!-- LOOP fim-->
			<?php endwhile; else:?>
			<?php endif;?>

		</div>

		<div class="conteudo-categorias">
			 
			 <?php if($class="sementes")
			 echo get_sidebar();
			 ?>

		</div>

		<div class="imagem-circulo">

					
		</div>


		<div class="conteudo-texto">
			
			<!-- LOOP inicio 
			<?php if (have_posts()): while (have_posts()) : the_post();?>

			<?php the_content();?>

		
			<?php endwhile; else:?>
			<?php endif;?>-->

		</div>
		
	</div>
	
</div>

<?php if(is_page('sementeia')){ ?>
<?php get_footer();?>
<?php }; ?>
<?php if(is_page('sementes')){ ?>
<?php get_footer();?>
<?php }; ?>


