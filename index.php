<?php get_header(); ?>

<!-- Main Container -->
<section id="content" class="fullwidth">

	<!-- About -->
	<article class="target pageheader customselection">
		<?php echo pageHeader('about'); ?>
	</article>

	<!-- Portfolio Parts -->
	<section id="portfolioblocks" class="greybg">		
		<?php 
			// get portfolio post
			echo checkForFile('portfolioArray', 'modules/portfolio'); global $featuredPost;
			echo checkForFile('portfolioHTML', 'modules/portfolio');
		?>
	</section>

	<!-- Services -->
	<section id="services" class="greybg">
		<!-- service title -->
		<section class="pageheader light module ani-top">
			<section class="textwrapper limitpadding">
				<h1 class=""><?php echo get_field('field_service_title', 'option'); ?></h1>
				<div class="decoration"></div>
				<div class="contentwrap customlineH module ani-bottom"><?php echo get_field('field_service_text', 'option'); ?></div>
			</section>
		</section>
		
		<!-- service repeater -->
		<section class="textwrapper">
			<?php 
				// get services post
				echo checkForFile('servicesHTML', 'modules/services');
			?>
		</section>
	
	</section>

	<!-- Proficiencies -->
	<section id="proficiencies" class="customselection" style="background-image: url('<?php echo get_field('field_prof_img', 'option')['url']; ?>');">
		
		<div class="wedge"></div>
		
		<!-- service title -->
		<section class="pageheader module ani-top">
			<section class="textwrapper limitpadding">
				<h1 class=""><?php echo get_field('field_prof_title', 'option'); ?></h1>
				<div class="decoration"></div>
			</section>
		</section>
		
		<!-- service repeater -->
		<section class="textwrapper module ani-bottom">
			<?php 
				// get services post
				echo checkForFile('proficienciesHTML', 'modules/proficiencies');
			?>
		</section>
		
		<!-- Optional text -->
		<?php 
			if ( get_field('field_prof_option_wysiwyg_option', 'option') == 'yes' ) echo get_field('field_prof_option_wysiwyg', 'option'); 
		?>
	</section>


</section><!-- END container -->

<?php get_footer(); ?>
