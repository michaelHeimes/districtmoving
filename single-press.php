<?php
/**
 * Template Name: Press template post
 * Template Post Type: Press,page
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-press
 *
 * @package districtmoving
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php
				$heroTitle = get_post_field('post_title',$post->ID);
				$heroImage = get_the_post_thumbnail_url( $post->ID, 'full' );
			?>

			<section class="page-hero" style="background: url(<?php echo$heroImage; ?>) no-repeat center/cover;">
				<div class="page-hero__content">
					<div class="container">
						<h1 class="page-hero__title wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".45s"><?php echo $heroTitle; ?></h1>
					</div><!-- .container -->
				</div><!-- .page-hero__content -->
			</section><!-- page-hero -->

			<section class="section-single-service">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-md-7">
							<?php
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content', 'post-services' );

								the_post_navigation();

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

							endwhile; // End of the loop.
							?>	
						</div>
						<div class="col-lg-4 col-md-5">
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
get_footer();
