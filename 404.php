<?php
/*
	Template Name: 404 Template Page
*/

?>

<?php get_header(); ?>

<section id="page-content" class="page404 fullwidth posttype-<?php echo get_post_type(); ?>">	

	<!-- content wrapper -->
	<section class="full">
		<!-- page header -->
		<section class="pageheader light ">
			<section class="textwrapper limitpadding">
				<h1 class="module ani-top">404 Error Page</h1>
				<div class="decoration module ani-top"></div>
				<div class="contentwrap module ani-bottom">
					<p style="text-align: center;">
						Well, something fudged up and you got to a page that doesn't exist.
					</p>
					<p style="text-align: center;">
						You could always
						<a href="<?php echo get_bloginfo('url'); ?>" title="<?php echo get_bloginfo('name'); ?>">click here to find the home page</a> and try again.
					</p>
				</div>
			</section>
		</section>
		
	</section> <!-- end content wrapper -->
	
</section>
<?php get_footer(); ?>
