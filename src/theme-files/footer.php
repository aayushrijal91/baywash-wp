<?php
$footer_logo = get_field('footer_logo', 'options');
?>
<footer class="footer bg-black">
	<div class="container">
		<div class="row justify-content-between align-items-center">
			<div class="col-xl-4">
				<div class="">
					<a href="<?= home_url() ?>"><img src="<?= $footer_logo['url']; ?>" alt="<?= $footer_logo['alt']; ?>" /></a>
				</div>
				<div class="footer-description">
					<div class="row no-gutters">
						<div class="col-xxl-8">
							<?= get_field('description', 'options') ?>
						</div>
					</div>
				</div>
				<div class="social-media">
					<?php if (have_rows('social_media', 'option')) : ?>
						<?php while (have_rows('social_media', 'option')) : the_row();
							$social_icon = get_sub_field('social_icon');
							$social_url = get_sub_field('social_media_url');
						?>
							<a href="<?= $social_url ?>" class="social-icon" target="_blank"><img src="<?= $social_icon['url'] ?>" alt="<?= $social_icon['alt'] ?>"></a>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-xl pt-5 pt-lg-0">
				<div class="row no-gutters justify-content-between">
					<div class="col-6 col-lg-2 footer-sidebar-column">
						<div class="footer-sidebar-title h21">Site</div>
						<ul>
							<li>Home</li>
							<li>About Us</li>
							<li>Areas</li>
							<li>Gallery</li>
						</ul>
					</div>
					<div class="col-6 col-lg footer-sidebar-column">
						<div class="footer-sidebar-title h21">Services</div>
						<ul>
							<li>NDIS Cleaning</li>
							<li>Commercial &amp; Office</li>
							<li>Government</li>
							<li>Leisure &amp; Hospitality</li>
						</ul>
					</div>
					<div class="col-6 col-lg-4 footer-sidebar-column">
						<div class="footer-sidebar-title h21 invisible">a</div>
						<ul>
							<li>Transport</li>
							<li>Manufacturing And Industrial</li>
							<li>Areas</li>
							<li>Event Cleaning</li>
						</ul>
					</div>
					<div class="col-6 col-lg-auto footer-sidebar-column">
						<div class="footer-sidebar-title h21">Contact</div>
						<ul>
							<li><?= get_field('address', 'option') ?></li>
							<li><?= get_field('phone_number', 'option') ?></li>
							<li><?= get_field('admin_email', 'option') ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row justify-content-between footer-bottom">
			<div class="col-lg-auto copyright">
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
					<div class="col-12 col-lg-auto pl-lg-5 pl-xxl-7 text-center pt-4 pt-md-0">
						<a href="<?= get_field('company_link', 'option')['url'] ?>" target="_blank"><img src="<?= get_field('company_logo', 'option')['url'] ?>" alt="<?= get_field('company_logo', 'option')['alt'] ?>"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<a href="javascript:" id="return-to-top">
	<img src="images/icons/arrow-up.webp">
</a>
<?php wp_footer(); ?>
</body>

</html>