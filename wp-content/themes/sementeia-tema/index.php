
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
							
					</div><!--fim do novidades-direita-->
				</div><!--fim do circulo-direita-->
			</div>

			
			<div id="content-agenda">
				
				<div id="content-agenda-home">
				<ul>
					<li>
						
						<!--PRECISO ARRUMAR ISSO AINDA-->
						<?php query_posts('showposts=4&category_name=agenda');?>
						<?php if (have_posts()): while (have_posts()) : the_post();?>
						<?php the_excerpt() ?>
						<p><a href="<?php the_permalink();?>" title="<?php the_title();?>"></a></p>
						
						<?php endwhile; else:?>
						<?php endif;?>
						

					</li>
				</ul>

							
				</div><!--fim do content-agenda-->
			</div>
		</div>
</div><!--fim do container-->