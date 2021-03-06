<?php
/*
 * Template Name: Gallery
 * The home page
 *
 */
get_header();
get_template_part('parts/section', 'banner');
?>

<section class="gallery">
	<div class="container d-none d-md-block">
		<div class="grid-wrapper">
			<?php if (have_rows('gallery_images')) : ?>
				<?php while (have_rows('gallery_images')) : the_row();
					$image = get_sub_field('image');
					$wide = get_sub_field('wide');
				?>
					<div class="<?= $wide ? "wide" : '' ?>" data-aos="flip-up">
						<img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
						<div class="overlay"></div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
	<div class="d-md-none">
		<div class="gallery_slider">
			<?php if (have_rows('gallery_images')) : ?>
				<?php while (have_rows('gallery_images')) : the_row();
					$image = get_sub_field('image');
					$wide = get_sub_field('wide');
				?>
					<div class="gallery_sliderContent">
						<img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
						<div class="overlay"></div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>

<?php
get_template_part('parts/section', 'testimonials');
get_footer();
?>