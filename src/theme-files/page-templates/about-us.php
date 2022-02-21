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
$hero_description_2 = get_field('hero_description_2');
$call_us_text = get_field('call_us_text');
$hero_image_2 = get_field('hero_image_2');
$phone_icon = get_field('phone_icon');
$phone_number = get_field('phone_number', 'option');
$sm_hero_title_3 = get_field('small_hero_title_3');
$hero_title_3 = get_field('hero_title_3');
$hero_image_3 = get_field('hero_image_3');
$small_description_3 = get_field('small_description_3');
?>

<section class="about">
	<div class="container-fluid px-0">
		<div class="row no-gutters align-items-center section__1">
			<div class="col-12 col-lg-6" data-aos="fade-right">
				<img class="hero-image-1" src="<?= $hero_image_1['url'] ?>" alt="<?= $hero_image_1['alt'] ?>">
			</div>
			<div class="col about-text" data-aos="fade-left">
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

		<div class="row align-items-center no-gutters section__2">
			<div class="col" data-aos="fade-right">
				<div class="row no-gutters justify-content-center">
					<div class="col-11 col-xxl-8">
						<div class="h11 hero-description-2">
							<?= $hero_description_2 ?>
						</div>
						<div class="call-us-button pt-3">
							<a href="<?= $phone_number ?>" class="btn btn-black rounded-pill text-white fw-600 h25 px-4 py-3 line-height-1">
								<img src="<?= $phone_icon['url'] ?>" alt="<?= $phone_icon['alt'] ?>"> <?= $call_us_text ?>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-xl-4" data-aos="fade-left">
				<img class="hero-image-2" src="<?= $hero_image_2['url'] ?>" alt="<?= $hero_image_2['alt'] ?>">
			</div>
		</div>

		<div class="row align-items-center no-gutters section__3">
			<div class="col-12 col-lg-6" data-aos="fade-right">
				<img class="hero-image-3" src="<?= $hero_image_3['url'] ?>" alt="<?= $hero_image_3['alt'] ?>">
			</div>
			<div class="col about-text" data-aos="fade-left">
				<div class="row no-gutters justify-content-center">
					<div class="col-11 col-xxl-10 pr-5">
						<div class="small-hero-title">
							<?= $sm_hero_title_3 ?>
						</div>
						<div class="about-hero-title">
							<?= $hero_title_3 ?>
						</div>
						<div class="about-sm-description">
							<?= $small_description_3 ?>
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