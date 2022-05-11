<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
*/

get_header(); 
global $pageSlug;
?>

<section id="page-content" class="fullwidth posttype-<?php echo get_post_type(); ?> page-<?php echo pageSlug(get_the_title()); ?>">	

	<!-- Page Header -->
	<article class="pageheader customselection">
		<?php echo pageHeader(get_the_title()); ?>
	</article>

	<section id="page-default" class="full page-<?php echo $pageSlug; ?>">
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
