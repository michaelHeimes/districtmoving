<?php
/**
 * Template name: Privacy Policy Page
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

			<?php //get_template_part( 'template-parts/content', 'slider' ); ?>

			<section class="privacy-column">
				<div class="container">
					<?php
					if ( have_posts() ) :
						/* Start the Loop */
						while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/content', get_post_format() );
						endwhile;
					endif; ?>					
				</div><!-- .container -->
			</section>

			<?php get_template_part( 'template-parts/content', 'new-post' ); ?>

		</main><!-- #main -->

	</div><!-- #primary -->
<?php

get_footer();
