<?php
/**
 * Template part for displaying page hero
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package districtmoving
 */

?>

<?php
	$heroBg = get_field('background_district_moving');
	$heroTitle = get_field('title_page_hero');
	$heroContent = get_field('content_page_hero');
?>

<section class="page-hero" style="background: url(<?php echo $heroBg['url']; ?>) no-repeat center/cover;">
	<div class="page-hero__content">
		<div class="container">
			<h1 class="page-hero__title wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".45s"><?php echo $heroTitle; ?></h1>
			<p class="page-hero__info wow fadeInRight" data-wow-duration="1.5s" data-wow-delay=".65s"><?php echo $heroContent; ?></p>
		</div><!-- .container -->
	</div><!-- .page-hero__content -->
</section><!-- page-hero -->
