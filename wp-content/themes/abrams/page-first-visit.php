<?php
/**
 * Template Name: First Visit Template
 *
 */
get_header(); ?>
<div class="bg">

<!-- Page Title
		============================================= -->
<section id="page-title">

	<div class="container clearfix">
		<h1>Your First Visit</h1>
		<ol class="breadcrumb">
			<li><a href="#">Patient Portal</a></li>
			<li class="active">First Visit</li>
		</ol>
	</div>

</section><!-- #page-title end -->

<div class="container ptb-50 white-bg">
	<div class="row">
		<div class="col-sm-7">
			<p>When you arrive for your first visit, you can expect to be warmly greeted and treated with respect and professionalism.</p><p>Every new patient is required to fill out standard medical forms prior to their first visit. Because this paper work can be time-consuming, we do ask that you come in about 15 minutes early in order to get this completed.</p><p>For your convenience, the registration forms are also available online:<br>click here to view and print, or you may also elect to use our secure, encrypted online registration form here. The choice is completely up to you.</p>
		</div>
		<div class="col-sm-5">
      <img src="<?php echo get_template_directory_uri(); ?>/img/first-visit.jpg" class="pt-25">
		</div>
	</div>
	<div class="row white-bg">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="panel text-center ptb-25">
				<h3>Pre-Visit Information</h3>
				<a href="<?php bloginfo('url'); ?>/forms" class="button button-3d button-rounded button-blue">Forms</a>
				<a href="<?php bloginfo('url'); ?>/insurance" class="button button-3d button-rounded button-blue">Insurance</a>
				<a href="<?php bloginfo('url'); ?>/registration" class="button button-3d button-rounded button-blue">Online Registration</a>
				<a href="<?php bloginfo('url'); ?>/contact" class="button button-3d button-rounded button-blue">Directions</a>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>