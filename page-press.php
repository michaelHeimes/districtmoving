<?php
/**
 * Template name: Press
 * The Press page template file
 *
 * @package WordPress
 * @subpackage DistricMoving
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php // get_template_part( 'template-parts/content', 'hero' ); ?>

			<?php $heroBg = get_field('background_district_moving');
			$heroTitle = get_field('title_page_hero');
			$heroContent = get_field('content_page_hero'); ?>

			<section id="service-hero" class="page-hero page-hero--service">
				<div class="page-hero__content page-hero__content--service page-hero__content--about">
					<div class="container">
						<div class="wow fadeInLeft" style="color: #fff;">
							<h1><strong><?php echo $heroTitle; ?></strong></h1>
							<h3><?php echo $heroContent; ?></h3>
						</div> 
					</div><!-- .container -->
					<div class="hero-photo" style="background: url(<?php echo $heroBg['url']; ?>) no-repeat center/cover;"></div>
				</div>
			</section>
			<section class="section-press">
				<div class="container">
					<div class="row">
						<div class="col-xl-8 col-lg-6">
							<?php
								$args = array(
								  'post_type' => 'press',
								  'post_status' => 'publish',
								  'numberposts' => -1,
								  'posts_per_page' => -1,
								  'order' => 'ASC'
								);

								$posts = query_posts($args);
							?>
							<?php if(count($posts)): ?>
								<div class="row">
								<?php $count  = 0;?>
								<?php $i = 0; foreach($posts as $post): $i++; ?>

									<?php
										$pressShortDesc = get_post_meta($post->ID, 'short_description_press', true);
										$pressTitle = get_post_field('post_title',$post->ID);

										$count ++ ;
									?>
									<div class="col-xl-6 col-lg-12 col-md-12">
										<article class="press wow fadeInUp" data-wow-duration="1s" data-wow-delay=".<?php echo $count + 2 ;?>s" >
											<section class="press__section">
												<h4 class="press__title">
													<a href="<?php the_permalink($post->ID); ?>"><?php echo $pressTitle ?></a>	</h4>
												<p class="press__info"><?php echo $pressShortDesc ?></p>
											</section>
										</article>
									</div>
								<?php endforeach; ?>
								</div>
								<?php wp_reset_query(); ?>
							<?php endif; ?>
						</div>
						<div class="col-xl-4 col-lg-6">
							<aside id="secondary" >
								<?php dynamic_sidebar('sidebar-right'); ?>
							</aside>
						</div>
					</div>

				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
