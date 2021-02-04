<!--------------Header--------------->
<?php get_header(); ?>
<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-3-3">
				<div class="wrap-col">
					<?php 
						if ( have_posts() ) : 
						    while ( have_posts() ) : the_post(); 
					?>    
					<article>
						<?php the_post_thumbnail(); ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="info">[By <?php the_author(); ?> on <?php the_date(); ?> with <?php comments_popup_link('No comments', '1 comment', '% comments', 'comments-link', 'Comments are off'); ?>]</div>
						<?php the_content(); ?>


					</article>

					<?php 
						endwhile; 
							endif; 
					?>

					<?php comments_template(); ?>
				</div>
			</div>
			
		</div>
	</div>
</section>
<!--------------Footer--------------->
<?php get_footer(); ?>