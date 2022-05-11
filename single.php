<?php
/*
	Template Name: Thank You Template Page
*/

get_header(); 

$pageSlug = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', get_the_title());
$pageSlug = strtolower(trim($pageSlug, '-'));
$pageSlug = preg_replace("/[\/_|+ -]+/", '-', $pageSlug);
?>

<section id="page-content" class="fullwidth posttype-<?php echo get_post_type(); ?>">	
	
	<style>
		#cover {display: none !important;}
		#page-content {min-height: 90vh;}
	</style>


	<section id="page-default" class="full page-<?php echo $pageSlug; ?>">
		<h1 style="font-size: 5vw; text-align: center; margin-top: 25%;">Sorry, nothing is here yet</h1>
		<?php
			echo "<article class=\"full\">";
				if (have_posts()) : while (have_posts()) : the_post();	
					echo 	get_the_content();
				endwhile; endif;
			echo "</article>";	
		?>
	</section>

</section>

<?php get_footer(); ?>
