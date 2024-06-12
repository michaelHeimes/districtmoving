<?php
/**
 * Template part for displaying slider
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package districtmoving
 */

?>

<?php
	$argsPost = array(
		'post_type' => 'slider',
		'post_status' => 'publish',
		'numberposts' => -1,
		'posts_per_page' => -1,
		'order' => 'ASC'
	);

	$postsPost = query_posts($argsPost);
?>

<section class="pro-primary-slider ">

	<?php if(count($postsPost)): ?>

		<?php $i = 0; foreach($postsPost as $post): $i++; ?>
			<?php
				$slideImage = get_the_post_thumbnail_url( $post->ID, 'full' );
				$slideContent = get_post_field('post_content',$post->ID);
			?>

			<div class="slider-home__item " style="background: url(<?php echo $slideImage; ?>) no-repeat center/cover;">
				
				<div class="container  wow fadeInLeft">

				 <!-- <h3 class="slider-home__title"><?php echo $title; ?></h3> -->

					<div class="slider-home__info wow fadeInLeft">
						<p>
							<?php echo $slideContent; ?>
							<div class="quote-container wow fadeInLeft">
							<a class="request-quote" href="/request-quote/" target="_self">Request a quote</a>
						    </div>
						</p>


					</div> 

				</div>

			</div>
		<?php endforeach; ?>
		<?php wp_reset_query(); ?>
	<?php endif; ?>
</section>
