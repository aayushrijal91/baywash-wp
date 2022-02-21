<?php
$footer_logo = get_field('footer_logo', 'options');
?>
<footer class="footer bg-black">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-xl-4 col-xxl-3">
				<div class="">
					<a href="<?= home_url() ?>"><img src="<?= $footer_logo['url']; ?>" alt="<?= $footer_logo['alt']; ?>" /></a>
				</div>
				<div class="footer-description">
					<div class="pr-4">
						<?= get_field('description', 'options') ?>
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
		</div>
		<div class="row justify-content-between footer-bottom">
			<div class="col-auto copyright">
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
					<div class="col-auto pl-lg-5 pl-xxl-7">
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