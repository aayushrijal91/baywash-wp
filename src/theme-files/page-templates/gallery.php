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
	<div class="container">
		<div class="grid-wrapper">
			<?php if (have_rows('gallery_images')) : ?>
				<?php while (have_rows('gallery_images')) : the_row();
					$image = get_sub_field('image');
					$wide = get_sub_field('wide');
				?>
					<div class="<?= $wide ? "wide" : '' ?>">
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