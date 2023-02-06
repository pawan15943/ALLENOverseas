<?php
/*
Template Name: Gallery Inner Pages
Template Post Type: gallery
*/
get_header();
?>
<!-- Inner Page Header -->
<section class="inner-page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title text-center">
                    <h1>
                        <?php the_title(); ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container">
        <?php if (carbon_get_the_post_meta('enable_gallery_images_1') == 'yes') { ?>
            <h4 class="py-4 text-center"><?php echo carbon_get_the_post_meta('gallery_title'); ?></h4>
            <div class="row g-4">
                <?php
                $galleryImage = carbon_get_the_post_meta('gallery_images');
                foreach ($galleryImage as $galleryImages) {
                    ?>
                    <div class="col-lg-4">
                        <div class="gallery-image-box" data-aos="fade-up" data-aos-duration="500">
                            <a href="<?php echo $galleryImages['gallery_image']; ?>" data-fancybox="gallery"
                                data-caption="<?php echo $galleryImages['gallery_image_alt']; ?>">
                                <div class="img-box">
                                    <img src="<?php echo $galleryImages['gallery_image']; ?>"
                                        alt="<?php echo $galleryImages['gallery_image_alt']; ?>" class="img-fluid">
                                </div>
                                <i class="fa fa-plus-circle"></i>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } else {
        } ?>

        <div class="row justify-content-center">

            <?php if (carbon_get_the_post_meta('enable_gallery_video_2') == 'yes') { ?>
                <h4 class="py-4 text-center"><?php echo carbon_get_the_post_meta('gallery_title'); ?></h4>
                <?php
                $gallery_video = carbon_get_the_post_meta('gallery_videos');
                foreach ($gallery_video as $gallery_videos) {
                    ?>
                    <div class="col-lg-4">
                        <div class="video-box" data-aos="fade-up" data-aos-duration="<?php echo $y = $x * 400 ?>">
                            <img src="<?php echo $gallery_videos['gallery_video_thumb']; ?>"
                                alt="<?php echo $gallery_videos['gallery_video_alt']; ?>" class="img-fluid">
                            <div class="video-icon">
                                <div class="video-main">
                                    <div class="promo-video">
                                        <div class="waves-block">
                                            <div class="waves wave-1"></div>
                                            <div class="waves wave-2"></div>
                                            <div class="waves wave-3"></div>
                                        </div>
                                    </div>
                                    <a href="<?php echo $gallery_videos['gallery_video_link']; ?>"
                                        class="video video-popup mfp-iframe" data-lity><i class="fa fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            <?php } else {
            } ?>

        </div>


    </div>
</section>
<?php
get_footer();
?>
<script>
    $('[data-fancybox="gallery"]').fancybox({
        buttons: [
            "slideShow",
            "thumbs",
            "zoom",
            "fullScreen",
            "share",
            "close"
        ],
        loop: false,
        protect: true
    });

</script>