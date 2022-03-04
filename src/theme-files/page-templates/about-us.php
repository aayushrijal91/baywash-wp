<?php
/*
 * Template Name: About Us
 * The home page
 *
 */
get_header();
get_template_part('parts/section', 'banner');

$sm_hero_title_1 = get_field('small_hero_title_1');
$hero_title_1 = get_field('hero_title_1');
$hero_image_1 = get_field('hero_image_1');
$small_description_1 = get_field('small_description_1');
$hero_description_2 = get_field('hero_description_2');
$call_us_text = get_field('call_us_text');
$hero_image_2 = get_field('hero_image_2');
$sm_hero_title_3 = get_field('small_hero_title_3');
$hero_title_3 = get_field('hero_title_3');
$hero_image_3 = get_field('hero_image_3');
$small_description_3 = get_field('small_description_3');
$background_4 = get_field('background_image');
$team_hero_title_4 = get_field('team_title');
$team_description_4 = get_field('team_description');
$team_read_more_link = get_field('team_read_more_link');
$team_memberDp = get_field('team_member_dp');
$team_memberName = get_field('team_member_name');
$team_memberDesignation = get_field('team_member_designation');
$team_memberBio = get_field('team_member_bio');
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
							<a href="tel:<?= get_field('phone_number', 'option') ?>" class="btn btn-black rounded-pill text-white fw-600 h25 px-4 py-3 line-height-1">
							<img src="<?= get_template_directory_uri() ?>/images/phone_icon.webp"> <?= $call_us_text ?>
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

	<div class="section__4 lazyload" data-src="<?= $background_4['url'] ?>">
		<div class="team">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-5">
						<div class="row no-gutters justify-content-center">
							<div class="col-md-9 col-lg-10">
								<div class="team_memberDpWrapper">
									<img class="team_memberDp" src="<?= $team_memberDp['url'] ?>" alt="<?= $team_memberDp['alt'] ?>">
									<div class="team_aboutTeamMemberWrapper">
										<img class="team_union" src="<?= get_template_directory_uri() ?>/images/union.webp">
										<div class="team_memberInfo">
											<p class="team_memberName"><?= $team_memberName ?></p>
											<p class="team_memberDesignation pt-2"><?= $team_memberDesignation ?></p>
											<div class="team_memberBio h17"><?= $team_memberBio ?></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-7 px-5">
						<div class="team_heading h2"><?= $team_hero_title_4 ?></div>
						<div class="team_horizontalDivider"></div>
						<div class="team_description h21">
							<?= $team_description_4 ?>
						</div>
						<div class="team_buttonWrapper">
							<a href="<?= $team_read_more_link['url'] ?>" class="btn text-white h21 fw-700 px-0">Read More</a>
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