

<?php
	$id_agenda=get_cat_ID('agenda');
	query_posts('showposts=10&cat='.$id_agenda);		
	if (have_posts()):
		while (have_posts()):
			the_post(); ?>
			<a class=title href="#">
				<?php the_title(); ?>
			</a>
			<div class=body>
				<div class=post>
					<?php the_content(); ?>
				</div>
			</div> <?php
		endwhile;
	endif;
