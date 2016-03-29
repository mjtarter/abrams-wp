<?php
/**
 * The template for displaying all single posts and attachments
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
      <li><a href="<?php bloginfo('url'); ?>/doctors">Our Doctors</a></li>
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

				<?php $loop = new WP_Query( array( 'post_type' => 'doctors', 'posts_per_page' => -1 ) ); ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <div class="col-md-4 col-sm-6 bottommargin">
          <div class="team">
            <div class="team-desc team-desc-bg dr">
              <a href="<?php the_permalink(); ?>"><img src="<?php the_field('headshot'); ?>"></a><hr>
              <div class="team-title">
                <a href="<?php the_permalink(); ?>"><h4><?php the_field('name'); ?></h4></a>
                <span><?php the_field('doctor_type'); ?></span>
                <p><?php the_field('short_bio'); ?></p>
                <a href="<?php the_permalink(); ?>" class="button button-3d button-rounded button-blue">More</a>
              </div>
            </div>
          </div>
        </div>

        <?php endwhile; wp_reset_query(); ?>

			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>