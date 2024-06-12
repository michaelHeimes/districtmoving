<?php
/**
 * Template name: Our team
 * The Our team page template file
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
			<section class="section-page">
				<div class="container">
					<div class="row">
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="entry-content">
								<?php
									the_content();
								?>
							</div><!-- .entry-content -->								
						</article>
					</div>
				</div>
			</section>
			
			<section class="section-team">
				<div class="container">
					<?php
						$args = array(
						  'post_type' => 'ourteam',
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
								$jobTeam = get_post_meta($post->ID, 'our_team_job', true);
								$emailAddress = explode("@",get_post_meta($post->ID, 'email_address', true))[0];
								$servicesTitle = get_post_field('post_title',$post->ID);
								$postContent =   get_post_field('post_content',$post->ID);
								$servicesImage = get_the_post_thumbnail( $post->ID, 'team-member-thumb' );
								$count ++ ;
							?>

							<div class="col-lg-6 col-md-6">
								<article class="team wow fadeInUp" data-wow-duration="1s" data-wow-delay=".<?php echo $count + 2 ;?>s" >
									<header class="team__header"  >
										<?php echo $servicesImage ?>
									</header>
									<section class="team__section">
										<h4 class="team__title"><?php echo $servicesTitle ?></h4>
										
										<?php if( !empty( $emailAddress ) ) : ?>
											<a class="<?= $emailAddress ?>-async-email"><i class="fa fa-envelope"></i></a>	
										<?php endif; ?>

										<div class="team__job">
											<?php  echo $jobTeam; ?>
										</div>
										<p class="team__info"><?php echo $postContent ?></p>
									</section>
								</article>
							</div>
						<?php endforeach; ?>
						</div>
						<?php wp_reset_query(); ?>
					<?php endif; ?>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
