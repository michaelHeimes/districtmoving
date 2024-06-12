<?php

/**
 * Template name: About Page
 * The front page template file
 *
 * @package WordPress
 * @subpackage DistricMoving
 * @since 1.0
 * @version 1.0
 */
get_header(); ?>

<section class="blog-primary-hero pro-primary-hero">

    <div style="background: radial-gradient(ellipse at center,rgba(0,0,0,.30) 0,transparent 100%),url('https://www.districtmoving.com/wp-content/uploads/2023/08/Rectangle-1.png') no-repeat center/cover;height: 640px;">

        <div class="container">

            <div class="hero-blog__info wow fadeInLeft " style="position: relative; padding-top: 250px; color: #fff;z-index: 3;">
                <p>
                    <h1>
                        <strong><?php the_field('title') ?></strong>
                    </h1>
                    <h3>
                        <?php the_field('intro') ?>
                    </h3>
                </p>


            </div>

        </div>

    </div>
</section>
<div class="blog-posts">
    <div class="container">
        <h2 class="blog-section-title">
            Lastest Blog Posts
        </h2>

        <?php $args = array(
    'post_type'      => 'post',
    'posts_per_page' => 10,
);
$blog_query = new WP_Query($args);
if ($blog_query->have_posts()) :
    ?>
    <div class="blog-listing">
        <ul class="blog-styling">
            <?php
            while ($blog_query->have_posts()) :
                $blog_query->the_post();
                ?>
                <li class="single-blog-post">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-full">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
                        </div>
                    <?php endif; ?>
                    <div class="post-meta">
                        <span class="post-date"><?php the_date(); ?></span>
                        <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    </div>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>
    <?php
    wp_reset_postdata();
else :
    echo 'No posts found.';
endif;
?>
    </div>
</div>
<?php


get_footer();
