

<?php get_header(); ?>
<?php
	// Image url
	$p = get_page_by_path('circle-images','ARRAY_A');
	$attachments = get_children( array('post_parent' => $p['ID'], 'post_type' => 'attachment', 'post_mime_type' =>'image') );
	$n = rand(0,count($attachments)-1);
	$k = array_keys($attachments);
	$imageUrl = wp_get_attachment_image_src($attachments[$k[$n]]->ID, 'medium');
	$imageLink = get_attachment_link($attachments[$k[$n]]->ID);

	// pega os titulos dos posts em destaque para os circulos
	$args=array('posts_per_page'=>2, 'tag' => 'destaque', 'order' => 'DESC');
	$wp_query = new WP_Query( $args );
	$destaques = array();
	while(have_posts()) {
		the_post();
		$destaques[] = '<a href="'.get_permalink().'" >'.the_title('','',false).'</a>';
	}
	wp_reset_postdata();
?>

<img class=back_esq src=/wp-content/themes/sementeia-tema/images/home_bolinhas_esq.png />
<img class=back_dir src=/wp-content/themes/sementeia-tema/images/home_bolinhas_dir.png />
<div id="container">
			<div id="circulo-esquerda" class="circulo">
				<div class="">
				<div class="lW" style="width:45px;"></div><div class="rW" style="width:47px;"></div><div class="lW" style="width:21px;"></div><div class="rW" style="width:17px;"></div><div class="lW" style="width:14px;"></div><div class="rW" style="width:9px;"></div><div class="lW" style="width:7px;"></div><div class="rW" style="width:3px;"></div><div class="lW" style="width:3px;"></div><div class="rW" style="width:0px;"></div><div class="lW" style="width:4px;"></div><div class="rW" style="width:0px;"></div><div class="lW" style="width:5px;"></div><div class="rW" style="width:1px;"></div><div class="lW" style="width:6px;"></div><div class="rW" style="width:1px;"></div><div class="lW" style="width:13px;"></div><div class="rW" style="width:8px;"></div><div class="lW" style="width:24px;"></div><div class="rW" style="width:15px;"></div><div class="lW" style="width:34px;"></div><div class="rW" style="width:33px;"></div><div class="lW" style="width:84px;"></div><div class="rW" style="width:0px;"></div><div class="lW" style="width:0px;"></div><div class="rW" style="width:0px;"></div>
					<div class=circulo-align>
						<img src=/wp-content/themes/sementeia-tema/images/novidades.png />
						<p class="nav"><?php echo $destaques[0];?></p>
					</div>
				</div>
			</div><!--fim do circulo-esquerda-->
			
			<div id="circulo-direita" class=circulo>
				<div id="">
				<div class="lW" style="width:45px;"></div><div class="rW" style="width:47px;"></div><div class="lW" style="width:21px;"></div><div class="rW" style="width:17px;"></div><div class="lW" style="width:14px;"></div><div class="rW" style="width:9px;"></div><div class="lW" style="width:7px;"></div><div class="rW" style="width:3px;"></div><div class="lW" style="width:3px;"></div><div class="rW" style="width:0px;"></div><div class="lW" style="width:4px;"></div><div class="rW" style="width:0px;"></div><div class="lW" style="width:5px;"></div><div class="rW" style="width:1px;"></div><div class="lW" style="width:6px;"></div><div class="rW" style="width:1px;"></div><div class="lW" style="width:13px;"></div><div class="rW" style="width:8px;"></div><div class="lW" style="width:24px;"></div><div class="rW" style="width:15px;"></div><div class="lW" style="width:34px;"></div><div class="rW" style="width:33px;"></div><div class="lW" style="width:84px;"></div><div class="rW" style="width:0px;"></div><div class="lW" style="width:0px;"></div><div class="rW" style="width:0px;"></div>
					<div class=circulo-align>
						<img src=/wp-content/themes/sementeia-tema/images/novidades.png />
						<p class="nav"><?php echo $destaques[1];?></p>							
					</div>
				</div>
			</div><!--fim do circulo-direita-->

			<div class="circle-image">
				<a href="<?php echo $imageLink; ?>">
					<img src="<?php echo $imageUrl[0]; ?>" />
				</a>
			</div>

			
			<div id="content-agenda">
				<img src="/wp-content/themes/sementeia-tema/images/bt_agenda.png" id="titulo-home-agenda">
				<div id="content-agenda-home">
					<ul>
						<li>
							<?php query_posts('showposts=4&category_name=agenda');?>
							<?php if (have_posts()): while (have_posts()) : the_post();?>
							<?php echo '<a href="'.get_permalink().'" >'.the_title('','',false).'</a>'; ?>
							<?php endwhile; else:?>
							<?php endif;?>
						</li>
					</ul>
				</div>
			</div><!--fim do content-agenda-->
		
		<div class=credits>
			<?php echo $attachments[$k[$n]]->post_excerpt; ?>
		</div> 

		<a  class="header-login" href="<?php echo wp_login_url(); ?>" title="Login"> </a>			
	</div> 
</div><!--fim do container-->
