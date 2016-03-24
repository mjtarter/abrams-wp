<?php
/**
 * Template Name: Forms Template
 *
 */
get_header(); ?>
<div class="bg">

<!-- Page Title
		============================================= -->
<section id="page-title">

	<div class="container clearfix">
		<h1>Patient Forms</h1>
		<ol class="breadcrumb">
			<li><a href="<?php bloginfo('url'); ?>/first-visit">Patient Portal</a></li>
			<li class="active">Patient Forms</li>
		</ol>
	</div>

</section><!-- #page-title end -->

<div class="container pt-50 white-bg">
	<div class="col-sm-12">
		<p>These forms are provided in Adobe Acrobat PDF format. To view the forms, you will need the Adobe Acrobat Reader, which you can get free of charge from Adobe here: <a href="https://get.adobe.com/reader/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/adobe-reader.jpg"></a></p>
	</div>
</div>
<div class="container white-bg text-center forms">
  <div class="col-lg-10 col-lg-offset-1">
		<div class="col-md-4">
			<a href="<?php echo get_template_directory_uri(); ?>/contact-lens-eval-fees.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/contact-lens-form.png"></a>
			<a href="<?php echo get_template_directory_uri(); ?>/contact-lens-eval-fees.pdf" target="_blank"><p>Contact Lens Fees Form</p></a>
		</div>
		<div class="col-md-4">
			<a href="<?php echo get_template_directory_uri(); ?>/financial-responsibility.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/financial-responsibility-form.png"></a>
			<a href="<?php echo get_template_directory_uri(); ?>/financial-responsibility.pdf" target="_blank"><p>Financial Responsibility Form</p></a>
		</div>
		<div class="col-md-4">
			<a href="<?php echo get_template_directory_uri(); ?>/medical-history-form.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/medical-history.png"></a>
			<a href="<?php echo get_template_directory_uri(); ?>/medical-history-form.pdf" target="_blank"><p>Medical History Form</p></a>
		</div>
		<div class="col-md-4">
			<a href="<?php echo get_template_directory_uri(); ?>/patient-registration.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/patient-registration-form.png"></a>
			<a href="<?php echo get_template_directory_uri(); ?>/patient-registration.pdf" target="_blank"><p>Patient Registration Form</p></a>
		</div>
		<div class="col-md-4">
			<a href="<?php echo get_template_directory_uri(); ?>/workers-compensation-form.pdf" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/workers-compensation-form.png"></a>
			<a href="<?php echo get_template_directory_uri(); ?>/workers-compensation-form.pdf" target="_blank"><p>Worker's Compensation Form</p></a>
		</div>
	</div>
</div>

<div class="container white-bg">
	<div class="col-md-10 col-lg-offset-1 pb-40">
		<div class="panel text-center ptb-25">
			<h3 class="pb-15">Pre-Visit Information</h3>
			<a href="<?php bloginfo('url'); ?>/forms" class="button button-3d button-rounded button-blue">Forms</a>
			<a href="<?php bloginfo('url'); ?>/insurance" class="button button-3d button-rounded button-blue">Insurance</a>
			<a href="<?php bloginfo('url'); ?>/registration" class="button button-3d button-rounded button-blue">Online Registration</a>
			<a href="<?php bloginfo('url'); ?>/contact" class="button button-3d button-rounded button-blue">Directions</a>
		</div>
	</div>
</div>

<?php get_footer(); ?>