<?php
/*
Template Name: Newsroom Pages
Template Post Type: newsroom
*/
get_header();
?>
<!-- Inner Page Header -->
<section class="inner-page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title text-center">
                    <h1>Overseas News</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
/* Start the Loop */
while (have_posts()) :
    the_post(); ?>
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="news-details-box">
                        <?php the_post_thumbnail('wp-post-image', array('class' => 'img-fluid')); ?>
                        <h1><?php the_title(); ?></h1>
                        <div class="news-content">
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
// If comments are open or there is at least one comment, load up the comment template.
// if (comments_open() || get_comments_number()) {
//     comments_template();
// }
endwhile; // End of the loop.
?>

<?php
get_footer();
?>