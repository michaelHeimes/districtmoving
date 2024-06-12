<?php
/**
 * Template name: Join Our Team
 * The front page template file
 *
 * @package WordPress
 * @subpackage DistricMoving
 * @since 1.0
 * @version 1.0
 */
get_header(); ?>

	<div id="primary" class="content-area">

		<main id="main" class="site-main">
			<?php $bgImage = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>

			<section id="service-hero" class="page-hero page-hero--service">
				<div class="page-hero__content page-hero__content--service">
					<div class="container">
						<div class="wow fadeInLeft" style="color: #fff;">
							<h1><strong>Join Our Team</strong></h1>
							<h5>Distric Moving Companies is growing by leaps & bounds. We are looking for people that can join the District Moving family and enjoy a rewarding career. Our Employee benefits include paid vacation, sick leave, maternity leave, retirement plans, and more!</h5>
							<div class="quote-container wow fadeInLeft">
								<a class="request-quote our-position-button" href="#slide-position" target="_self">View Open Positions</a>
						    </div>
						</div> 
					</div><!-- .container -->
					<div class="hero-photo" style="background: url(<?php echo $bgImage; ?>) no-repeat center/cover;"></div>
				</div>
			</section>

            <section class="join-team-second-section-main">
                <div class="join-team-second-section-container">

                    <div class="join-team-content">
                                <h1><strong>We are hiring people like you</strong></h1>
                                <h5>As you search for your next position in the moving and storege industry, we believe Distric Moving is the kind of vibrant workplace where youy can not only grow, but thrive. We are a highly collaborative organization - a team of experienced professionsls who are continually looking for individuals the believe in delievring value and putting the customer first.</h5>
                               
                    </div> 

                    <div class="join-team-icon-boxes">
                        <div class="join-team-icon-box">
                          <img src="https://www.districtmoving.com/wp-content/uploads/2022/12/1.png" alt="">
                          <h4>Reputable</h4>
                          <p>Well known and trusted by thousands of families and businesses</p>
                        </div>

                        <div>
                          <img src="https://www.districtmoving.com/wp-content/uploads/2022/12/4.png" alt="">
                          <h4>Expereienced Team</h4>
                          <p>You will work with the most experienced team in the industry</p>
                        </div>

                        <div>
                          <img src="https://www.districtmoving.com/wp-content/uploads/2022/12/3.png" alt="">
                          <h4>Flexibility</h4>
                          <p>We offer flexible employment with extensive benefits</p>
                        </div>

                        <div>
                          <img src="https://www.districtmoving.com/wp-content/uploads/2022/12/2.png" alt="">
                          <h4>High Standards</h4>
                          <p>We maintain the highest quality of standards for moving and storege services</p>
                        </div>
                    </div>
                
                </div>
			</section>
      
            <?php echo do_shortcode('[dmove_jobs]'); ?>

			<?php get_template_part( 'template-parts/content', 'new-post' ); ?>
             
                <!-- section two-->


      

		</main><!-- #main -->

	</div><!-- #primary -->
<?php

get_footer();