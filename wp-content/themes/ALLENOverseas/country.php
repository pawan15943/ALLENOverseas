<?php
/*
 * Template Name: Country
 * description: Main pAge
 */

get_header();
$getCountryname = str_replace(' ', '-', strtolower(get_the_title()));
?>
<!-- Slider Section -->
<section class="bg-dark slider-section">
    <div class="owl-carousel owl-theme" id="homeSlider">
        <?php
        $website_slides = carbon_get_theme_option('website_slides');
        foreach ($website_slides as $slide) {
            if (
                $getCountryname == 'bahrain' && $slide['bahrain'] == 'yes' ||
                $getCountryname == 'kuwait' && $slide['kuwait'] == 'yes' ||
                $getCountryname == 'oman' && $slide['oman'] == 'yes' ||
                $getCountryname == 'saudi-arabia' && $slide['saudi-arabia'] == 'yes' ||
                $getCountryname == 'qatar' && $slide['qatar'] == 'yes' ||
                $getCountryname == 'uae' && $slide['uae'] == 'yes'
            ) :
                $today = date("Y-m-d");
                if ($slide['start_date'] <= $today && $slide['end_date'] >= $today  || $slide['always_on'] == 'yes') :
        ?>
                    <?php if ($slide['desktop-image']  && !empty($slide['desktop-image']) && !wp_is_mobile()) { ?>
                        <div class="item">
                            <a href="<?php echo $slide['link'];
                                        if ($slide['utm_source']) : echo "?" . $slide['utm_source'];
                                        else :
                                            echo "";
                                        endif; ?>" target="<?php if ($slide['target-blank'] == 'yes') : echo "_blank";
                                                        else : echo "";
                                                        endif; ?>">
                                <picture>
                                    <!-- Desktop -->
                                    <img src="<?php echo $slide['desktop-image']; ?>" alt="<?php echo $slide['alt-name']; ?>">

                                </picture>
                            </a>
                        </div>
                    <?php }
                    if (isset($slide['mobile-image']) && !empty($slide['mobile-image']) && wp_is_mobile()) { ?>
                        <div class="item">
                            <a href="<?php echo $slide['link'];
                                        if ($slide['utm_source']) : echo "?" . $slide['utm_source'];
                                        else :
                                            echo "";
                                        endif; ?>" target="<?php if ($slide['target-blank'] == 'yes') : echo "_blank";
                                                            else : echo "";
                                                            endif; ?>">
                                <picture>
                                    <!-- Mobile -->
                                    <img src="<?php echo $slide['mobile-image']; ?>" alt="<?php echo $slide['alt-name']; ?>">
                                </picture>
                            </a>
                        </div>
                    <?php } ?>
        <?php endif;
            else :
                echo "";
            endif;
        }
        ?>
    </div>
</section>




<?php get_footer(); ?>