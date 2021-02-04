<?php get_header(); ?>
		<!--////////////////////////////////////Container-->
		<section id="container">
			<div class="wrap-container">
				<div class="zerogrid">
					<div class="row">
						<div class="col-1-2">
							<a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" /></a>
						</div>
						<div class="col-1-2">
							<form id="form-container" action="" class="f-right">
								<!--<input type="submit" id="searchsubmit" value="" />-->
								<a class="search-submit-button" href="javascript:void(0)">
									<i class="fa fa-search"></i>
								</a>
								<div id="searchtext">
									<input type="text" id="s" name="s" placeholder="Search Something...">
								</div>
							</form>
						</div>
					</div>
					<div class="crumbs">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="gallery.html">Blog</a></li>
						</ul>
					</div>
					<div id="main-content" class="col-2-3">
						<div class="wrap-content">
							<?php 
								if ( have_posts() ) : 
								    while ( have_posts() ) : the_post(); 
							?>
							<article>
								<div class="art-header">
									<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
									<div class="info">Posted on <?php the_date(); ?> in: <a href="#"><?php the_category(); ?></a></div>
								</div>
								<div class="art-content">
									<?php the_post_thumbnail(); ?>
									
									<?php the_excerpt(); ?>
								</div>
								<a class="button" href="<?php the_permalink(); ?>">Learn More</a>
								<div class="line"></div>
							</article>
							<?php 
								endwhile; 
									endif; 
							?>
							
						</div>
					</div>
					<div id="sidebar" class="col-1-3">
						<div class="wrap-sidebar">
							<!---- Start Widget ---->
							<div class="widget wid-new-updates">
								<div class="wid-header">
									<h5>Hot Updates !</h5>
								</div>
								<div class="wid-content">
									<ul>
										<li class="cat-item cat-item-2"><a href="#">Etiam cursus leo vel metus</a></li>
										<li class="cat-item cat-item-3"><a href="#">In faucibus orciluctus et</a></li>
										<li class="cat-item cat-item-4"><a href="#">Nam elit agna endrerit sit amet</a></li>
										<li class="cat-item cat-item-5"><a href="#">Nulla facilisi enean nec eros</a></li>
										<li class="cat-item cat-item-6"><a href="#">Suspendisse sollicitudin velit</a></li>
										<li class="cat-item cat-item-7"><a href="#">Ultrices posuere cubilia Curae</a></li>
										<li class="cat-item cat-item-8"><a href="#">Ut pharetra augue nec augue</a></li>
										<li class="cat-item cat-item-9"><a href="#">Vestibulum ante ipsum primis</a></li>
									</ul>
								</div>
							</div>
							<!---- Start Widget ---->
							<div class="widget wid-post">
								<div class="wid-header">
									<h5>Lastest Updates</h5>
								</div>
								<div class="wid-content">
									<div class="post">
										<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/13.jpg"/></a>
										<div class="wrapper">
											<a href="#"><h6>In pede mi, aliquet sit amet, euismod in,auctor ut, ligul.</h6></a>
											<p>Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis, lobortis dignissim, pulvinar ac, lorem. Lorem…</p>
											<span>May 27, 2014 6:31 am</span>
										</div>
									</div>
									<div class="post">
										<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/14.jpg"/></a>
										<div class="wrapper">
											<a href="#"><h6>In pede mi, aliquet sit amet, euismod in,auctor ut, ligul.</h6></a>
											<p>Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis, lobortis dignissim, pulvinar ac, lorem. Lorem…</p>
											<span>May 27, 2014 6:31 am</span>
										</div>
									</div>
									<div class="post">
										<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/15.jpg"/></a>
										<div class="wrapper">
											<a href="#"><h6>In pede mi, aliquet sit amet, euismod in,auctor ut, ligul.</h6></a>
											<p>Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis, lobortis dignissim, pulvinar ac, lorem. Lorem…</p>
											<span>May 27, 2014 6:31 am</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--////////////////////////////////////Footer-->
		<?php get_footer(); ?>