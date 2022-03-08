<?php
/*
 * Template Name: Areas
 * The home page
 *
 */
get_header();
get_template_part('parts/section', 'banner');
$args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'order'          => 'ASC',
    'orderby'        => 'publish_date',
    'meta_query' => array(
        array(
            'key' => '_wp_page_template',
            'value' => 'page-templates/suburb.php'
        )
    )
);
$the_query = new WP_Query($args);
?>

<section class="areas">
	<section class="areatop bg-light-grey">
		<div class="container">
			<?php  // The Loop
			if ($the_query->have_posts()) {
				$count = 0;
			?>
				<div class="row justify-content-between mb-5 align-items-center" data-aos="fade-up">
					<div class="col-md">
						<h2 class="heading">Select an area below</h2>
					</div>
					<div class="col-md-auto sub-heading">
						Can’t find your area below? <a href="tel:000">Give us a Call</a> or <a href="/contact-us/">Enquire Now</a>
					</div>
				</div>
	
				<div class="areas_droplist d-block d-md-none" data-aos="fade-up">
					<div class="caption">Allsss</div>
					<div class="list">
						<?php foreach (range('A', 'Z') as $char) {
						?>
							<div class="areas_alphabet item" id="<?= $char ?>"><?= $char ?></div>
						<?php } ?>
					</div>
				</div>
	
				<div class="alphbetwrap d-none d-md-block" data-aos="fade-up">
					<div class="areas_allSearch active">ALL</div>
					<?php foreach (range('A', 'Z') as $char) {
						$htm3[$char] = '';
					?>
						<div class="areas_alphabet"><?= $char ?></div>
					<?php while ($the_query->have_posts()) : $the_query->the_post();
							if (strpos(get_the_title(), $char) === 0) {
								$liclass = str_replace(' ', '-', strtolower(get_the_title()));
								$htm3[$char] .= '<li class=" ' . $liclass . '">' . get_the_title() . '</li>';
							}
						endwhile;
					} ?>
				</div>
			<?php } ?>
	
		</div>
	
	</section>
	<section class="areawrap section-space" data-aos="fade-up">
		<div class="container">
			<?php  // The Loop
			if ($the_query->have_posts()) {
				$count = 0;
			?>
				<div class="arealistwrap">
					<div class="row">
						<?php foreach (range('A', 'Z') as $char) {
							if (isset($htm3[$char]) && $htm3[$char] != '') {
						?>
								<div class="col-lg-4 col-md-6 arealist char<?= $char ?> <?php echo ($count > 5) ? 'arealisthide' : ''; ?> ">
									<h3 class="alphabet-title font-weight-bold"><?= $char ?></h3>
									<ul>
										<?php echo $htm3[$char]; ?>
									</ul>
									<div class="mbottom "></div>
								</div>
						<?php $count++;
							}
						} ?>
					</div>
				</div>
				<div class="noresult">No Result Found.</div>
				<div class="areas_loadMoreWrap "><a href="javascript:void(0)" class="areas_loadMoreBtn">Load More</a></div>
			<?php }
			wp_reset_postdata(); ?>
	
		</div>
	</section>
</section>

<?php
get_footer();
?>