<?php
/**
 * Template name: About Page
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
							<h1><strong>We move mountains for our clients</strong></h1>
							<h3>For over 50 years, District Moving Companies, Inc has orchestrated a team of professionals to provide the highest quality relocation, logistics management, and storage services available.</h3>
							<div class="quote-container wow fadeInLeft">
								<a class="request-quote" href="/request-quote/" target="_self">Request a quote</a>
						    </div>
						</div> 
					</div><!-- .container -->
					<div class="hero-photo" style="background: url(<?php echo $bgImage; ?>) no-repeat center/cover;"></div>
				</div>
			</section>

			<section class="about-column">
				<div class="container">
					<?php
					if ( have_posts() ) :
						/* Start the Loop */
						while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/content', get_post_format() );
						endwhile;
					endif; ?>
					
					<div class="row">
						<?php if( have_rows('about_colum') ): ?>

							<?php while( have_rows('about_colum') ): the_row();
								// vars
								$aboutColumnTitle = get_sub_field('about_column_title');
								$aboutColumnContent = get_sub_field('about_column_content');
								?>
								<div class="col-lg-6 .co">
									<article class="article-about">
										<?php if( $aboutColumnTitle ): ?>
											<h4 class="article-about__title"><?php echo $aboutColumnTitle; ?></h4>
										<?php endif; ?>
										<?php if( $aboutColumnContent ): ?>
											<div class="article-about__info">
												<?php echo $aboutColumnContent; ?>
											</div>
										<?php endif; ?>

									</article>
								</div>

							<?php endwhile; ?>

						<?php endif; ?>

					</div><!-- .row -->
				</div><!-- .container -->
			</section>
            <?php 
            /* Start video section end  */
			$video_heading = get_field('video_heading', get_the_ID());
			$destM_mp4_video = get_field('mp4_video', get_the_ID());
            $destM_webm_video = get_field('webm_video', get_the_ID());
			$video_poster_image = get_field('video_poster_image', get_the_ID());
			if( $video_poster_image ) {
				$video_poster_url = $video_poster_image;
			}else{
                $video_poster_url = get_bloginfo('stylesheet_directory').'/img/video-poster.png';
			} 
			if( $destM_mp4_video || $destM_webm_video  ) { ?>
				<section class="dm-video-section area-padding">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<?php if( $video_heading ) { ?>
                                    <h2><?php echo $video_heading ;?></h2>    
                                <?php } ?>
								<div class="video-container">
									<video loop controls class="video dm-video" preload="none" playsInline  poster="<?php echo $video_poster_url;?>">
										<?php if( $destM_webm_video ) { ?>
										<source src="<?php echo $destM_webm_video;?>" type="video/webm">
										<?php } ?>
										<?php if( $destM_mp4_video ) { ?>
										<source src="<?php echo $destM_mp4_video;?>"  type="video/mp4">
										<?php } ?>
										Your browser does not support the video tag.
									</video>
								</div>
							</div>
						</div>
					</div>  
				</section>      
			<?php } 
            /* End video section end  */
            ?>
			<?php get_template_part( 'template-parts/content', 'new-post' ); ?>

		</main><!-- #main -->

	</div><!-- #primary -->
<?php

get_footer();
