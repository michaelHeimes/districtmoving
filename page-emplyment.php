<?php
/**
 * Template name: Employment
 * The emplyment page template file
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
			<section class="section-employment">
				<div class="container">
					<div class="row">
						<div class="col-xl-8">
							<div class="row">
								<div class="entry-content">
									<?php
										the_content();
									?>
								</div><!-- .entry-content -->
							</div>
							<?php
								/*$args = array(
								  'post_type' => 'employment',
								  'post_status' => 'publish',
								  'numberposts' => -1,
								  'posts_per_page' => -1,
								  'order' => 'ASC'
								);

								$posts = query_posts($args);*/
							?>
							<?php /* if(count($posts)): ?>
								<div class="row">
								<?php $count  = 0;?>
								<?php $i = 0; foreach($posts as $post): $i++; ?>
									<?php
										$servicesTitle = get_post_field('post_title',$post->ID);
										$postContent =   get_post_field('post_content',$post->ID);
										$count ++ ;
									?>
									<div class="col-lg-6 col-md-6">
										<article class="article-employment wow fadeInUp" data-wow-duration="1s" data-wow-delay=".<?php echo $count + 2 ;?>s" >
											<section class="article-employment__section">
												<h4 class="article-employment__title"><?php echo $servicesTitle ?></h4>
												<p class="article-employment__info"><?php echo $postContent ?></p>
											</section>
											<footer>
												<a href="/employment-contact/" class="btn btn-primary">Apply For This Position	</a>
											</footer>
										</article>
									</div>
								<?php endforeach; ?>
								</div>
								<?php wp_reset_query(); ?>
							<?php endif; */ ?>
						</div>
						<div class="col-xl-4">
							<aside id="secondary" class="sidebar-left  wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
								<?php dynamic_sidebar('sidebar-right-alt'); ?>
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
