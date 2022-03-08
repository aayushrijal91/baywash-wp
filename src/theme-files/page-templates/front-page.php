<?php
/*
 * Template Name: Home Page
 * The home page
 *
 */
get_header();
$about_hero_image = get_field('about_hero_image');
$about_subtitle = get_field('about_subtitle');
$about_hero_title = get_field('about_hero_title');
$about_description = get_field('about_description');
?>

<section class="homepage">
	<?php get_template_part('parts/section', 'serviceList'); ?>

	<div class="container-fluid px-0">
		<div class="row no-gutters homepage_about">
			<div class="col-12 col-lg-6">
				<img src="<?= $about_hero_image['url'] ?>" alt="<?= $about_hero_image['alt'] ?>">
			</div>
			<div class="col homepage_aboutText">
				<div class="row no-gutters">
					<div class="col-12 homepage_smallHeroTitle">
						<?= $about_subtitle ?>
					</div>
					<div class="col-12 col-xl-8 homepage_aboutHeroTitle">
						<?= $about_hero_title ?>
					</div>
					<div class="col-12 col-xl-10 homepage_aboutSmDescription">
						<?= $about_description ?>
					</div>
					<div class="col-12">
						<div class="row no-gutters homepage_aboutButtons pt-4 pt-lg-5">
							<div class="col-auto pr-3 pr-lg-5">
								<a href="<?= get_site_url() ?>/service" class="btn btn-white rounded-pill text-black fw-600 h25 px-4">
									See Our Services
								</a>
							</div>
							<div class="col-auto">
								<a href="tel:<?= $phone_number ?>" class="btn btn-black rounded-pill text-white fw-600 h25 px-4">
									<img class="pr-3" src="<?= get_template_directory_uri() ?>/images/phone_icon.webp"> Call for a FREE Quote Today
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php get_template_part('parts/section', 'testimonials'); ?>
	<?php get_template_part('parts/section', 'quoteForm'); ?>
</section>

<?php
get_footer();
?>