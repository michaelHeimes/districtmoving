<?php
/**
 * Template part for displaying slider logo
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package districtmoving
 */

?>

<section class="section-slider-logo">

	<div class="container">

		<div class="slider-logo">

				<?php if( have_rows('slider_logo') ): ?>

					<?php while( have_rows('slider_logo') ): the_row();
						// vars
						$image = get_sub_field('logo_image');
						?>
						<div class="slider-logo__item ">

							<div class="slider-logo__image">
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" >
							</div>
						</div>

					<?php endwhile; ?>

				<?php endif; ?>

		</div><!--.slider-logo-->
	</div><!-- .container -->
</section>
