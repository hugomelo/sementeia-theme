<?php get_header(); ?>

<div class="content">
 
	<div class="conteudo">

		<div class="conteudo-titulo">

		<div class="titulo">
			

		</div>
			 
					<!-- 
			<?php if (have_posts()): while (have_posts()) : the_post();?>

			<spam class="titulo"><?php the_title();?></span>
			
			<?php endwhile; else:?>
			<?php endif;?>-->

		</div>

		<div class="conteudo-categorias">
			 
		</div>
		<div class="imagem-circulo">
			
		<div class="circle-image">

						<?php
						$p = get_page_by_path('circle-images','ARRAY_A');
						$attachments = get_children( array('post_parent' => $p
							->ID,
						'post_type' => 'attachment', 'post_mime_type' =>'image') );
						
						
						$n = rand(0,count($attachments)-1);
						$k = array_keys($attachments);
						
						$url = wp_get_attachment_url( $attachments[$k[$n]]->ID);
						
						?>
						<img src="<?php echo $url; ?>" />					
					</div>

					
		</div>


		<div class="conteudo-texto">
					<div class="texto">
							
							<?php if (have_posts()): while (have_posts()) : the_post();?>

							<?php the_content();?>

						
							<?php endwhile; else:?>
							<?php endif;?>-->
					</div>
		</div>
		
	</div>
	
</div>

<?php if(is_page('sementeia')){ ?>
<?php get_footer();?>
<?php }; ?>
<?php if(is_page('sementes')){ ?>
<?php get_footer();?>
<?php }; ?>


