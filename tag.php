<?php get_header(); ?>

<div class="content">
	<div class="conteudo">
		<div class="conteudo-titulo">
			<div class="titulo">
				<p>
				<?php 
					echo "Tag: ";
					single_cat_title('', true );
				?>
				</p>
			</div>
		</div>
		
		<div class=clear></div>
		<div class="conteudo-texto">
			<?php echo category_description(); ?>
		</div>

		<div class="conteudo-postagem">
			<ul>
				<?php 
					//query_posts('showposts=4');		
					if (have_posts()):
						while (have_posts()):
							the_post();
							echo '<li><a href="'.get_permalink();
							echo'">';
							echo "<span>".the_title()."</span>";
							echo "</a></li>";
							if(function_exists('the_tags')) {
								echo '<div class="tags">';
									the_tags('');
								echo '</div>';
							}
						endwhile;
					endif;
					?>
			</ul>
		</div>

	</div>
		<?php
			if(!is_category('agenda')){
				echo '<div class="conteudo-categorias">';
				get_sidebar();
				echo '</div>';
			}
		?>
	</div>
</div>
<?php if(is_category('agenda')): ?>
	<img class=back_esq src=/wp-content/themes/sementeia-tema/images/agenda_esq.png />
	<img class=back_dir src=/wp-content/themes/sementeia-tema/images/agenda_dir.png />
<?php endif; ?>

