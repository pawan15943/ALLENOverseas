<?php
/*
 * Template Name: Home
 * description: Main pAge
 */

get_header();
$getCountryname = str_replace(' ', '-', strtolower(get_the_title()));
?>

<!-- Website Popup -->
<div class="modal fade" id="enquiryPopup1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
	aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content overflow-hidden">
			<div class="modal-body p-0">
				<div class="d-flex">
					<div class="col-5 bg-light">
						<img src="images/student.jpg" alt="student" class="img-fluid">
					</div>
					<div class="col-7 position-relative">
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						<form action="">
							<div class="form-box p-4">
								<div class="row">
									<h4>Fill the form</h4>
									<div class="col-lg-12 mb-3">
										<div class="form-floating">
											<select class="form-control form-select" name="state">
												<option value="1">Bahrain</option>
												<option value="2">Kuwait</option>
												<option value="3">Oman</option>
												<option value="3">Qatar</option>
												<option value="3">Saudi Arabia</option>
												<option value="3">UAE</option>
											</select>
											<label for="floatingSelect">Select Country</label>
										</div>
									</div>
									<div class="col-lg-12 mb-3">
										<div class="form-floating">
											<input type="email" class="form-control" id="floatingInput"
												placeholder="name@example.com">
											<label for="floatingInput">Email Address</label>
										</div>
									</div>
									<div class="col-lg-12 mb-3">
										<div class="form-floating">
											<select class="form-control form-select" name="state">
												<option value="AL">V</option>
												<option value="WY">VII</option>
												<option value="WY">VIII</option>
											</select>
											<label for="floatingSelect">Class</label>
										</div>
									</div>

									<div class="col-lg-4 mb-3">
										<div class="form-floating">
											<select class="form-control form-select" name="state">
												<option value="AL">+91 (IND)</option>
												<option value="WY">+971 (UAE)</option>
											</select>
											<label for="floatingSelect">Select your
												Nationality</label>
										</div>
									</div>
									<div class="col-lg-8 mb-3">
										<div class="form-floating">
											<input type="number" class="form-control" id="floatingInput"
												placeholder="name@example.com">
											<label for="floatingInput">Mobile Number</label>
										</div>
									</div>

									<div class="col-lg-12 mb-3">
										<div class="form-floating">
											<textarea class="form-control" placeholder="Leave a comment here"
												id="floatingTextarea2" style="height: 100px"></textarea>
											<label for="floatingTextarea2">Comments</label>
										</div>
									</div>
									<div class="col-lg-12">
										<button type="button" class="btn btn-primary btn-lg">Submit</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="enquiryPopup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
	aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-md">
		<div class="modal-content overflow-hidden">
			<div class="modal-body p-0">
				<a href="">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tx_popup.jpg" alt="popup"
						class="img-fluid">
				</a>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="ApplyNowPopup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
	aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-md">
		<div class="modal-content overflow-hidden">
			<div class="modal-body login__popup tx-model text-center">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				<img src="https://d3594pyssyqeez.cloudfront.net/wp-content/uploads/sites/14/2022/08/01-2.png"
					alt="test">
				<h4 class="mb-4">Where do you want to Login?</h4>
				<div class="div login__btns">
					<a href="https://www.allenoverseas.com/ccp20222023/login/" class="btn btn-default btn-sm"
						target="_blank">Classroom 2022</a>
					<a href="https://www.allenoverseas.com/ccp202324/login" class="btn btn-default btn-sm"
						target="_blank">Tallentex Result (CCP 2023)</a>

				</div>

			</div>
		</div>
	</div>
</div>

<section class="bg-dark slider-section">
	<div class="owl-carousel owl-theme" id="homeSlider">
		<?php
		$website_slides = carbon_get_theme_option('website_slides');
		foreach ($website_slides as $slide) {
			if ($getCountryname == 'home' && $slide['home'] == 'yes'):
				$today = date("Y-m-d");
				if ($slide['start_date'] <= $today && $slide['end_date'] >= $today || $slide['always_on'] == 'yes'):
					?>
					<?php if ($slide['desktop-image'] && !empty($slide['desktop-image']) && !wp_is_mobile()) { ?>
						<div class="item">
							<a href="<?php echo $slide['link'];
							if ($slide['utm_source']):
								echo "?" . $slide['utm_source'];
							else:
								echo "";
							endif; ?>" target="<?php if ($slide['target-blank'] == 'yes'):
								 echo "_blank";
							 else:
								 echo "";
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
							if ($slide['utm_source']):
								echo "?" . $slide['utm_source'];
							else:
								echo "";
							endif; ?>" target="<?php if ($slide['target-blank'] == 'yes'):
								 echo "_blank";
							 else:
								 echo "";
							 endif; ?>">
								<picture>
									<!-- Mobile -->
									<img src="<?php echo $slide['mobile-image']; ?>" alt="<?php echo $slide['alt-name']; ?>">
								</picture>
							</a>
						</div>
					<?php } ?>

				<?php endif;
			else:
				echo "";
			endif;
		}
		?>
	</div>
</section>

<!-- Find Course & Advantage Section -->
<section class="find-your-course py-5">
	<div class="container">
		<h4 class="text-center mb-3" data-aos="fade-up" data-aos-duration="500">FIND YOUR COURSES</h4>
		<div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1000">
			<div class="col-lg-10">
				<div class="find-course p-2">
					<div class="row g-3">
						<div class="col-lg-3 col-md-6">
							<select name="Country" id="Country" class="form-control form-select">
								<option value="">Select Country</option>
								<option value="1">Bahrain</option>
								<option value="2">Kuwait</option>
								<option value="3">Oman</option>
								<option value="3">Qatar</option>
								<option value="3">Saudi Arabia</option>
								<option value="3">UAE</option>
							</select>
						</div>
						<div class="col-lg-3 col-md-6">
							<select name="center" id="center" class="form-control form-select">
								<option value="">Select Center</option>
							</select>
						</div>
						<div class="col-lg-3 col-md-6">
							<select name="class" id="class" class="form-control form-select">
								<option value="">Select Class</option>
							</select>
						</div>
						<div class="col-lg-3 col-md-6">
							<select name="course" id="course" class="form-control form-select">
								<option value="">Select Course</option>
							</select>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-lg-12 text-center">
							<button class="btn btn-primary mt-3"><i class="las la-search"></i> Search</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php if (carbon_get_the_post_meta('enable_sec_1') == 'yes') { ?>
		<div class="container">
			<div class="row" data-aos="fade-up" data-aos-duration="1200">
				<div class="col-lg-12">
					<div class="advantage-box-wrapper">
						<div class="text-center">
							<h2><?php echo carbon_get_the_post_meta('advantge_title'); ?></h2>
							<p>
								<?php echo carbon_get_the_post_meta('advantge_description'); ?>
							</p>
						</div>
						<div class="row g-4 g-md-5">
							<?php
							$advantage = carbon_get_the_post_meta('inner_text');
							$x = 0;
							foreach ($advantage as $advantages) {
								?>
								<div class="col-lg-4 col-md-6">
									<div class="advantage-box" data-aos="fade-up"
										data-aos-duration="<?php echo $y = $x * 300 ?>">
										<img src="<?php echo $advantages['advantage_image']; ?>"
											alt="<?php echo $advantages['advantage_alt']; ?>">
										<h4>
											<?php echo $advantages['advantage_inner_title']; ?>
										</h4>
										<span>
											<?php echo $advantages['advantage_description']; ?>
										</span>
									</div>
									<?php if ($x < 3): ?>
										<div class="bdr-btm"></div>
									<?php endif; ?>
								</div>
								<?php $x++;
							} ?>
						</div>

					</div>
				</div>
			</div>
		</div>
	<?php } else {
	} ?>

</section>


<!-- Our Achivements -->
<?php if (carbon_get_the_post_meta('enable_sec_2') == 'yes') { ?>
	<section class="our-achivement">
		<div class="container">
			<h2 class="text-center mb-4">
				<?php echo carbon_get_theme_option('achivement_title'); ?>
			</h2>
			<div class="row g-4 justify-content-center">
				<?php
				$x = 0;
				$achivement = carbon_get_the_post_meta('sec_2_content');
				foreach ($achivement as $achivement) { ?>
					<div class="col-lg-3 col-6" data-aos="fade-up" data-aos-duration="<?php echo $y = $x * 300 ?>">
						<img src="<?php echo $achivement['achivement_image']; ?>"
							alt="<?php echo $achivement['achivement_alt']; ?>" class="achivement-icon">
						<h2 class="counter" data-target="<?php echo $achivement['achivement_count']; ?>">
							<?php echo $achivement['achivement_count']; ?>
						</h2>
						<span>
							<?php echo $achivement['achivement_description']; ?>
						</span>
					</div>
					<?php $x++;
				} ?>
			</div>
		</div>
	</section>
<?php } else {
} ?>

<!-- Our Top Rankers -->
<?php if (carbon_get_the_post_meta('enable_sec_3') == 'yes') { ?>

	<section class="top-rankers">
		<div class="container">
			<div class="text-center">
				<h2>
					<?php echo carbon_get_theme_option('our_top_rankers_title'); ?>
				</h2>
				<p><?php echo carbon_get_theme_option('our_top_rankers_description'); ?></p>
			</div>
			<div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1000">
				<div class="col-lg-10">
					<div class="owl-carousel owl-theme" id="topRankers">
						<?php
						$top_ranker = carbon_get_the_post_meta('sec_3_content');
						$x = 0;
						foreach ($top_ranker as $top_rankers) {
							?>
							<div class="item">
								<div class="top-ranker-box">
									<div class="img-box mt-3">
										<?php if ($x % 2 == 0): ?>
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/top-ranker/air-green.png"
												alt="rank" class="rank img-fluid">
										<?php else: ?>
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/top-ranker/air-blue.png"
												alt="rank" class="rank img-fluid">
										<?php endif; ?>
										<img src="<?php echo $top_rankers['our_top_rankers_st_image']; ?>"
											alt="<?php echo $top_rankers['our_top_rankers_alt']; ?>" class="student img-fluid">
									</div>
									<h4 class="mt-4">
										<?php echo $top_rankers['our_top_rankers_st_name']; ?>
									</h4>
									<p class="p-0"><?php echo $top_rankers['our_top_rankers_exam']; ?></p>
								</div>
							</div>
							<?php $x++;
						} ?>

					</div>
				</div>
			</div>
		</div>
	</section>
<?php } else {
} ?>

<!-- Glance Session -->
<?php if (carbon_get_the_post_meta('enable_sec_4') == 'yes') { ?>
	<section class="py-5 glance-session">
		<div class="container">
			<h2 class="mb-4 text-center">
				<?php echo carbon_get_the_post_meta('glance_session_title'); ?>
			</h2>
			<div class="row g-4 justify-content-center">
				<?php
				$x = 0;
				$glanceSession = carbon_get_the_post_meta('sec_4_content');
				foreach ($glanceSession as $glanceSessions) {
					?>
					<div class="col-lg-4 col-md-8">
						<div class="video-box" data-aos="fade-up" data-aos-duration="<?php echo $y = $x * 400 ?>">
							<img src="<?php echo $glanceSessions['glance_session_thumb']; ?>"
								alt="<?php echo $glanceSessions['glance_session_alt']; ?>" class="img-fluid">
							<div class="video-icon">
								<div class="video-main">
									<div class="promo-video">
										<div class="waves-block">
											<div class="waves wave-1"></div>
											<div class="waves wave-2"></div>
											<div class="waves wave-3"></div>
										</div>
									</div>
									<a href="<?php echo $glanceSessions['glance_session_link']; ?>"
										class="video video-popup mfp-iframe" data-lity><i class="fa fa-play"></i></a>
								</div>

							</div>
						</div>
					</div>
					<?php $x++;
				} ?>


			</div>
		</div>
	</section>
<?php } else {
} ?>

<!-- Talk Shows & Webinars -->
<?php if (carbon_get_the_post_meta('enable_sec_5') == 'yes') { ?>
	<section class="talkshows">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="owl-carousel owl-theme" id="toppersTalks">
						<?php
						$talkShow = carbon_get_the_post_meta('sec_5_content');
						foreach ($talkShow as $talkShows) {
							?>
							<div class="item">
								<div class="talk-show-box">
									<div class="talk-show-title">

										<div class="left">
											<h2><?php echo $talkShows['toppes_talk_title']; ?></h2>
											<p class="m-0">
												<?php echo $talkShows['toppes_talk_des']; ?>
											</p>
										</div>
										<div class="right">
											<div class="video-box d-none d-md-block">
												<img src="<?php echo $talkShows['toppes_talk_thumb']; ?>"
													alt="<?php echo $talkShows['toppes_talk_alt']; ?>" class="img-fluid">
												<div class="video-icon">
													<div class="video-main">
														<div class="promo-video">
															<div class="waves-block">
																<div class="waves wave-1"></div>
																<div class="waves wave-2"></div>
																<div class="waves wave-3"></div>
															</div>
														</div>
														<a href="<?php echo $talkShows['toppes_talk_link']; ?>"
															class="video video-popup mfp-iframe" data-lity><i
																class="fa fa-play"></i></a>
													</div>

												</div>
											</div>
										</div>

									</div>
								</div>
								<p class="talk-show-content">
									<?php echo $talkShows['toppes_talk_description']; ?>
								</p>
								<a href="<?php echo $talkShows['toppes_talk_link']; ?>" class="btn btn-primary d-md-none p-2"
									data-lity><i class="fab fa-youtube"></i> Watch Video </a>

							</div>
						<?php } ?>
					</div>



				</div>
			</div>
		</div>
	</section>
<?php } else {
} ?>

<!-- Events Slider -->
<?php if (carbon_get_the_post_meta('enable_sec_6') == 'yes') { ?>
	<section class="eventsSlider">
		<div class="conatiner">
			<h2 class="text-center mb-5">
				<?php echo carbon_get_the_post_meta('s_6_title'); ?>
			</h2>
			<div class="row">
				<div class="col-lg-12">
					<article id="demo-carousel" class="demo">
						<div id="carousel">
							<ul class="flip-items">

								<?php

								$args = array(
									'post_type' => 'gallery',
									'areas' => 'painting',
									'order' => 'ASC'
								);

								$the_query = new WP_Query($args);
								if ($the_query->have_posts()):
									while ($the_query->have_posts()):
										$the_query->the_post();
										?>
										<li>
											<div class="position-relative text-center">
												<a href="<?php the_permalink(); ?>" target="_blank">
													<?php the_post_thumbnail('wp-post-image', array('class' => 'img-fluid')); ?>
													<h4 class="events-text py-3">
														<?php the_title(); ?>
													</h4>
												</a>
											</div>
										</li>
									<?php endwhile;
									wp_reset_postdata();
								else:
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

<!-- Our Centers -->
<?php if (carbon_get_the_post_meta('enable_sec_7') == 'yes') { ?>
	<section class="our-centers">
		<div class="container">
			<div class="text-center mb-4">
				<h2>
					<?php echo carbon_get_the_post_meta('s_7_title'); ?>
				</h2>
				<p><?php echo carbon_get_the_post_meta('s_7_description'); ?></p>
				<?php echo carbon_get_the_post_meta('country_thumb'); ?>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<p class="mb-4 text-center">
						<?php echo carbon_get_the_post_meta('centers_description'); ?>
					</p>
					<div class="owl-carousel owl-theme" id="ourCenters" data-aos="fade-up" data-aos-duration="1000">
						<?php
						$blog_args = array(
							'post_type' => 'page',
							'order' => 'asc',
							'cat' => 4,
						);

						$blog_posts = new WP_Query($blog_args);
						if ($blog_posts->have_posts()):
							while ($blog_posts->have_posts()):
								$blog_posts->the_post();
								?>
								<div class="item">
									<a href="<?php the_permalink(); ?>">
										<div class="destination-box">
											<?php the_post_thumbnail('wp-post-image', array('class' => 'img-fluid')); ?>
											<div class="country-info">
												<img src="<?php echo carbon_get_the_post_meta('country_thumb'); ?>" alt="">
												<p class="m-0 pe-2">
													<?php the_title(); ?>
												</p>
											</div>
										</div>
									</a>
								</div>
							<?php endwhile;
							wp_reset_postdata();
						else: ?>
							<p>Sorry</p>
						<?php endif; ?>
					</div>

				</div>
			</div>
		</div>
	</section>
<?php } else {
} ?>

<!-- Our Physical Centers Address -->
<?php if (carbon_get_the_post_meta('enable_sec_8') == 'yes') { ?>
	<section class="physicalAddress">
		<div class="container">
			<div class="text-center mb-4">
				<h2>
					<?php echo carbon_get_the_post_meta('s_8_title'); ?>
				</h2>
			</div>
			<div class="row g-4 justify-content-center">
				<?php
				$address = carbon_get_the_post_meta('sec_8_content');
				foreach ($address as $addresses) {
					?>
					<div class="col-lg-4 col-md-6">
						<div class="address-box">
							<h4>
								<?php echo $addresses['address_title'] ?>
							</h4>
							<div class="d-flex">
								<i class="fa-solid fa-location-dot"></i>
								<p>
									<?php echo $addresses['address_info'] ?>
								</p>
							</div>
							<div class="d-flex">
								<i class="fa-solid fa-phone"></i>
								<p>
									<?php echo $addresses['address_contact'] ?>
								</p>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>
<?php } else {
} ?>

<!-- Student Feedback & Enquiry -->
<?php if (carbon_get_the_post_meta('enable_sec_9') == 'yes') { ?>

	<section class="feedback-and-form">
		<div class="container position-relative">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/left-comma.png" alt="Left Comma"
				class="left-comma">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/right-comma.png" alt="Right Comma"
				class="right-comma">

			<div class="row align-items-center">
				<div class="col-lg-3" data-aos="fade-up" data-aos-duration="500">
					<h4>
						<?php echo carbon_get_the_post_meta('s_9_title'); ?>
					</h4>
					<p><?php echo carbon_get_the_post_meta('s_9_description'); ?></p>
				</div>
				<div class="col-lg-9 px-5" data-aos="fade-up" data-aos-duration="1000">
					<div class="owl-carousel owl-theme" id="studentFeedback">
						<?php
						$st_feedback = carbon_get_the_post_meta('sec_9_content');
						foreach ($st_feedback as $st_feedbacks) {
							?>
							<div class="item">
								<div class="student-feedback">
									<div class="video-box">
										<img src="<?php echo $st_feedbacks['st_feedback_thumb'] ?>"
											alt="<?php echo $st_feedbacks['st_feedback_alt'] ?>" class="img-fluid">
										<div class="video-icon">
											<div class="video-main">
												<div class="promo-video">
													<div class="waves-block">
														<div class="waves wave-1"></div>
														<div class="waves wave-2"></div>
														<div class="waves wave-3"></div>
													</div>
												</div>
												<a href="<?php echo $st_feedbacks['st_feedback_link'] ?>"
													class="video video-popup mfp-iframe" data-lity><i
														class="fa fa-play"></i></a>
											</div>

										</div>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="row" data-aos="fade-up" data-aos-duration="500">
				<div class="col-lg-12">
					<div class="enquiry-form">
						<div class="row <?php if (carbon_get_the_post_meta('enable_sec_9_form') == 'yes'):
							echo "align-items-center";
						else:
							echo "";
						endif; ?>">
							<div class="col-lg-6 d-lg-block d-md-none">
								<img src="<?php echo carbon_get_the_post_meta('st_feedback_form_image'); ?>"
									alt="<?php echo carbon_get_the_post_meta('st_feedback_form_alt'); ?>"
									class="img-fluid p-5">
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="text-center">
									<h2 class="m-0">
										<?php echo carbon_get_the_post_meta('s_9_form_title'); ?>
									</h2>
									<small><?php echo carbon_get_the_post_meta('s_9_form_description'); ?></small>
								</div>
								<!-- Add your Shortcode Here -->
								<?php
								if (carbon_get_the_post_meta('enable_sec_9_form') == 'yes'):
									echo do_shortcode(carbon_get_the_post_meta('s_9_short_code'));
								else: ?>
									<div class="alert alert-danger mt-3">
										<p class="m-0 p-3">
											<?php echo carbon_get_the_post_meta('s_9_msg'); ?>
										</p>
									</div>
								<?php endif;
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php } else {
} ?>


<?php
get_footer();
?>