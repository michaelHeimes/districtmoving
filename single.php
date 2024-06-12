<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package districtmoving
 */

get_header(); ?>

<div id="primary" class="content-area single-blog">
	<?php
	$heroTitle = get_post_field('post_title', $post->ID);
	$heroImage = get_the_post_thumbnail_url($post->ID, 'full');
	?>

	<section class="page-hero" style="background: url(<?php echo $heroImage; ?>) no-repeat center/cover;height: 640px;">
		<div class="page-hero__content">
			<div class="container">
				<div class="hero-single-blog__info wow fadeInLeft " style="position: relative; padding-top: 250px; color: #fff;z-index: 3;">
					<h1 class="wow fadeInLeft" style="font-weight:400 !Important;font-size:20px !Important;margin-bottom:10px">BLOG</h1>
					<h1 class="page-hero__title wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".45s"><?php echo $heroTitle; ?></h1>
				</div>
			</div><!-- .container -->
		</div><!-- .page-hero__content -->
	</section><!-- page-hero -->
	<main id="main" class="site-main">
		<section class="section-single-post">
			<div class="container single-blog-container">
				<div class="row">
					<div class="col-lg-12">
					<div class="entry-meta">
			<?php districtmoving_posted_on(); ?>
</div>
						<?php

						// Share buttons
						$post_url = get_permalink();
						$post_title = get_the_title();
						?>
						<div class="before-content social-sharing">
							<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url($post_url); ?>" target="_blank" rel="noopener">
								<img src="https://www.districtmoving.com/wp-content/uploads/2023/08/facebook.png" alt="" width="40px">
							</a>
							<a href="https://twitter.com/intent/tweet?url=<?php echo esc_url($post_url); ?>&text=<?php echo esc_attr($post_title); ?>" target="_blank" rel="noopener">
								<img src="https://www.districtmoving.com/wp-content/uploads/2023/08/twitter-x-logo-0339F999CF-seeklogo.com_.png" alt="" width="40px">
							</a>
							<a href="https://www.linkedin.com/shareArticle?url=<?php echo esc_url($post_url); ?>&title=<?php echo esc_attr($post_title); ?>" target="_blank" rel="noopener">
								<img src="https://www.districtmoving.com/wp-content/uploads/2023/08/linkedin.png" alt="" width="40px">
							</a>
							<a href="https://plus.google.com/share?url=<?php echo esc_url($post_url); ?>" target="_blank" rel="noopener">
								<img src="https://www.districtmoving.com/wp-content/uploads/2023/08/google-plus.png" alt="" width="40px">
							</a>
							<a href="mailto:?subject=<?php echo rawurlencode($post_title); ?>&body=<?php echo esc_url($post_url); ?>" target="_blank" rel="noopener">
								<img src="https://www.districtmoving.com/wp-content/uploads/2023/08/email-1.png" alt="" width="40px">
							</a>
							<a href="https://www.pinterest.com/pin/create/button/?url=<?php echo esc_url($post_url); ?>&description=<?php echo esc_attr($post_title); ?>" target="_blank" rel="noopener">
								<img src="https://www.districtmoving.com/wp-content/uploads/2023/08/pinterest.png" alt="" width="40px">
							</a>
						</div>

	
						<?php
						while (have_posts()) : the_post();

							get_template_part('template-parts/content', get_post_type());

							// the_post_navigation();

						// If comments are open or we have at least one comment, load up the comment template.
						// if ( comments_open() || get_comments_number() ) :
						// 	comments_template();
						// endif;

						endwhile; // End of the loop.
						?>
						<img src="https://www.districtmoving.com/wp-content/uploads/2023/08/New-Logo-Blue-122022.png" alt="">
						<h2 style="text-align:center;color:#000 !IMportant;margin-bottom:20px !Important;font-size: 22px;font-family: 'DM Sans', sans-serif;font-weight: bold;margin-bottom: 60px;color: #041e42;line-height: 46px;">
						(301)843-6606 DisctrictMoving.com
							</h2>
						<div>
							<h2 style="text-align:center;margin-bottom:20px !Important;font-size: 30px;font-family: 'DM Sans', sans-serif;font-weight: bold;margin-bottom: 60px;color: #041e42;line-height: 46px;">
								Share This Blog
							</h2>
						</div>
						<div class="social-sharing">
							<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url($post_url); ?>" target="_blank" rel="noopener">
								<img src="https://www.districtmoving.com/wp-content/uploads/2023/08/facebook.png" alt="" width="30px">
							</a>
							<a href="https://twitter.com/intent/tweet?url=<?php echo esc_url($post_url); ?>&text=<?php echo esc_attr($post_title); ?>" target="_blank" rel="noopener">
								<img src="https://www.districtmoving.com/wp-content/uploads/2023/08/twitter-x-logo-0339F999CF-seeklogo.com_.png" alt="" width="30px">
							</a>
							<a href="https://www.linkedin.com/shareArticle?url=<?php echo esc_url($post_url); ?>&title=<?php echo esc_attr($post_title); ?>" target="_blank" rel="noopener">
								<img src="https://www.districtmoving.com/wp-content/uploads/2023/08/linkedin.png" alt="" width="30px">
							</a>
							<a href="https://plus.google.com/share?url=<?php echo esc_url($post_url); ?>" target="_blank" rel="noopener">
								<img src="https://www.districtmoving.com/wp-content/uploads/2023/08/google-plus.png" alt="" width="30px">
							</a>
							<a href="mailto:?subject=<?php echo rawurlencode($post_title); ?>&body=<?php echo esc_url($post_url); ?>" target="_blank" rel="noopener">
								<img src="https://www.districtmoving.com/wp-content/uploads/2023/08/email-1.png" alt="" width="30px">
							</a>
							<a href="https://www.pinterest.com/pin/create/button/?url=<?php echo esc_url($post_url); ?>&description=<?php echo esc_attr($post_title); ?>" target="_blank" rel="noopener">
								<img src="https://www.districtmoving.com/wp-content/uploads/2023/08/pinterest.png" alt="" width="30px">
							</a>
						</div>

						<?php
						?>

					</div>
				</div>
			</div>
		</section>
	</main><!-- #main -->
</div><!-- #primary -->

<?php


get_footer();
