<?php
/*
 * Template Name: Contact Us
 * The home page
 *
 */
get_header();
get_template_part('parts/section', 'banner');
?>

<section class="contact-us">
	<img class="w-100" src="<?= get_template_directory_uri() ?>/images/contact_usBg.webp" alt="">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg">
				<div class="contact_form" data-aos="fade-right">
					<?= do_shortcode('[contact-form-7 id="250" title="Contact Us"]') ?>
				</div>
			</div>
			<div class="col-12 col-lg-6 col-xl-auto">
				<div class="contact_address" data-aos="fade-left">
					<div class="text-black fw-800 h10">Head Office</div>
					<div class="text-white fw-400 h11 py-4">
						<?= get_field('address', 'option') ?>
					</div>
					<div class="text-white fw-500 h8 pb-4">
						<a href="tel:<?= get_field('phone_number', 'option') ?>" class="text-white"><?= get_field('phone_number', 'option') ?></a>
					</div>
					<div class="text-white fw-400 h11">
						Interested in working for us? <a class="btn p-0 fw-800 text-white h11"><u>Click here</u></a>
					</div>
					<div class="text-black fw-800 h10 admin_email">
						<a href="mailto:<?= get_field('admin_email', 'option') ?>" class="text-black"><?= get_field('admin_email', 'option') ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_template_part('parts/section', 'testimonials');
get_footer();
?>