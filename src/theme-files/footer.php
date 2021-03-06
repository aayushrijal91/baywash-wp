<?php
$footer_logo = get_field('footer_logo', 'options');
?>
<footer class="footer bg-black">
	<div class="container">
		<div class="row justify-content-between align-items-center">
			<div class="col-xl-4">
				<div class="row align-items-lg-center pb-lg-5 pb-xl-0">
					<div class="col-12 col-lg col-xl-12">
						<a href="<?= home_url() ?>"><img src="<?= $footer_logo['url']; ?>" alt="<?= $footer_logo['alt']; ?>" /></a>
					</div>
					<div class="col-12 col-lg col-xl-12">
						<div class="footer-description">
							<div class="row no-gutters">
								<div class="col-xxl-8">
									<?= get_field('description', 'options') ?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-3 col-xl-12">
						<div class="social-media">
							<?php if (have_rows('social_media', 'option')) : ?>
								<?php while (have_rows('social_media', 'option')) : the_row();
									$social_icon = get_sub_field('social_icon');
									$social_url = get_sub_field('social_media_url');
								?>
									<a href="<?= $social_url['url'] ?>" class="social-icon" target="_blank"><img src="<?= $social_icon['url'] ?>" alt="<?= $social_icon['alt'] ?>"></a>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl pt-5 pt-lg-0">
				<div class="row no-gutters justify-content-between">
					<div class="col-4 col-md-2 footer-sidebar-column">
						<div class="footer-sidebar-title h21">Site</div>
						<?php wp_nav_menu(array(
							'menu' => 'Footer Menu',
						)); ?>
					</div>
					<div class="col footer-sidebar-column">
						<div class="footer-sidebar-title h21">Services</div>
						<div class="row no-gutters">
							<div class="col-6">
								<?php wp_nav_menu(array(
									'menu' => 'Footer Services 1',
								)); ?>
							</div>
							<div class="col-6">
								<?php wp_nav_menu(array(
									'menu' => 'Footer Services 2',
								)); ?>
							</div>
						</div>
					</div>
					<div class="col-6 col-md col-lg-auto footer-sidebar-column">
						<div class="footer-sidebar-title h21">Contact</div>
						<ul>
							<li><?= get_field('address', 'option') ?></li>
							<li><a href="tel:<?= get_field('phone_number', 'option') ?>"><?= get_field('phone_number', 'option') ?></a></li>
							<li><a href="mailto:<?= get_field('admin_email', 'option') ?>"><?= get_field('admin_email', 'option') ?></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row justify-content-between justify-content-md-center justify-content-lg-between footer-bottom">
			<div class="col-md-auto copyright">
				<?= get_field('copyright_text', 'option') ?>
			</div>
			<div class="col-auto">
				<div class="row no-gutters justify-content-center justify-content-lg-end align-items-center">
					<div class="col-auto">
						<a href="<?= get_field('privacy_policy_url', 'option')['url'] ?>" class="text-white fw-300 h24">Privacy Policy</a>
					</div>
					<div class="col-auto px-4">|</div>
					<div class="col-auto">
						<a href="<?= get_field('terms_and_conditions_url', 'option')['url'] ?>" class="text-white fw-300 h24">Terms and Conditions</a>
					</div>
					<div class="col-12 col-lg-auto pl-lg-5 pl-xxl-7 text-center pt-4 pt-lg-0">
						<a href="<?= get_field('company_link', 'option')['url'] ?>" target="_blank"><img src="<?= get_field('company_logo', 'option')['url'] ?>" alt="<?= get_field('company_logo', 'option')['alt'] ?>"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<a href="javascript:" id="return-to-top">
	<img src="<?= get_template_directory_uri() ?>/images/arrow-up.webp">
</a>
<?php wp_footer(); ?>
</body>

</html>