<?php
/*
 * Template Name: Gallery Events
 * description: All Gallery elements are listed here in desc manner.
 */
get_header();
?>
<!-- Inner Page Header -->
<section class="inner-page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title text-center">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Events Slider -->
<?php if (carbon_get_the_post_meta('enable_gallery_sec_1') == 'yes') { ?>
    <section class="eventsSlider gallery-page bg-white">
        <div class="conatiner">
            <div class="text-center mb-5">
                <h2 class="text-center"><?php echo carbon_get_the_post_meta('gallery_sec_1_title'); ?></h2>
                <p class="m-auto m-0"><?php echo carbon_get_the_post_meta('gallery_sec_1_description'); ?></p>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <article id="demo-carousel" class="demo">
                        <div id="carousel">
                            <ul class="flip-items">
                                <?php
                                $args = array(
                                    'post_type' => 'gallery',
                                    'areas'    => 'painting',
                                    'order'    => 'ASC'
                                );
                                $the_query = new WP_Query($args);
                                if ($the_query->have_posts()) :
                                    while ($the_query->have_posts()) :
                                        $the_query->the_post();
                                ?>
                                        <li>
                                            <div class="position-relative text-center">
                                                <a href="<?php the_permalink(); ?>" target="_blank">
                                                    <?php the_post_thumbnail('wp-post-image', array('class' => 'img-fluid')); ?>
                                                    <h4 class="events-text py-3"><?php the_title(); ?></h4>
                                                </a>
                                            </div>
                                        </li>
                                <?php endwhile;
                                    wp_reset_postdata();
                                else :
                                endif;
                                ?>
                            </ul>
                        </div>

                    </article>

                </div>
            </div>
        </div>
    </section>
<?php } else {
}
?>



<?php
get_footer();
?>