<!-- Scroll to Top Button-->

<div class="section-fixed-0 bounce2" onclick="scrollToTop()" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Tooltip on right">
    <p class="showdiv"><i class="las la-angle-up"></i></p>
</div>

<!-- Support Field Button-->

<div class="section-fixed">
    <p class="showdiv" id="btntnt"><i class="las la-headset" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Tooltip on right"></i> <span id="text">Our Support</span></p>
</div>

<!-- Support Field Content-->
<div class="contact-info-form" id="formsdas">
    <div class="head">
        Support Corner
    </div>
    <div class="content">
        <ul>
            <li>
                <span><i class="las la-phone"></i> Call Us :</span>
                <p><a href="tel:+91-8114479678"> +91-8114479678</a></p>
            </li>
            <li>
                <span><i class="las la-envelope"></i> Mail Us :</span>
                <p><a href="mailto:info@allenoverseas.com"> info@allenoverseas.com</a></p>
            </li>
            <li>
                <span><i class="las la-headset"></i> Request a Call</span>
                <p><a data-bs-toggle="modal" data-bs-target="#ApplyNowPopup">Click Here</a></p>
            </li>
        </ul>
    </div>
</div>


<!-- Footer -->
<footer>
    <div class="container d-none d-md-block">
        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="200">
                <h6><?php echo carbon_get_theme_option('label_ft_menu_1'); ?></h6>
                <ul>
                    <?php
                    $blog_args = array(
                        'post_type' => 'page',
                        'order' => 'asc',
                        'cat' => 5,
                    );

                    $blog_posts = new WP_Query($blog_args);
                    if ($blog_posts->have_posts()) : while ($blog_posts->have_posts()) : $blog_posts->the_post(); ?>
                            <li><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></li>
                        <?php endwhile;
                        wp_reset_postdata();
                    else : ?>
                        <p>Sorry</p>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="300">
                <h6><?php echo carbon_get_theme_option('label_ft_menu_2'); ?></h6>
                <ul>
                    <?php
                    $blog_args = array(
                        'post_type' => 'page',
                        'order' => 'asc',
                        'cat' => 7,
                    );

                    $blog_posts = new WP_Query($blog_args);
                    if ($blog_posts->have_posts()) : while ($blog_posts->have_posts()) : $blog_posts->the_post(); ?>
                            <li><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></li>
                        <?php endwhile;
                        wp_reset_postdata();
                    else : ?>
                        <p>Sorry</p>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="400">
                <h6><?php echo carbon_get_theme_option('label_ft_menu_3'); ?></h6>
                <ul>
                    <?php
                    $blog_args = array(
                        'post_type' => 'page',
                        'orderby' => 'title',
                        'order' => 'asc',
                        'cat' => 4,
                    );

                    $blog_posts = new WP_Query($blog_args);
                    if ($blog_posts->have_posts()) : while ($blog_posts->have_posts()) : $blog_posts->the_post(); ?>
                            <li><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></li>
                        <?php endwhile;
                        wp_reset_postdata();
                    else : ?>
                        <p>Sorry</p>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="500">
                <h6><?php echo carbon_get_theme_option('label_ft_menu_4'); ?></h6>
                <ul>
                    <?php
                    $addressfoot = carbon_get_theme_option('footer_address');
                    foreach ($addressfoot as $addressesfoot) {
                    ?>
                        <li>
                            <div class="d-flex">
                                <div class="icon"><i class="fa-solid fa-location-dot me-2"></i></div>
                                <div class="content">
                                    <b class="mb-1"><?php echo $addressesfoot['address_title'] ?></b>
                                    <p class="mb-1"><?php echo $addressesfoot['address_description'] ?></p>
                                </div>
                            </div>
                        </li>
                    <?php } ?>
                    <li><a href="mailto:<?php echo carbon_get_theme_option('footer_email'); ?>"><i class="fa fa-envelope me-2"></i> <?php echo carbon_get_theme_option('footer_email'); ?></a></li>
                    <li><a href="tel:<?php echo carbon_get_theme_option('footer_phone'); ?>"><i class="fa-solid fa-phone me-2"></i> <?php echo carbon_get_theme_option('footer_phone'); ?></a></li>
                </ul>
            </div>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="500">
                <h6><?php echo carbon_get_theme_option('label_ft_menu_5'); ?></h6>
                <ul class="social">
                    <?php
                    $social = carbon_get_theme_option('social_menu');
                    foreach ($social as $socials) {
                    ?>
                        <li><a href="<?php echo $socials['icon_link'] ?>" target="<?php if ($socials['icon_target'] == 'yes') : echo "_blank";
                                                                                    else : echo "";
                                                                                    endif; ?>"><i class="<?php echo $socials['icon_class'] ?>"></i></a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="600">
                <h6><?php echo carbon_get_theme_option('label_ft_menu_6'); ?></h6>
                <ul class="social">
                    <?php
                    $app = carbon_get_theme_option('app_links');
                    foreach ($app as $apps) {
                    ?>
                        <li><a href="<?php echo $apps['app_link'] ?>" target="_blank"><img src="<?php echo $apps['app_image'] ?>" alt="<?php echo $apps['app_alt'] ?>"></a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-lg-6">
                <h6><?php echo carbon_get_theme_option('label_ft_menu_7'); ?></h6>
                <ul class="social">
                    <?php
                    $payment = carbon_get_theme_option('payment_partners');
                    foreach ($payment as $payments) {
                    ?>
                        <li><a href="<?php echo $payments['pp_link'] ?>" target="_blank"><img src="<?php echo $payments['pp_image'] ?>" alt="<?php echo $payments['pp_alt'] ?>"></a></li>
                    <?php } ?>
                </ul>
            </div>
            
        </div>
    </div>
    <div class="container d-block d-md-none">
        <div class="row">
            <div class="col-lg-12">

                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-01" aria-expanded="false" aria-controls="flush-collapseThree">
                                <?php echo carbon_get_theme_option('label_ft_menu_4'); ?>
                            </button>
                        </h2>
                        <div id="flush-01" class="accordion-collapse collapse show" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul>
                                    <?php
                                    $addressfoot = carbon_get_theme_option('footer_address');
                                    foreach ($addressfoot as $addressesfoot) {
                                    ?>
                                        <li>
                                            <div class="d-flex">
                                                <div class="icon"><i class="fa-solid fa-location-dot me-2"></i></div>
                                                <div class="content">
                                                    <b class="mb-1"><?php echo $addressesfoot['address_title'] ?></b>
                                                    <p class="mb-1"><?php echo $addressesfoot['address_description'] ?></p>
                                                </div>
                                            </div>
                                        </li>
                                    <?php } ?>
                                    <li><a href="mailto:<?php echo carbon_get_theme_option('footer_email'); ?>"><i class="fa fa-envelope me-2"></i> <?php echo carbon_get_theme_option('footer_email'); ?></a></li>
                                    <li><a href="tel:<?php echo carbon_get_theme_option('footer_phone'); ?>"><i class="fa-solid fa-phone me-2"></i> <?php echo carbon_get_theme_option('footer_phone'); ?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-02" aria-expanded="false" aria-controls="flush-collapseOne">
                                <?php echo carbon_get_theme_option('label_ft_menu_1'); ?>
                            </button>
                        </h2>
                        <div id="flush-02" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul>
                                    <?php
                                    $blog_args = array(
                                        'post_type' => 'page',
                                        'order' => 'asc',
                                        'cat' => 5,
                                    );

                                    $blog_posts = new WP_Query($blog_args);
                                    if ($blog_posts->have_posts()) : while ($blog_posts->have_posts()) : $blog_posts->the_post(); ?>
                                            <li><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></li>
                                        <?php endwhile;
                                        wp_reset_postdata();
                                    else : ?>
                                        <p>Sorry</p>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-03" aria-expanded="false" aria-controls="flush-collapseTwo">
                                <?php echo carbon_get_theme_option('label_ft_menu_2'); ?>
                            </button>
                        </h2>
                        <div id="flush-03" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul>
                                    <?php
                                    $blog_args = array(
                                        'post_type' => 'page',
                                        'order' => 'asc',
                                        'cat' => 7,
                                    );

                                    $blog_posts = new WP_Query($blog_args);
                                    if ($blog_posts->have_posts()) : while ($blog_posts->have_posts()) : $blog_posts->the_post(); ?>
                                            <li><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></li>
                                        <?php endwhile;
                                        wp_reset_postdata();
                                    else : ?>
                                        <p>Sorry</p>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-04" aria-expanded="false" aria-controls="flush-collapseThree">
                                <?php echo carbon_get_theme_option('label_ft_menu_3'); ?>
                            </button>
                        </h2>
                        <div id="flush-04" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul>
                                    <?php
                                    $blog_args = array(
                                        'post_type' => 'page',
                                        'orderby' => 'title',
                                        'order' => 'asc',
                                        'cat' => 4,
                                    );

                                    $blog_posts = new WP_Query($blog_args);
                                    if ($blog_posts->have_posts()) : while ($blog_posts->have_posts()) : $blog_posts->the_post(); ?>
                                            <li><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></li>
                                        <?php endwhile;
                                        wp_reset_postdata();
                                    else : ?>
                                        <p>Sorry</p>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <h6 class="mt-3 text-center"><?php echo carbon_get_theme_option('label_ft_menu_5'); ?></h6>
                <ul class="social text-center mb-4">
                    <?php
                    $social = carbon_get_theme_option('social_menu');
                    foreach ($social as $socials) {
                    ?>
                        <li><a href="<?php echo $socials['icon_link'] ?>" target="<?php if ($socials['icon_target'] == 'yes') : echo "_blank";
                                                                                    else : echo "";
                                                                                    endif; ?>"><i class="<?php echo $socials['icon_class'] ?>"></i></a></li>
                    <?php } ?>
                </ul>
                <h6 class="mt-3 text-center"><?php echo carbon_get_theme_option('label_ft_menu_6'); ?></h6>
                <ul class="social text-center mb-4">
                    <?php
                    $app = carbon_get_theme_option('app_links');
                    foreach ($app as $apps) {
                    ?>
                        <li><a href="<?php echo $apps['app_link'] ?>" target="_blank"><img src="<?php echo $apps['app_image'] ?>" alt="<?php echo $apps['app_alt'] ?>"></a></li>
                    <?php } ?>
                </ul>

                <h6 class="mt-3 text-center"><?php echo carbon_get_theme_option('label_ft_menu_7'); ?></h6>
                <ul class="social text-center mb-4">
                    <?php
                    $payment = carbon_get_theme_option('payment_partners');
                    foreach ($payment as $payments) {
                    ?>
                        <li><a href="<?php echo $payments['pp_link'] ?>" target="_blank"><img src="<?php echo $payments['pp_image'] ?>" alt="<?php echo $payments['pp_alt'] ?>"></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</footer>

<section class="py-2 bg-black">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <p class="m-0 text-white text-lg-start text-center"><?php echo carbon_get_theme_option('footer_copyright'); ?></p>
            </div>
            <div class="col-lg-6 text-lg-end text-center">
                <p class="m-0 text-white">
                    <?php

                    $blog_args = array(
                        'post_type' => 'page',
                        'order' => 'asc',
                        'cat' => 6,
                    );

                    $blog_posts = new WP_Query($blog_args);
                    $x = 0;
                    if ($blog_posts->have_posts()) : while ($blog_posts->have_posts()) : $blog_posts->the_post(); ?>
                            <a href="<?php the_permalink(); ?>"> <?php if ($x == 0) : echo "";
                                                                    else : echo " | ";
                                                                    endif;
                                                                    the_title();
                                                                    $x++; ?> </a>
                        <?php endwhile;
                        wp_reset_postdata();

                    else : ?>
                <p>Sorry</p>
            <?php endif; ?>
            </p>
            </div>
        </div>
    </div>
</section>

<!-- Scripts -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/allen-overseas.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/main.js"></script>
<?php wp_footer(); ?>

</body>

</html>