<?php
/*
 * Template Name: About Us
 * The home page
 *
 */
get_header();
$sm_hero_title_1 = get_field('small_hero_title_1');
$hero_title_1 = get_field('hero_title_1');
$hero_image_1 = get_field('hero_image_1');
$small_description_1 = get_field('small_description_1');
?>

<section class="about">
	<div class="container-fluid px-0">
		<div class="row no-gutters">
			<div class="col-12 col-lg-6">
				<img class="hero-image-1" src="<?= $hero_image_1['url'] ?>" alt="<?= $hero_image_1['alt'] ?>">
			</div>
			<div class="col about-text">
				<div class="row no-gutters justify-content-center">
					<div class="col-11 col-xxl-10 pr-5">
						<div class="small-hero-title">
							<?= $sm_hero_title_1 ?>
						</div>
						<div class="about-hero-title">
							<?= $hero_title_1 ?>
						</div>
						<div class="about-sm-description">
							<?= $small_description_1 ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
?>