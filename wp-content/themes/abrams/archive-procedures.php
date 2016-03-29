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

</section><!-- #page-title end -->

<div class="bg">

  <div class="container white-bg">
    <div class="section nobottommargin" id="doctors">
      <div class="row topmargin-sm">

        <div class="heading-block center">
          <h3>Our Doctors</h3>
        </div>

         <?php
          // Start the Loop.
          while ( have_posts() ) : the_post(); ?>

        <?php the_field('procedure_name'); ?>

        <?php endwhile; ?>

      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
