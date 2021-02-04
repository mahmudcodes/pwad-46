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
						<h2><?php the_title(); ?></h2>
						
						<?php the_content(); ?>


					</article>

					<?php 
						endwhile; 
							endif; 
					?>

				</div>
			</div>
			
		</div>
	</div>
</section>
<!--------------Footer--------------->
<?php get_footer(); ?>