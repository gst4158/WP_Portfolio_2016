<?php
/**
 * Portfolio Singles Pages
 * This is the template that displays all portfolio pages by default.
 *
 * //========================//
 * // README: Most functions on this page lives in modules/portfolio/functions.php
 * //========================//
*/

// page setup/vars
get_header(); 
global $pageSlug;
$pageOptions = ( get_field('field_port_default_option') ? get_field('field_port_default_option') : array() );

// Page Includes
echo checkForFile('functions', 'modules/portfolio');
getNextPrevPost('portfolio'); global $postLinks; // gets links for next and prev post
?>

<!--Page Cover -->
<?php echo pageCover();  ?>

<!--Page Content -->
<article id="single-content" class="fullwidth posttype-<?php echo get_post_type(); ?> single-<?php echo pageSlug(get_the_title()); ?> target">	

	<!-- Project Introduction -->
	<section id="introduction" class="portwrapper introductionwrapper" style="background-color: <?php echo get_field('field_port_default_color'); ?>">
		<section class="textwrapper <?php if( get_field('field_port_default_image') ) echo 'hasimg' ;?>">
			<!-- title -->
			<section class="third">
				<h1><?php echo get_the_title(); ?></h1>
				<p><span>Project Role:</span><?php echo get_field('field_port_default_role'); ?></p>
			</section>
	
			<!-- content -->
			<section class="twothird last-child">
				<p><?php echo get_field('field_port_default_text'); ?></p>
			</section>		
		</section>
		
		<?php echo fullScreenImage('default'); ?>
		
	</section>

	<!-- Page Parts -->
	<?php echo pageParts( get_field('field_port_default_parts') ); ?>

	<!-- Other Projects -->
	<?php if ( $deviceType != 'phone') :  // turn off on mobile ?>
	<section id="morePost" class="postlinkwrapper">
		<div>
			<!-- previous project -->
			<div class="third prev">
				<a href="<?php echo $postLinks['prevURL']; ?>">
					<div class="controls left"><div></div><div></div></div>
					<section class="textwrapper">
						<h3>Previous Project</h3>
						<h2><?php echo $postLinks['prevTitle']; ?></h2>
					</section>
				</a>
				
			</div>
	
			<!-- back to top -->
			<div class="third top middle-child">
				<a class="bcktop" href="#projectcover-cover">
					<section class="textwrapper">
						<h3>Back to Top</h3>
					</section>
					<div class="controls up"><div></div><div></div></div>
				</a>			
			</div>
			
			<!-- next project -->
			<div class="third last-child next">
				<a href="<?php echo $postLinks['nextURL']; ?>">
					<section class="textwrapper">
						<h3>Next Project</h3>
						<h2><?php echo $postLinks['nextTitle']; ?></h2>
					</section>
					<div class="controls right"><div></div><div></div></div>
				</a>
			</div>
		</div>
		
		<section class="project-contact customselection hidden">
			<div class="decoration"></div>
			<section>
				<h3>Want to add your project?</h3>
				<a class="contactactivate" href="javascript:void(0)">
					Contact me now
					<span>and let's get to work!</span>
					<div class="underlined"></div>
				</a>
			</section>
		</section>
		
	</section>
	<?php endif; ?>

</article>

<?php get_footer(); ?>