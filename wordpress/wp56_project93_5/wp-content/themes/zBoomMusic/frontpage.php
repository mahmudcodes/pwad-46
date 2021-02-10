<?php get_header(); ?>
<?php  

/*
	Template Name: home_page		
*/

?>
<div class="featured">
	<div class="wrap-featured zerogrid">
		<div class="slider">
			<div class="rslides_container">
				<?php return nivo_slider_code(); ?>
			</div>
		</div>
	</div>
</div>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block01">
			<?php
				$query = new WP_Query(array(
					'post_type' => 'services',
					'posts_per_page' => 3
					
				)); 
				 
				    while ( $query->have_posts() ) :
				    	$query->the_post();  
			?>
			<div class="col-1-3">
				<div class="wrap-col box">
					<h2><?php the_title(); ?></h2>
					<?php the_content( ); ?>
					<div class="more">[...]</div>
				</div>
			</div>
			<?php  
				endwhile;
					
			?>
		</div>
		<div class="row block02">
			<div class="col-2-3">
				<div class="wrap-col">
					<div class="heading"><h2>Latest Blog</h2></div>
					<?php
						$query = new WP_Query(array(
							'post_type' => 'post',
							'posts_per_page' => 4,
						)); 
						if ( $query->have_posts() ) : 
						    while ( $query->have_posts() ) : 
						    	$query->the_post(); 
					?> 
					<article class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<?php the_post_thumbnail(); ?>
							</div>
						</div>
						<div class="col-2-3">
							<div class="wrap-col">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<div class="info">[By <?php the_author(); ?> on <?php the_time('F d, Y'); ?> with <?php comments_popup_link('No comments', '1 comment', '% comments', 'comments-link', 'Comments are off for this post'); ?>]</div>
								<?php the_content(); ?>
							</div>
						</div>
					</article>
					<?php 
						endwhile; 
							endif; 
					?>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>Latest Albums</h2></div>
						<div class="content">
							<img src="<?php echo get_template_directory_uri(); ?>/images/albums.png"/>
						</div>
					</div>
					<div class="box">
						<div class="heading"><h2>Upcoming Events</h2></div>
						<div class="content">
							<div class="list">
								<ul>
									<?php
										$query = new WP_Query(array(
											'post_type' => 'events',
											'posts_per_page' => 5,
										)); 
										if ( $query->have_posts() ) : 
										    while ( $query->have_posts() ) : 
										    	$query->the_post(); 
									?>
									
									<li><?php the_content(); ?></li>
									
									<?php 
										endwhile; 
											endif; 
									?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--------------Footer--------------->
<?php get_footer(); ?>