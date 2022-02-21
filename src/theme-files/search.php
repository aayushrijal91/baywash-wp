<?php

/**

 * The template for displaying search results pages

 *

 * 

 *

 * 

 * 

 * @since 1.0.0

 */





get_header(); 



global $query_string;

$query_args = explode("&", $query_string);

$search_query = array();

?>

<section class="section-space">

	<div class="container">

		



		<?php

		foreach($query_args as $key => $string) {

			$query_split = explode("=", $string);

			$search_query[$query_split[0]] = urldecode($query_split[1]);

    } // foreach



    $the_query = new WP_Query($search_query);

    if ( $the_query->have_posts() ) : 

    	?>

    	<!-- the loop -->

    	<h2 class="heading mb-5 ">Search Result</h2>

    	<ul>    

    		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    			<li class="h3">

    				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

    			</li>   

    		<?php endwhile; ?>

    	</ul>

    	<!-- end of the loop -->



    	<?php wp_reset_postdata(); ?>



    	<?php else : ?>

    		<p class="h2"><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

    	<?php endif; ?>

    </div>

</section>

<?php get_footer(); ?>