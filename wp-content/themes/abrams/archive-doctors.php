<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<!-- Page Title
    ============================================= -->
<section id="page-title">

  <div class="container clearfix">
    <h1>Doctor <?php the_field('name'); ?></h1>
    <ol class="breadcrumb">
      <li><a href="doctor-abrams.html">Our Doctors</a></li>
      <li class="active"><?php the_field('name'); ?></li>
    </ol>
  </div>

</section><!-- #page-title end -->

<div class="bg">
  <div class="container white-bg" id="bio">
    <div class="col-sm-12">
      <img src="<?php the_field('photo'); ?>">
      <?php the_field('bio'); ?>
    </div>
  </div>

  <div class="container white-bg">
    <div class="section nobottommargin" id="doctors">
      <div class="row topmargin-sm">

        <div class="heading-block center">
          <h3>Our Doctors</h3>
        </div>

         <?php
          // Start the Loop.
          while ( have_posts() ) : the_post(); ?>

        <div class="col-md-4 col-sm-6 bottommargin">
          <div class="team">
            <div class="team-desc team-desc-bg dr">
              <a href="doctor-abrams.html"><img src="<?php the_field('headshot'); ?>"></a><hr>
              <div class="team-title">
                <a href="doctor-abrams.html"><h4><?php the_field('name'); ?></h4></a>
                <span><?php the_field('doctor_type'); ?></span>
                <p><?php the_field('short_bio'); ?></p>
                <a href="doctor-abrams.html" class="button button-3d button-rounded button-blue">More</a>
              </div>
            </div>
          </div>
        </div>

        <?php endwhile; ?>

      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
