<?php
/**
 * Template name: Front Page
 * The front page template file
 *
 * @package WordPress
 * @subpackage DistricMoving
 * @since 1.0
 * @version 1.0
 */
get_header();
$heroBg = get_post_thumbnail_id();
?>

<div id="primary" class="content-area"> 

    <main id="main" class="site-main">
        <section class="pro-primary-hero">

            <div class="hero-home__item">
                <?php if( !empty( $heroBg ) ) {
                    $imgID = $heroBg;
                    $img_alt = trim( strip_tags( get_post_meta( $imgID, '_wp_attachment_image_alt', true ) ) );
                    $img = wp_get_attachment_image( $imgID, 'home-hero', false, [ "class" => "hero-img", "alt"=>$img_alt, "loading" => "lazy"] );
                    echo $img;
                }?>
                <div class="container">

                    <div class="hero-home__info wow fadeInLeft " style="position: relative; padding-top: 250px; color: #fff;z-index: 3;">
                        <p>
                        <h1>
                            <strong>Ready to make a move?</strong>
                        </h1>
                        <h3>
                            We are a local family-owned business, operating for more than 50 years.
                        </h3>
                        <div class="quote-container">
                            <a class="request-quote" href="https://www.districtmoving.com/request-quote/" target="_self">Request a FREE quote</a>
                        </div>
                        </p>


                    </div> 

                </div>

            </div>
        </section>
        <div class="container" style="margin-top: 50px;">
            <div class="row">
                <div class="col-lg-12">
                    <?php
                    if (have_posts()) :

                        if (is_home() && !is_front_page()) :
                            ?>
                            <!-- <header>
                                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                            </header> -->

                            <?php
                        endif;

                        /* Start the Loop */
                        while (have_posts()) : the_post();

                            /*
                             * Include the Post-Format-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                             */
                            get_template_part('template-parts/content', get_post_format());

                        endwhile;
                    else :

                        get_template_part('template-parts/content', 'none');

                    endif;
                    ?>
                </div>
                <!-- 					<div class="col-lg-4">
                <?php //get_sidebar();   ?>
                                                        </div> -->
            </div>

        </div>

        <?php /* Stats Sector section start */ ?> 

        <?php
        if (have_rows('add_stats_sector')):
            $main_heading = get_field('main_heading');
            ?>

            <section id="statssector" class="statssector-area area-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="section-headline statssector-head text-center">
                                <?php if (!empty($main_heading)) { ?>
                                    <h2><?php echo $main_heading; ?></h2> 
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">

                        <?php
                        while (have_rows('add_stats_sector')): the_row();
                            // load value
                            $title = get_sub_field('title');
                            $sub_title = get_sub_field('sub_title');
                            ?> 
                            <div class="col-md-3 col-sm-12 col-xs-12">


                                <div class="statssector_content">
                                    <?php if (!empty($title)) { ?>
                                        <h3><?php echo $title; ?></h3>
                                    <?php } ?>
                                    <?php if (!empty($sub_title)) { ?>
                                        <h4><?php echo $sub_title; ?></h4>
                                    <?php } ?> 
                                </div>


                            </div>
                        <?php endwhile; ?>     

                    </div>
                </div>
            </section>        
        <?php endif; ?>

        <?php /* Stats Sector section end  */ ?>       

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
            
    

        <?php get_template_part('template-parts/content', 'services'); ?>

        <?php get_template_part('template-parts/content', 'new-post'); ?>
        
        <section class="section-slider-logo" style="max-width: 1150px;margin-left: auto;margin-right:auto; padding: 5rem;">
            <div class="logo-row" style="display: flex;">

                <?php if (have_rows('slider_logo')): ?>

                    <?php
                    while (have_rows('slider_logo')): the_row();
                        // vars
                        $image = get_sub_field('logo_image');
                        ?>
                        <div class="slider-logo__item ">

                            <div class="slider-logo__image">
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="200px" height="60px">
                            </div>
                        </div>

                    <?php endwhile; ?>

                <?php endif; ?>

            </div><!--.slider-logo-->

        </section>	

      
    </main><!-- #main -->

</div><!-- #primary -->
<?php
get_footer();
