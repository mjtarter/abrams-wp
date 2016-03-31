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
    <h1>Eye Procedures Home</h1>
    <ol class="breadcrumb">
      <li class="active">Eye Procedures</li>
    </ol>
  </div>

</section><!-- #page-title end -->

<div class="container white-bg ptb-50" id="lasik">
  <div class="row">

    <?php
    // Start the Loop.
    while ( have_posts() ) : the_post(); ?>

      <div class="col-sm-12">
        <p class="surgery-title nobottommargin pb-10"><?php the_field('procedure_name'); ?></p>
        <p><?php the_field('short_description'); ?></p>
        <div class="text-center"> <a href="<?php the_permalink(); ?>" class="button button-3d button-rounded button-mini button-blue">More Info</a></div>
      </div>

      <?php endwhile; ?>

  </div>
  <hr>
  <div class="row">
    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
      <a href="http://www.carecredit.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/care-credit.gif" class="center-block">
      <p class="allmargin-sm no-link-color">Abrams EyeCare gives you the freedom to have your procedure whenever you're ready. It's easy to apply. With three simple steps, including an instant approval process, you can say goodbye to the waiting time and reward yourself sooner. Ask our staff for details.</p>
      <img src="<?php echo get_template_directory_uri(); ?>/img/nothinghold.gif" class="center-block"></a>
    </div>
  </div>
</div>

<?php get_footer(); ?>
