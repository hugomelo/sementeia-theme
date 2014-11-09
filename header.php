<!DOCTYPE html>
<html <?php language_attributes() ?> >
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<?php wp_head();?>
	<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/sementeia.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
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
elseif(is_category("agenda"))
	$class = "agenda";
elseif(is_page('sementes'))
	$class ="sementes";
elseif (!is_category("agenda")&&is_tag()){
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

			<div class="header-content-login">
				<a href="/"></a>			
				<?php if($class=='index'): ?>
					<a  class="header-login" href="<?php echo wp_login_url(); ?>" title="Login"> </a>			
				<?php endif ?>
			</div><!--fim do header-content-login-->
					
			<?php $c="class=selected"; ?>
			<div class="header-menu">
				<div class="header-paginas">
					<ul>
						<li><a  <?php if ($class == "sementeia") echo $c; ?> href="<?php echo get_permalink(get_page_by_title('sementeia'));?>"> 
						<img src="<?php bloginfo('template_url')?>/images/bt_sementeia.png" /></a></li>
						
						<li><a  <?php if ($class == "resistencia") echo $c; ?> href="<?php echo get_permalink(get_page_by_title('movimentos de resistencia'));?>"> 
						<img src="<?php bloginfo('template_url')?>/images/bt_mov_resis.png"/></a></li>
						
						<li><a  <?php if ($class == "sementes") echo $c; ?> href="<?php echo get_permalink(get_page_by_title('sementes'));?>"> 
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
