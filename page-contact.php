<?php
/**
 * Template name: Contact
 * The Contact page template file
 *
 * @package WordPress
 * @subpackage DistricMoving
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			
			<section class="section-contact">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
						<?php while ( have_posts() ) : the_post(); ?>
					    	<?php the_content(); ?>
					    <?php endwhile; ?>
					    <?php wp_reset_query(); ?>
						</div>
					</div>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
