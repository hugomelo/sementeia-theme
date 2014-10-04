
<?php get_header();?>

<?php
	$id_agenda=get_cat_ID('agenda');
	query_posts('showposts=10&cat='.$id_agenda);		
		if (have_posts()): while (have_posts()) : the_post();
							echo '<a href="'.get_permalink();
							echo'">';
							the_title();
							echo "</a>";
							echo "<div class=body>" . get_the_content() . "</div>";
							//the_excerpt_rereloaded(18,'');
							endwhile;
							endif;
?>
				