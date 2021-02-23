<?php get_header(); ?>
<div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                	<?php
						$query = new WP_Query(array(
							'post_type' => 'header',
							'posts_per_page' => 1
							
						)); 
						 
						    while ( $query->have_posts() ) :
						    	$query->the_post();  
					?>
                    <div class="left-text col-lg-6 col-md-12 col-sm-12 col-xs-12"
                        data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <h1><?php the_title(); ?></h1>
                        <p><?php the_content( ); ?></p> 
                        <a href="#about" class="main-button-slider">KNOW US BETTER</a>
                    </div>
                    <?php  
						endwhile;
							
					?>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
            	<?php
					$query = new WP_Query(array(
						'post_type' => 'services',
						'posts_per_page' => 3
						
					)); 
					 
					    while ( $query->have_posts() ) :
					    	$query->the_post();  
				?>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2>01</h2>
                            <?php the_post_thumbnail(); ?>
                            <h4><?php the_title(); ?></h4>
                            <p><?php the_content( ); ?></p>
                            <a href="#testimonials" class="main-button">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
                <?php  
					endwhile;
						
				?>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <div class="left-image-decor"></div>

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="promotion">
        <div class="container">
            <div class="row">
                <div class="left-image col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix-big"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/left-image.png" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="right-text offset-lg-1 col-lg-6 col-md-12 col-sm-12 mobile-bottom-fix">
                    <ul>
                    	<?php
							$query = new WP_Query(array(
								'post_type' => 'about',
								'posts_per_page' => 3
								
							)); 
							 
							    while ( $query->have_posts() ) :
							    	$query->the_post();  
						?>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                            <?php the_post_thumbnail(); ?>
                            <div class="text">
                                <h4><?php the_title(); ?></h4>
                                <p><?php the_content( ); ?></p>
                            </div>
                        </li>
                        <?php  
							endwhile;
								
						?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <div class="right-image-decor"></div>

    <!-- ***** Testimonials Starts ***** -->
    <section class="section" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="center-heading">
                        <h2>What They Think <em>About Us</em></h2>
                        <p>Suspendisse vitae laoreet mauris. Fusce a nisi dapibus, euismod purus non, convallis odio.
                            Donec vitae magna ornare, pellentesque ex vitae, aliquet urna.</p>
                    </div>
                </div>
                <div class="col-lg-10 col-md-12 col-sm-12 mobile-bottom-fix-big"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="owl-carousel owl-theme">
                    	<?php
							$query = new WP_Query(array(
								'post_type' => 'testimonials',
								'posts_per_page' => 3
								
							)); 
							 
							    while ( $query->have_posts() ) :
							    	$query->the_post();  
						?>
                        <div class="item service-item">
                            <div class="author">
                                <i><?php the_post_thumbnail(); ?></i>
                            </div>
                            <div class="testimonial-content">
                                <ul class="stars">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h4><?php the_title(); ?></h4>
                                <p><?php the_content( ); ?></p>
                                <span>Besta CTO</span>
                            </div>
                        </div>
					<?php  
						endwhile;
							
					?>      
                      </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>