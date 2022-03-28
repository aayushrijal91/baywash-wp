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
		<div class="services_heroText" data-aos="fade-right"><?= the_content(); ?></div>
		<div class="row service_listWrapper">
			<?php
			$args = array(
				'posts_per_page' => -1,
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
					$linkable = get_field('small_description_1');
			?>
					<div class="col-6 col-lg-3" data-aos="flip-up">
						<div class="services_listCard">
							<a href="<?= $link ?>" style="<?= !$linkable ? 'pointer-events: none': '' ?>">
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