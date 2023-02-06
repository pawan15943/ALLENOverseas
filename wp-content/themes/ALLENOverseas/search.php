<?php
/*
 * Template Name: Blog
 * description: Website Blog Page
 */


get_header(); ?>

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

					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

					$args = array(
						'post_type' => 'post',
						'post_status' => 'publish',
						'posts_per_page' => 6,
						'paged' => $paged
					);

					$loop = new WP_Query($args);

					while ($loop->have_posts()) : $loop->the_post(); ?>
						<div class="col-lg-6">
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
										<li><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo get_the_date(); ?></li>
										<li><i class="fa fa-eye" aria-hidden="true"></i> <?php echo gt_get_post_view(); ?></li>
									</ul>
								</div>
							</div>
						</div>
					<?php
					endwhile;
					?>
				</div>
				<div class="row">
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
				
				<?php  echo get_search_form(); 
				?>
				<div class="form-box-blog">
					<h4>Get in Touch</h4>
					<span>Please fill the information and our representative will call you.</span>

					<div class="row mt-3">
						<div class="col-lg-12 mb-3">
							<input type="text" class="form-control " placeholder="Enter Full Name">
						</div>
						<div class="col-lg-12 mb-3">
							<input type="text" class="form-control " placeholder="Enter Full Name">
						</div>
						<div class="col-lg-12 mb-3">
							<input type="text" class="form-control " placeholder="Enter Full Name">
						</div>
						<div class="col-lg-12 mb-3">
							<input type="text" class="form-control " placeholder="Enter Full Name">
						</div>
						<div class="col-lg-12 mb-3">
							<input type="text" class="form-control " placeholder="Enter Full Name">
						</div>
						<div class="col-lg-12 mb-3">
							<input type="text" class="form-control " placeholder="Enter Full Name">
						</div>
					</div>
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
						<?php }
						?>
					</ul>

					
				</div>
				<div class="side-box mt-4 popular_post_sticky">
					<h4 class="mb-3">Populer Posts</h4>
					<ul class="populer-blog-posts">
						<?php
						$recent_posts = wp_get_recent_posts(array(
							'numberposts' => 4, // Number of recent posts thumbnails to display
							'post_status' => 'publish' // Show only the published posts
						));
						foreach ($recent_posts as $post_item) : ?>
							<li>
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
						<?php endforeach;
						wp_reset_postdata(); ?>
					</ul>
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


<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

if ( have_posts() ) {
	?>
	<header class="page-header alignwide">
		<h1 class="page-title">
			<?php
			printf(
				/* translators: %s: Search term. */
				esc_html__( 'Results for "%s"', 'twentytwentyone' ),
				'<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
			);
			?>
		</h1>
	</header><!-- .page-header -->

	<div class="search-result-count default-max-width">
		<?php
		printf(
			esc_html(
				/* translators: %d: The number of search results. */
				_n(
					'We found %d result for your search.',
					'We found %d results for your search.',
					(int) $wp_query->found_posts,
					'twentytwentyone'
				)
			),
			(int) $wp_query->found_posts
		);
		?>
	</div><!-- .search-result-count -->
	<?php
	// Start the Loop.
	while ( have_posts() ) {
		the_post();

		/*
		 * Include the Post-Format-specific template for the content.
		 * If you want to override this in a child theme, then include a file
		 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
		 */
		get_template_part( 'template-parts/content/content-excerpt', get_post_format() );
	} // End the loop.

	// Previous/next page navigation.
	twenty_twenty_one_the_posts_navigation();

	// If no content, include the "No posts found" template.
} else {
	get_template_part( 'template-parts/content/content-none' );
}

get_footer();
