<?php
/**
 * Template part for displaying services
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package districtmoving
 */

?>


<?php
	$args = array(
		'post_type' => 'Services',
		'post_status' => 'publish',
		'numberposts' => -1,
		'posts_per_page' => -1,
		'order' => 'ASC'
	);

	$posts = query_posts($args);
?>

<section class="section-services">

	<div class="container">
		<?php
			$serviceTitle = get_field('service_section_title');
			$serviceContent = get_field('service_section_description');
		?>
		<h2 class="section-services__title"> <?php echo $serviceTitle; ?> </h2>
		<p class="section-services__desc"> <?php echo $serviceContent; ?> </p>

		<?php if(count($posts)): ?>
			<!-- <div class="row services-slider"> -->
			<div class="row"> <!-- removed "services-slider" class to stop slider view -->

			<?php $i = 0; foreach($posts as $post): $i++; ?>
				<?php if($post->ID != 354): ?>
				<?php
					$servicesShortDesc = get_post_meta($post->ID, 'short_description', true);
					$servicesTitle = get_post_field('post_title',$post->ID);
					// $servicesImage =  get_field('image_service');
					$servicesImageID = get_post_thumbnail_id( $post->ID);
				?>

				<div class="col-lg-3 col-md-6">
					<article class="service">

						<header class="service__header">
							<?php if( !empty( $servicesImageID ) ) {
								$imgID = $servicesImageID;
								$img_alt = trim( strip_tags( get_post_meta( $imgID, '_wp_attachment_image_alt', true ) ) );
								$img = wp_get_attachment_image( $imgID, 'service-card', false, [ "class" => "", "alt"=>$img_alt] );
								echo $img;
							}?>						
						</header>
						<section class="service__section">
							<h4 class="service__title"><?php echo $servicesTitle ?></h4>
							<p class="service__info"><?php echo $servicesShortDesc ?></p>
							
						</section>
						<div class="service-footer">
								<a href="<?php the_permalink($post->ID); ?>" class="btn btn-primary"> Learn More<i class="icon-triagle-right"></i></a>
							</div>
					</article>
				</div>
				<?php endif; ?>
			<?php endforeach; ?>
			</div>
			<?php wp_reset_query(); ?>
		<?php endif; ?>

	</div>
</section>