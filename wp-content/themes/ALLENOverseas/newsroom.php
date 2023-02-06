<?php
/*
 * Template Name: Newsroom
 * description: All News are listed Here
 */
get_header();
?>

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

<section class="newsroom py-5">
    <div class="container">
        <div class="row g-4">
            <?php
            $args = array(
                'post_type' => 'newsroom',
                'order'    => 'ASC'
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) :
                while ($the_query->have_posts()) :
                    $the_query->the_post();
            ?>
                <div class="col-lg-4">
                    <a  href="<?php the_permalink(); ?>" target="_blank">
                        <div class="newsroomBox">
                            <div class="img-wraper">
                                <?php the_post_thumbnail('wp-post-image', array('class' => 'img-fluid')); ?>
                            </div>
                            <div class="content">
                                <h4><?php the_title(); ?></h4>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endwhile;
                wp_reset_postdata();
            else :
            endif;
            ?>

        </div>
    </div>
    </div>
</section>

<?php
get_footer();
