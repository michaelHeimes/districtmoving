<?php
/**
 * Template name: Contact Employment
 * The Contact Employment page template file
 *
 * @package WordPress
 * @subpackage DistricMoving
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<h1 style="display:none;">Apply Today</h1>
			<?php get_template_part( 'template-parts/content', 'slider' ); ?>

			<section class="section-contact">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<?php // Commenting out below becuase it results in outputting [contact-form-7 id="164" title="employment form"] unrendered. ?>
							<?php //dynamic_sidebar('employment-form'); ?>

							<?php // Adding below so that the shortcode can be output via page WYSIWYG. ?>
							<?php
							if ( have_posts() ) :

								/* Start the Loop */
								while ( have_posts() ) : the_post();

									/*
									 * Include the Post-Format-specific template for the content.
									 * If you want to override this in a child theme, then include a file
									 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
									 */
									get_template_part( 'template-parts/content', get_post_format() );

								endwhile;
							else :

								get_template_part( 'template-parts/content', 'none' );

							endif; ?>
						</div>
					</div>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
