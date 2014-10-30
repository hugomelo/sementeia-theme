

<?php get_header(); ?>
<?php
// Image url
$p = get_page_by_path('circle-images','ARRAY_A');
$attachments = get_children( array('post_parent' => $p->ID,
	'post_type' => 'attachment', 'post_mime_type' =>'image') );
			
				
$n = rand(0,count($attachments)-1);
$k = array_keys($attachments);
		
$imageUrl = wp_get_attachment_url( $attachments[$k[$n]]->ID);

// pega os titulos dos posts em destaque para os circulos
$args=array('posts_per_page'=>2, 'tag' => 'destaque', 'order' => 'ASC');
$wp_query = new WP_Query( $args );
$destaques = array();
while(have_posts()) {
    the_post();
 	$destaques[] = '<a href="'.get_permalink().'" >'.the_title('','',false).'</a>';
}
wp_reset_postdata();
?>

<div id="container">
			
			<div id="circulo-esquerda" class="circulo">
				<div class="novidades novidades-esquerda">
				<div class="lW" style="width:45px;"></div><div class="rW" style="width:47px;"></div><div class="lW" style="width:21px;"></div><div class="rW" style="width:17px;"></div><div class="lW" style="width:14px;"></div><div class="rW" style="width:9px;"></div><div class="lW" style="width:7px;"></div><div class="rW" style="width:3px;"></div><div class="lW" style="width:3px;"></div><div class="rW" style="width:0px;"></div><div class="lW" style="width:4px;"></div><div class="rW" style="width:0px;"></div><div class="lW" style="width:5px;"></div><div class="rW" style="width:1px;"></div><div class="lW" style="width:6px;"></div><div class="rW" style="width:1px;"></div><div class="lW" style="width:13px;"></div><div class="rW" style="width:8px;"></div><div class="lW" style="width:24px;"></div><div class="rW" style="width:15px;"></div><div class="lW" style="width:34px;"></div><div class="rW" style="width:33px;"></div><div class="lW" style="width:84px;"></div><div class="rW" style="width:0px;"></div><div class="lW" style="width:0px;"></div><div class="rW" style="width:0px;"></div>
					<div class=circulo-align>
							<span>NOVIDADES:</span>
							<p class="nav"><?php echo $destaques[0];?></p>
					</div>
				</div>
			</div><!--fim do circulo-esquerda-->
			
			
			<div id="circulo-direita" class=circulo>
				<div id="novidades-direita">
				<div class="lW" style="width:45px;"></div><div class="rW" style="width:47px;"></div><div class="lW" style="width:21px;"></div><div class="rW" style="width:17px;"></div><div class="lW" style="width:14px;"></div><div class="rW" style="width:9px;"></div><div class="lW" style="width:7px;"></div><div class="rW" style="width:3px;"></div><div class="lW" style="width:3px;"></div><div class="rW" style="width:0px;"></div><div class="lW" style="width:4px;"></div><div class="rW" style="width:0px;"></div><div class="lW" style="width:5px;"></div><div class="rW" style="width:1px;"></div><div class="lW" style="width:6px;"></div><div class="rW" style="width:1px;"></div><div class="lW" style="width:13px;"></div><div class="rW" style="width:8px;"></div><div class="lW" style="width:24px;"></div><div class="rW" style="width:15px;"></div><div class="lW" style="width:34px;"></div><div class="rW" style="width:33px;"></div><div class="lW" style="width:84px;"></div><div class="rW" style="width:0px;"></div><div class="lW" style="width:0px;"></div><div class="rW" style="width:0px;"></div>
					<div class=circulo-align>
						<span>NOVIDADES:</span>
						<p><?php echo $destaques[1];?></p>							
					</div>
				</div><!--fim do novidades-direita-->
			</div><!--fim do circulo-direita-->

			<div id="image-post">
				<div class="circle-image">
					<img src="<?php echo $imageUrl; ?>" /> 				
				</div>
			</div><!--fim do image-post-->

			
			<div id="content-agenda">

				<div id="titulo-home-agenda">


				</div>
				
				<div id="content-agenda-home">
				<ul>
					<li>
						
						<!--PRECISO ARRUMAR ISSO AINDA-->
						<?php query_posts('showposts=4&category_name=agenda');?>
						<?php if (have_posts()): while (have_posts()) : the_post();?>
						<?php echo '<a href="'.get_permalink().'" >'.the_title('','',false).'</a>'; ?>
						<?php endwhile; else:?>
						<?php endif;?>
						

					</li>
				</ul>
		
				</div><!--fim do content-agenda-->
			</div>
		
		</div> 

</div><!--fim do container-->
