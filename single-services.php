<?php
/**
 * Template Name: Service template post
 * Template Post Type: services,page
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-service
 *
 * @package districtmoving
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php //get_template_part( 'template-parts/content', 'slider' ); ?>
		<?php
								
			$bgImage = get_post_thumbnail_id();
			$heroBg = get_field('background_district_moving');
			$heroTitle = get_field('title_page_hero');
			$heroContent = get_field('content_page_hero');
			$heroLink = get_field('hero_link');
			$members = get_field('members');
			$image = get_field('image');
			$designation = get_field('designation');
			$email = get_field('email');
			

		?>		
<!-- 		<section class="page-hero page-hero--service" style="background: url(<?php echo $bgImage; ?>) no-repeat center/cover;">
			<div class="page-hero__content page-hero__content--service">
				<div class="container">
					<?php if( $heroBg ): ?>		
						<div class="page-hero__image wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".25s">
							<img src="<?php echo $heroBg['url']; ?>" alt="<?php echo $heroBg['alt']; ?>">
						</div>
					<?php endif; ?>
					<?php if( $heroTitle ): ?>	
						<h1 class="page-hero__title wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".45s"><?php echo $heroTitle; ?></h1>
					<?php endif; ?>
					<?php if( $heroContent ): ?>	
						<p class="page-hero__info wow fadeInRight" data-wow-duration="1.5s" data-wow-delay=".65s"><?php echo $heroContent; ?></p>
					<?php endif; ?>

					<?php if($heroLink) :?>
						<?php  
							$link_url = $heroLink['url'];
						    $link_title = $heroLink['title'];
						    $link_target = $heroLink['target'] ? $heroLink['target'] : '_self';
						?>
						<div class="quote-container wow fadeInLeft">
							<a class="request-quote" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</section> -->

		<section id="service-hero" class="page-hero page-hero--service">
			<div class="page-hero__content page-hero__content--service">
				<div class="container">
					<?php if( $heroBg ): ?>		
						<div class="page-hero__image wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".25s">
							<img src="<?php echo $heroBg['url']; ?>" alt="<?php echo $heroBg['alt']; ?>">
						</div>
					<?php endif; ?>
					<?php if( $heroTitle ): ?>	
						<h1 class="page-hero__title wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".45s"><?php echo $heroTitle; ?></h1>
					<?php endif; ?>
					<?php if( $heroContent ): ?>	
						<p class="page-hero__info wow fadeInRight" data-wow-duration="1.5s" data-wow-delay=".65s"><?php echo $heroContent; ?></p>
					<?php endif; ?>

					<?php if($heroLink) :?>
						<?php  
							$link_url = $heroLink['url'];
						    $link_title = $heroLink['title'];
						    $link_target = $heroLink['target'] ? $heroLink['target'] : '_self';
						?>
						<div class="quote-container wow fadeInLeft">
							<a class="request-quote" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						</div>
					<?php endif; ?>
				</div><!-- .container -->
				<div class="hero-photo">
					<?php if( !empty( $bgImage ) ) {
						$imgID = $bgImage;
						$img_alt = trim( strip_tags( get_post_meta( $imgID, '_wp_attachment_image_alt', true ) ) );
						$img = wp_get_attachment_image( $imgID, 'service-post', false, [ "class" => "hero-img", "alt"=>$img_alt] );
						echo $img;
					}?>
				</div>
			</div>
		</section>

		<section class="section-single-service">
			
			<div class="container">
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'post-services' );

					//the_post_navigation();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
			</div>
		</section>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();