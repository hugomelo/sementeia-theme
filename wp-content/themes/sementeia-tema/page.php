
<?php get_header(); ?>

<?php
/*-if(is_page('movimentos-de-resistencia'))
 	$class="resistencia";*/
?>

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

		
			 
		
				<!--<img src="<?php echo $url;?>"/>;-->	
						    		
							<?php 
								if(is_page('sementeia')||is_page('sementes')){

											echo "<div class=".'"imagem-circulo"'.">";
												echo "<div class=".'"circle-image"'.">";
													
															$p = get_page_by_path('circle-images','ARRAY_A');
															$attachments = get_children( array('post_parent' => $p
																->ID,
															'post_type' => 'attachment', 'post_mime_type' =>'image') );
															$n = rand(0,count($attachments)-1);
															$k = array_keys($attachments);
															$url = wp_get_attachment_url( $attachments[$k[$n]]->ID);
														
															printf ('<img src="%s"/>',$url);
								
												echo "</div>";
											echo "</div>";
							}?>
				
		<div class="conteudo-texto">
					<div class="texto">
						<?php if(is_page('sementeia')){	
														if (have_posts()): while (have_posts()) : the_post();
														the_content();
														endwhile; else:
														endif;
													}
							if(is_page('contato')){	
														if (have_posts()): while (have_posts()) : the_post();
														the_content();
														endwhile; else:
														endif;
													}
							if(is_page('movimentos-de-resistencia')){
														if (have_posts()): while (have_posts()) : the_post();
														the_content();
														endwhile; else:
														endif;
													}
							if(is_page('sementes')){
														if (have_posts()): while (have_posts()) : the_post();
														the_content();
														endwhile; else:
														endif;
													}
									
						?>	




					</div>
		</div>
		
	</div>
	<?php
	if(is_page('sementes')){
			echo '<div class="conteudo-categorias">';
			get_sidebar();
			echo '</div>';
			}
	?>

	


<?php if(is_page('sementeia')){ ?>
<?php get_footer();?>
<?php }; ?>
<?php if(is_page('sementes')){ ?>
<?php get_footer();?>
<?php }; ?>


