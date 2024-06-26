<?php
/**
 * Template name: Thank you
 * The thank you page template file
 *
 * @package WordPress
 * @subpackage DistricMoving
 * @since 1.0
 * @version 1.0
 */
get_header(); ?>

	<div id="primary" class="content-area">

		<main id="main" class="site-main">

			<?php get_template_part( 'template-parts/content', 'slider' ); ?>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<?php
						if ( have_posts() ) :

							if ( is_home() && ! is_front_page() ) : ?>
								<!-- <header>
									<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
								</header> -->

							<?php
							endif;

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
		</main><!-- #main -->

	</div><!-- #primary -->
<?php

get_footer();
