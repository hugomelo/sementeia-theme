<?php get_header(); ?>


<div id="container">
		<div class="conteudo-home">
			<div class="content">

				<div id="image-post">
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
				</div><!--fim do image-post-->

					
				<div id="circulo-esquerda">
					<div class="novidades-esquerda">
					AQUI NOVIDADES ESQ
					<!--PARA POST DIFERENTES-->
							<!--<ul>
								 <?php query_posts('showposts=1&category_name=noticias&offset=1');?>
						         <?php if (have_posts()): while (have_posts()) : the_post();?>

						          <h1><a href="<?php the_Permalink()?>"><?php the_title();?></a></h1>

								 <?php endwhile; else:?>
						         <?php endif;?>
							
							</ul>-->
						
					</div><!--fim do novidades-esquerda-->
				</div><!--fim do circulo-esquerda-->
			</div><!--fim do content-->

			<div id="teste">
				<div id="circulo-direita">
					<div id="novidades-direita">
							AQUI NOVIDADES DIR
					</div><!--fim do novidades-direita-->
				</div><!--fim do circulo-direita-->
			</div>

			
			<div id="teste2">
				
				<div id="content-agenda-home">
							AQUI VAI A AGENDA
				</div><!--fim do content-agenda-->
			</div>
		</div>
</div><!--fim do container-->