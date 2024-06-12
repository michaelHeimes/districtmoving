<?php
/**
 * Template part for displaying post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package districtmoving
 */

?>

<?php
	$argsPost = array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'numberposts' => -1,
		'posts_per_page' => -1,
		'order' => 'ASC'
	);

	$postsPost = query_posts($argsPost);
?>
<?php
	$imageBgNews = get_field('background_image_section_blog');
	$primaryTitleNews = get_field('title_section_blog');
?>
<section class="section-news">
	<div class="bg-cover-img"></div>
	<div class="container">

		<div class="row">
			<div class="col-lg-3">
				<div class="section-news__left">
					<h2 class="section-news__title">Tips For Your Next Move</h2>
				</div>
			</div>
			<div class="col-lg-9">
				<?php if(count($postsPost)): ?>
					<div class="row news">

					<?php $post = $postsPost[count($postsPost) - 1]; ?>
					<?php array_pop($postsPost); ?>
					<?php
						$postTitle = get_post_field('post_title',$post->ID);
						$postShortDesc = get_post_meta($post->ID, 'short_description_post', true);
					?>
					<div class="col-lg-4 col-md-6">
						<article class="new-article">
							<section class="new-article__section">
								<h4 class="new-article__title"><?php echo $postTitle ?></h4>
								<p class="new-article__info"><?php echo $postShortDesc ?></p>
								<a href="/press/covid-19" class="btn-link"> Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
							</section>
						</article>
					</div>

					<?php 
					array_pop($postsPost);
					?>

					<?php $i = 0; foreach($postsPost as $post): $i++; ?>

						<?php
							$postTitle = get_post_field('post_title',$post->ID);
							$postShortDesc = get_post_meta($post->ID, 'short_description_post', true);
						?>

						<div class="col-lg-4 col-md-6">
							<article class="new-article">
								<section class="new-article__section">
									<h4 class="new-article__title"><?php echo $postTitle ?></h4>
									<p class="new-article__info"><?php echo $postShortDesc ?></p>
									<a href="<?php the_permalink($post->ID); ?>" class="btn-link"> Learn More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
								</section>
							</article>
						</div>

					<?php endforeach; ?>
						
					</div>
					<?php wp_reset_query(); ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="row">
		<div class="tips-section-button">
			<a class="hp-more-articles btn btn-primary" tabindex="-1" href="/press"> More articles <i class="icon-triagle-right"></i></a>
		</div>
		</div>
	
	</div>
</section>
