<?php
/*
 * Template Name: Blog
 * description: Website Blog Page
 */

get_header(); ?>
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

<!-- BreadCrumb -->
<section class="pt-3">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?php echo  home_url(); ?>">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Blog</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</section>

<!-- Notice -->
<section class="d-none">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="notiivation">
					<div class="info">
						<h4>New Admission are Open <br>Now to Join Now.</h4>
					</div>
					<div class="link">
						<a href="">Click Here</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Main Content -->
<div class="section">
	<div class="container">
		<div class="row">
			<!-- Blog Posts -->
			<div class="col-lg-8 pb-4">
				<div class="row g-4">
					<!-- post -->
					<?php
					$x = 0;
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

					$args = array(
						'post_type' => 'post',
						'post_status' => 'publish',
						'posts_per_page' => 10,
						'paged' => $paged
					);

					$loop = new WP_Query($args);

					while ($loop->have_posts()) : $loop->the_post(); ?>
						<div class="col-lg-6" data-aos="fade-up" data-aos-duration="<?php echo $y = $x * 300 ?>">
							<div class="blog-home-post">
								<?php the_post_thumbnail('wp-post-image', array('class' => 'img-fluid blog-img')); ?>
								<div class="post-home-content">
									<ul class="category-blog-home">

										<?php
										$categories = get_the_category();
										if (!empty($categories)) {
											foreach ($categories as $category) { ?>
												<li><a href="<?php echo get_category_link($category->term_id); ?>" class="tag-green-btn"><?php echo $category->name ?></a></li>
										<?php }
										}
										?>
									</ul>
									<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
									<ul class="blog-home mb-4">
										<li><i class="fa fa-user-circle" aria-hidden="true"></i> ALLEN Overseas</li>
										<li><i class="fa fa-calendar" aria-hidden="true"></i> <?php //echo get_the_date(); 
																								?></li>
										<li><i class="fa fa-eye" aria-hidden="true"></i> <?php //echo gt_get_post_view(); 
																							?></li>
									</ul>
								</div>
							</div>
						</div>
					<?php
						$x++;
					endwhile;
					?>
				</div>
				<div class="row" data-aos="fade-up" data-aos-duration="1000">
					<div class="col-lg-12 text-center">
						<div class="pagination">
							<?php
							$big = 999999999;
							echo paginate_links(array(
								'base' => str_replace($big, '%#%', get_pagenum_link($big)),
								'format' => '?paged=%#%',
								'current' => max(1, get_query_var('paged')),
								'total' => $loop->max_num_pages,
								'prev_text' => '&laquo;',
								'next_text' => '&raquo;'
							));
							?>
						</div>
					</div>
				</div>
			</div>
			<!-- Sidebar -->
			<div class="col-lg-4">

				<?php echo get_search_form(); ?>
				<div class="socail-links-box">
					<h4 class="mb-3">Social Links</h4>
					<ul>
						<li><a href=""><i class="fab fa-facebook"></i></a></li>
						<li><a href=""><i class="fab fa-twitter"></i></a></li>
						<li><a href=""><i class="fab fa-linkedin"></i></a></li>
						<li><a href=""><i class="fab fa-instagram"></i></a></li>
						<li><a href=""><i class="fab fa-youtube"></i></a></li>
					</ul>
				</div>
				<div class="adds pt-4">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/skoolpro_m.webp" alt="image" class="img-fluid">
				</div>
				<div class="populertags-box mt-4 side-box">
					<h4 class="mb-3">Populer Tags</h4>
					<ul class="class-blog-tags">
						<?php
						$args = array(
							'orderby' => 'name',
							'parent' => 0
						);
						$tags = get_tags($args);
						foreach ($tags as $tag) { ?>
							<li><a href="<?php echo get_tag_link($tag); ?>"> <?php echo  $tag->name ?></a></li>
						<?php

						}
						?>
					</ul>
				</div>

				<div class="side-box mt-4 popular_post_sticky">
					<h4 class="mb-3">Populer Posts</h4>
					<ul class="populer-blog-posts">
						<?php
						$x = 0;
						$recent_posts = wp_get_recent_posts(array(
							'numberposts' => 4, // Number of recent posts thumbnails to display
							'post_status' => 'publish' // Show only the published posts
						));
						foreach ($recent_posts as $post_item) : ?>
							<li data-aos="fade-up" data-aos-duration="<?php echo $y = $x * 300 ?>">
								<a href="<?php echo get_permalink($post_item['ID']) ?>">
									<div class="d-flex">
										<div class="image-blog">
											<?php echo get_the_post_thumbnail($post_item['ID'], '', array('class' => 'post_thumb d-inline img-fluid')); ?>

										</div>
										<div class="sidebar-blog-content">
											<h6><?php echo $post_item['post_title'] ?></h6>
										</div>
									</div>
								</a>
							</li>
						<?php
							$x++;
						endforeach;
						wp_reset_postdata(); ?>


					</ul>
					<div class="form-box-blog" data-aos="fade-up" data-aos-duration="1300">
							<h4>Subscribe and Newsletter</h4>
							<span>Subscribe to Myexam newsletter and stay up to date with all latest updates coming straight in your mailbox:</span>

							<div class="row mt-3">
								<div class="col-lg-12 mb-3">
									<input type="text" class="form-control " placeholder="Enter Email Address">
								</div>
								
								<div class="col-lg-12">
									<button class="btn btn-primary">Subscribe</button>
								</div>
							</div>
						</div>

				</div>
			</div>
		</div>

		<h4>Tranding Posts</h4>
		<div class="row py-3">
			<div class="col-lg-12">
				<div class="owl-carousel owl-theme" id="blogSlider">
					<div class="item">
						<div class="post-data">
							<img src="assets/images/class-10th-12th-board-exam-2023.jpg" alt="">
							<div class="content">
								<h4>Welcome to ALLEN Overseas to ALLEN Overseas Welcome to ALLEN Overseas</h4>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="post-data">
							<img src="assets/images/class-10th-12th-board-exam-2023.jpg" alt="">
							<div class="content">
								<h4>Welcome to ALLEN Overseas Welcome to ALLEN Overseas Welcome to ALLEN Overseas
									Welcome to
									ALLEN Overseas</h4>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<?php


get_footer();

?>