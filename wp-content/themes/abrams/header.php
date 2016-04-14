<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?><!DOCTYPE html>
<html class="no-js">
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Abrams Eyecare</title>
    <meta name="keywords" content="">

      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/app.css" />
      <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" />
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css" />
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/dark.css" />
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-icons.css" />
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css" />
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css" />
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" />
    	
  		<!-- fontawesome -->
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

      <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
  <?php wp_head(); ?>
</head>

<body <?php body_class( $class ); ?>> 

	<!-- Header
    ============================================= -->
    <header id="header" class="sticky-style-3">

      <div class="container clearfix">

        <!-- Logo
        ============================================= -->
        <div id="logo">
          <a href="<?php bloginfo('url'); ?>" class="standard-logo" data-dark-logo="images/logo-dark.png"><img class="img-center" src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg"></a>
          <a href="<?php bloginfo('url'); ?>" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img class="img-center" src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg"></a>
        </div><!-- #logo end -->

        <ul class="header-extras">
          <li>
            <i class="i-plain icon-email3 nomargin"></i>
            <div class="he-text">
              Drop an Email
              <a href="mailto:serveradmin@abramseyecare.com"><span>serveradmin@abramseyecare.com</span></a>
            </div>
          </li>
          <li>
            <i class="i-plain icon-call nomargin"></i>
            <div class="he-text">
              Get in Touch
              <span><a href="tel:877-846-4223">1-877-846-4223</a></span>
            </div>
          </li>
        </ul>

      </div>

      <div id="header-wrap">

        <!-- Primary Navigation
        ============================================= -->
        <nav id="primary-menu" class="style-2 sub-title">

          <div class="container clearfix">

            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

            <ul>
              <li><a href="<?php bloginfo('url'); ?>"><div>Home</div></a></li>
              <li><a href="<?php bloginfo('url'); ?>/about"><div>About Us</div></a></li>
              <li><a href="<?php bloginfo('url'); ?>/doctors"><div>Our Doctors</div></a>
                <ul>
                  <li><a href="<?php bloginfo('url'); ?>/doctors"><div>Dr. Abrams</div></a></li>
                  <li><a href="<?php bloginfo('url'); ?>/doctors/doctor-j-j-abrams"><div>Dr. JJ Abrams</div></a></li>
                  <li><a href="<?php bloginfo('url'); ?>/doctors/doctor-jones"><div>Dr. Jones</div></a></li>
                  <li><a href="<?php bloginfo('url'); ?>/doctors/doctor-lloyd"><div>Dr. Lloyd</div></a></li>
                  <li><a href="<?php bloginfo('url'); ?>/doctors/doctor-mann"><div>Dr. Mann</div></a></li>
                  <li><a href="<?php bloginfo('url'); ?>/doctors/doctor-rothbaum"><div>Dr. Rothbaum</div></a></li>
                </ul>
              </li>
              <li><a href="<?php bloginfo('url'); ?>/first-visit"><div>Patient Portal</div></a>
                <ul>
                  <li><a href="<?php bloginfo('url'); ?>/first-visit"><div>First Visit</div></a></li>
                  <li><a href="<?php bloginfo('url'); ?>/forms"><div>Forms</div></a></li>
                  <li><a href="<?php bloginfo('url'); ?>/insurance"><div>Insurance</div></a></li>
                  <li><a href="<?php bloginfo('url'); ?>/registration"><div>Online Registration</div></a></li>
                  <li><a href="<?php bloginfo('url'); ?>/contact"><div>Directions</div></a></li>
                </ul>
              </li>
              </li>
              <li class="mega-menu"><a href="<?php bloginfo('url'); ?>/lasik-home"><div>Lasik</div></a>
                 <div class="mega-menu-content col-2 clearfix">
                  <ul>
                    <li>
                      <ul>
                        <li><a href="<?php bloginfo('url'); ?>/lasik-home"><div>LASIK Home</div></a></li>
                        <li><a href="<?php bloginfo('url'); ?>/lasik-surgery"><div>LASIK Surgery</div></a></li>
                        <li><a href="<?php bloginfo('url'); ?>/prk"><div>PRK</div></a></li>
                        <li><a href="<?php bloginfo('url'); ?>/custom"><div>Custom LVC</div></a></li>
                      </ul>
                    </li>
                  </ul>
                  <ul>
                    <li>
                      <ul>
                        <li><a href="<?php bloginfo('url'); ?>/intralase"><div>Intralase</div></a></li>
                        <li><a href="<?php bloginfo('url'); ?>/candidates"><div>Candidates</div></a></li>
                        <li><a href="<?php bloginfo('url'); ?>/surgery-info"><div>Surgery Information</div></a></li>
                        <li><a href="<?php bloginfo('url'); ?>/payment-options"><div>Payment Options</div></a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </li>
             <li class="mega-menu"><a href="<?php bloginfo('url'); ?>/procedures"><div>Eye Procedures</div></a>
                 <div class="mega-menu-content col-2 clearfix">
                  <ul>
                    <li>
                      <ul>
                        <li><a href="<?php bloginfo('url'); ?>/procedures"><div>Eye Procedures Home</div></a></li>
                        <li><a href="<?php bloginfo('url'); ?>/yag-capsulotomy"><div>Yag Capsulotomy</div></a></li>
                        <li><a href="<?php bloginfo('url'); ?>/trabeculectomy-or-tube-shunt"><div>Trabeculectomy</div></a></li>
                        <li><a href="<?php bloginfo('url'); ?>/blepharoplasty"><div>Blepharoplasty</div></a></li>
                        <li><a href="<?php bloginfo('url'); ?>/pterygiums"><div>Pterygiums</div></a></li>
                        <li><a href="<?php bloginfo('url'); ?>/lid-lesioncysts"><div>Laser Relaxing Incisions</div></a></li>
                      </ul>
                    </li>
                  </ul>
                  <ul>
                    <li>
                      <ul>
                        <li><a href="<?php bloginfo('url'); ?>/cataract"><div>Cataract</div></a></li>
                        <li><a href="<?php bloginfo('url'); ?>/slt"><div>SLT</div></a></li>
                        <li><a href="<?php bloginfo('url'); ?>/diabetic-laser-treatment"><div>Diabetic Laser Treatment</div></a></li>
                        <li><a href="<?php bloginfo('url'); ?>/lid-lesioncysts"><div>Lid Lesion/Cysts</div></a></li>
                        <li><a href="<?php bloginfo('url'); ?>/nld-probing"><div>NLD Probing</div></a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </li>
              <li><a href="<?php bloginfo('url'); ?>/retail"><div>Optical</div></a>
                <ul>
                  <li><a href="<?php bloginfo('url'); ?>/eyewear-lines"><div>Eyewear Lines</div></a></li>
                  <li><a href="<?php bloginfo('url'); ?>/eyewear-faq"><div>FAQ</div></a></li>
                </ul>
              </li>
               <li><a href="<?php bloginfo('url'); ?>/contact"><div>Contact Us</div></a></li>
            </ul>

          </div>

        </nav><!-- #primary-menu end -->

      </div>

    </header><!-- #header end -->