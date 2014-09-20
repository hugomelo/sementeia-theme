<?php if (is_category('agenda')) { ?>
<?php get_header(); ?>
<body id="body-agenda">
<div id="header-agenda">
<?php }else{ $body_teste=1; ?>
<?php get_header(); ?>
<body id="body-categorias-sementes">
<div id="header-sementes">
<?php }?>

 <div id="header-content"> </div>
		<div class="hearder-logo">
						
		</div> <!--fim do header-logo-->
					
		<div class="header-content-login">
					
			<div class="orientacao-sementeia">
						
			</div><!--fim do header-login-->
			<div class="orientacao-resistencia">
						
			</div><!--fim do header-login-->
			<div class="orientacao-sementes">
						
			</div><!--fim do header-login-->

			<div class="orientacao-contato">
						
			</div><!--fim do header-login-->
			 		
		</div><!--fim do header-content-login-->
					
					
		<div class="menu">

			<div class="paginas">
				<ul>
						<li><a href="<?php echo get_permalink(get_page_by_title('sementeia'));?>"> 
						<img src="<?php bloginfo('template_url')?>/images/bt_sementeia.png" rel="" title=""/></a></li>
							  	
						<li><a href="<?php echo get_permalink(get_page_by_title('movimentos de resistencia'));?>"> 
						<img src="<?php bloginfo('template_url')?>/images/bt_mov_resis.png" rel="" title=""/></a></li>
								
						<li><a href="<?php echo get_permalink(get_page_by_title('sementes'));?>"> 
						<img src="<?php bloginfo('template_url')?>/images/bt_sementes.png" rel="" title=""/></a></li>			
								<?php

								     $category_id = get_cat_ID('agenda');
 						   		     $category_link = get_category_link($category_id);

								?>
						<li><a href="<?php echo ($category_link);?>"> 
						<img src="<?php bloginfo('template_url')?>/images/bt_agenda.png" rel="" title=""/></a></li>
								
						<li><a href="<?php echo get_permalink(get_page_by_title('contato'));?>">  
						<img src="<?php bloginfo('template_url')?>/images/bt_contato.png" rel="" title=""/></a></li>
				</ul>
							
			</div> 

		</div> <!--fim do header-menu-sementeia-->
		
</div><!--fim do header-->

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
			 
			 
			 <?php echo get_sidebar()?>
			

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






