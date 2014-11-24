<!DOCTYPE html>
<html <?php language_attributes() ?> >
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<?php wp_head();?>
	<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/sementeia.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<script type="text/javascript">
var clicky_site_ids = clicky_site_ids || [];
clicky_site_ids.push(100791911);
(function() {
	var s = document.createElement('script');
	s.type = 'text/javascript';
	s.async = true;
	s.src = '//static.getclicky.com/js';
	( document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0] ).appendChild( s );
	 })();
</script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/100791911ns.gif" /></p></noscript>

</head>

<?php

if (is_front_page())
	$class="index";
elseif(is_page('sementeia'))
 	$class="sementeia";
elseif(is_page('contato'))
 	$class="contato";
elseif(is_page('movimentos-de-resistencia'))
	$class="resistencia";
elseif(is_page('todos-os-posts'))
	$class="categorias-sementes todos";
elseif(is_category("agenda"))
	$class = "agenda";
elseif(is_page('sementes'))
	$class ="sementes";
else {
	$class ="categorias-sementes";
}

?>

<body <?php body_class( $class ); ?>>
<div id="conteudo" class=<?php echo $class ?>>
	<div id="header">
		<div class="header-content">
			<div id="hearder-logo" >
				<a href="/">
				<img src="<?php bloginfo('template_url')?>/images/sementeia-logo.png" /></a>		
			</div> <!--fim do header-logo-->

			<?php $c="class=selected"; ?>
			<div class="header-menu">
				<div class="header-paginas">
					<ul>
						<li><a  <?php if ($class == "sementeia") echo $c; ?> href="<?php echo get_permalink(get_page_by_title('sementeia'));?>"> 
						<img src="<?php bloginfo('template_url')?>/images/bt_sementeia.png" /></a></li>
						
						<li><a  <?php if ($class == "resistencia") echo $c; ?> href="<?php echo get_permalink(get_page_by_title('movimentos de resistencia'));?>"> 
						<img src="<?php bloginfo('template_url')?>/images/bt_mov_resis.png"/></a></li>
						
						<li><a  <?php if ($class == "sementes" || $class == 'categorias-sementes') echo $c; ?> href="<?php echo get_permalink(get_page_by_title('sementes'));?>"> 
						<img src="<?php bloginfo('template_url')?>/images/bt_sementes.png" /></a></li>
										
						<?php
						 	 $category_id=get_cat_ID('agenda');
 						 	 $category_link = get_category_link( $category_id );
						?>
						<li><a <?php if ($class == "agenda") echo $c; ?> href="<?php echo($category_link);?>"> 
						<img src="<?php bloginfo('template_url')?>/images/bt_agenda.png" /></a></li>
						
						<li><a  <?php if ($class == "contato") echo $c; ?> href="<?php echo get_permalink(get_page_by_title('contato'));?>">  
						<img src="<?php bloginfo('template_url')?>/images/bt_contato.png" /></a></li>							

					</ul>							
					
				</div> <!--fim do header-paginas-->

			</div> <!--fim do header-menu-->
		</div><!--fim do header-content-->
	</div><!--fim do header-->
<div class=clear></div>
