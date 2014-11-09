
<?php get_header(); ?>
<?php if(is_page('movimentos-de-resistencia')): ?>	
	<img class=back_esq src=/wp-content/themes/sementeia-tema/images/mov_resis_esq.png />
	<img class=back_dir src=/wp-content/themes/sementeia-tema/images/mov_resis_dir.png />
<?php endif;
if(is_page('sementes')): ?>	
	<img class=back_esq src=/wp-content/themes/sementeia-tema/images/sementes_esq.png />
	<img class=back_dir src=/wp-content/themes/sementeia-tema/images/sementes_dir.png />
<?php endif ?>	


<div class="content">

	<?php

	if(is_page('sementes')){
		echo '<div class="conteudo-categorias">';
		get_sidebar();
		echo '</div>';
	}
	?>


	<div class="conteudo">
		<?php 
			if(is_page('sementeia')||is_page('sementes')){

					echo "<div class=".'"circle-image"'.">";
						$p = get_page_by_path('circle-images','ARRAY_A');
						$attachments = get_children( array('post_parent' => $p['ID'],
						'post_type' => 'attachment', 'post_mime_type' =>'image') );
						$n = rand(0,count($attachments)-1);
						$k = array_keys($attachments);
						$url = wp_get_attachment_url( $attachments[$k[$n]]->ID);
					
						printf ('<img src="%s"/>',$url);

				echo "</div>";
			}
		?>
				
		<div class="conteudo-titulo"> <div class="titulo"> </div> </div>

		<div class="conteudo-texto">
			<?php
				if (have_posts()) {
					while (have_posts()) {
						the_post();
						the_content();
					}
				}
			?>	

		</div>
		<div class=clear></div>
		
	</div>
	

</div>	 

<?php
	if(is_page('sementeia') || is_page('sementes')){ 
		get_footer();
	};
?>
