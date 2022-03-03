<?php
/*
 * Template Name: Services
 * The home page
 *
 */
get_header();
get_template_part('parts/section', 'banner');
?>

<section class="services">
	<div class="container">
		<div class="row">
			<?php
			$args = array(
				'posts_per_page' => 6,
				'post_type' => 'services',
				'orderby' => 'menu_order',
				'order' => 'ASC',
			);

			$the_query = new WP_Query($args);
			if ($the_query->have_posts()) {

				while ($the_query->have_posts()) {
					$the_query->the_post();
					$featured_img_url = get_the_post_thumbnail_url($post->ID, 'full');
					$title = get_the_title();
					$link = get_the_permalink();
			?>
					<div class="col-md-6 col-lg-3">
						<div class="services_listWrapper">
							<a href="<?= $link ?>">
								<img src="<?= $featured_img_url ?>" class="cover_image">
								<div class="services_listTitle"><?= $title ?></div>
							</a>
						</div>
					</div>
				<?php } ?>
			<?php } ?>
		</div>
	</div>
</section>


<?php
get_footer();
?>