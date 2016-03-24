<?php
/**
 * Template Name: Homepage Template
 *
 */
get_header(); ?>

<section id="slider" class="slider-parallax swiper_wrapper clearfix">

			<div class="swiper-container swiper-parent">
				<div class="swiper-wrapper">
        <div class="swiper-slide dark" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/eye-exam.jpg');">
						<div class="container clearfix">
							<div class="slider-caption slider-caption-center">
								<h2 data-caption-animate="fadeInUp">Abrams Eyecare</h2>
								<p data-caption-animate="fadeInUp" data-caption-delay="200">Enhancing Vision Since 1950</p>
							</div>
						</div>
					</div>
					<div class="swiper-slide dark">
						<div class="container clearfix">
							<div class="slider-caption slider-caption-center">
								<h2 data-caption-animate="fadeInUp">New Office!</h2>
								<p data-caption-animate="fadeInUp" data-caption-delay="200">Our WEST office is moving around the corner. Stay tuned for more updates and exact moving dates.</p>
							</div>
						</div>
						<div class="video-wrap" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/abrams-eyecare-office.jpg'); background-size: cover; background-position: center center;">
							<div class="video-overlay" style="background-color: rgba(0,0,0,0.15);"></div>
						</div>
					</div>
				</div>
				<div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
				<div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
				<div id="slide-number"><div id="slide-number-current"></div><span>/</span><div id="slide-number-total"></div></div>
			</div>

			<script>
				jQuery(document).ready(function($){
					var swiperSlider = new Swiper('.swiper-parent',{
						paginationClickable: false,
						slidesPerView: 1,
						grabCursor: true,
						onSwiperCreated: function(swiper){
							$('[data-caption-animate]').each(function(){
								var $toAnimateElement = $(this);
								var toAnimateDelay = $(this).attr('data-caption-delay');
								var toAnimateDelayTime = 0;
								if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 750; } else { toAnimateDelayTime = 750; }
								if( !$toAnimateElement.hasClass('animated') ) {
									$toAnimateElement.addClass('not-animated');
									var elementAnimation = $toAnimateElement.attr('data-caption-animate');
									setTimeout(function() {
										$toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
									}, toAnimateDelayTime);
								}
							});
						},
						onSlideChangeStart: function(swiper){
							$('#slide-number-current').html(swiper.activeIndex + 1);
							$('[data-caption-animate]').each(function(){
								var $toAnimateElement = $(this);
								var elementAnimation = $toAnimateElement.attr('data-caption-animate');
								$toAnimateElement.removeClass('animated').removeClass(elementAnimation).addClass('not-animated');
							});
						},
						onSlideChangeEnd: function(swiper){
							$('#slider .swiper-slide').each(function(){
								if($(this).find('video').length > 0) { $(this).find('video').get(0).pause(); }
							});
							$('#slider .swiper-slide:not(".swiper-slide-active")').each(function(){
								if($(this).find('video').length > 0) {
									if($(this).find('video').get(0).currentTime != 0 ) $(this).find('video').get(0).currentTime = 0;
								}
							});
							if( $('#slider .swiper-slide.swiper-slide-active').find('video').length > 0 ) { $('#slider .swiper-slide.swiper-slide-active').find('video').get(0).play(); }

							$('#slider .swiper-slide.swiper-slide-active [data-caption-animate]').each(function(){
								var $toAnimateElement = $(this);
								var toAnimateDelay = $(this).attr('data-caption-delay');
								var toAnimateDelayTime = 0;
								if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 300; } else { toAnimateDelayTime = 300; }
								if( !$toAnimateElement.hasClass('animated') ) {
									$toAnimateElement.addClass('not-animated');
									var elementAnimation = $toAnimateElement.attr('data-caption-animate');
									setTimeout(function() {
										$toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
									}, toAnimateDelayTime);
								}
							});
						}
					});

					$('#slider-arrow-left').on('click', function(e){
						e.preventDefault();
						swiperSlider.swipePrev();
					});

					$('#slider-arrow-right').on('click', function(e){
						e.preventDefault();
						swiperSlider.swipeNext();
					});

					$('#slide-number-current').html(swiperSlider.activeIndex + 1);
					$('#slide-number-total').html(swiperSlider.slides.length);
				});
			</script>

		</section>

		<!-- Content
		============================================= -->
		<section id="content">
				<div class="container clearfix topmargin">

					<h3>Abrams EyeCare Associates is one of the most comprehensive eye care groups in central Indiana.</h3>
					<p>Abrams EyeCare Associates exists for the purpose of providing our patients with the highest quality medical and surgical eye care in central Indiana. We combine the most skilled ophthalmologists, optometrists, and professional staff with the latest technology and techniques available.</p>
					<p>Abrams EyeCare Associates shall always strive to treat our patients with the greatest compassion, empathy, and respect while giving the individualized care they deserve. Through unity and teamwork, we will continue to provide excellence in all aspects of eye care for our community.</p>
					<div class="text-center"><a href="<?php bloginfo('url'); ?>/forms" class="button button-3d button-rounded button-blue">Pre-Registration Forms</a>
					<a href="<?php bloginfo('url'); ?>/lasik" class="button button-3d button-rounded button-blue">Learn About LASIK</a></div>

					<div class="clear"></div><div class="line bottommargin-lg"></div>

					<div class="col_two_fifth nobottommargin text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/abrams-eyecare-office.jpg">
					</div>

					<div class="col_three_fifth nobottommargin col_last">

						<div class="heading-block">
							<h2>New Office</h2>
						</div>

						<p>Our West office is moving late March or early April! Moving to the first floor of Eagle Properties just around the corner on Shore Drive. Keep checking here for updates and photos as construction progresses.</p>

					</div>

					<div class="clear"></div><div class="line bottommargin-lg"></div>

					<div class="col_two_fifth nobottommargin text-center">
						<img class="img-center" src="<?php echo get_template_directory_uri(); ?>/img/smart-board.jpg">
					</div>

					<div class="col_three_fifth nobottommargin col_last">

						<div class="heading-block">
							<h2>Caring for our Community</h2>
						</div>

						<p>Abrams EyeCare participated at the "Through the Looking Glass" Gala fundraiser for the IN School for the Blind and donated a "SmartBoard" to the school. SmartBoards visual technology helps make images larger and more effective. Anything that is on a computer can be displayed on the SmartBoard, and printed into braille. SmartBoards have a suite of tools for teachers to enhance classroom learning and interaction. These SmartBoards get students up and out of their seats, interacting on the SmartBoard and with other students.</p>

					</div>

					<div class="clear"></div>

				</div>

				<div class="section nobottommargin topmargin-lg" data-animate="fadeIn" style="animation-duration: .5s;">
					<div class="container clearfix">

						<div class="heading-block center">
							<h2>Comprehensive Eyecare</h2>
						</div>

						<div class="clear bottommargin-sm"></div>

						<div class="col_one_third">
							<div class="feature-box fbox-small fbox-plain">
								<div class="fbox-icon">
									<a href="#"><i class="icon-eye"></i></a>
								</div>
								<h3>Medical and Surgical Eye Care</h3>
								<p>Phasellus commodo sapien ut, quisque ac convallis, eiusmod amet mi nullam augue, et dolor nulla pede id cras urna, et sollicitudin turpis et.</p>
							</div>
						</div>

						<div class="col_one_third">
							<div class="feature-box fbox-small fbox-plain">
								<div class="fbox-icon">
									<a href="#"><i class="icon-eye"></i></a>
								</div>
								<h3>Eye exams for Adults and Children</h3>
								<p>Phasellus commodo sapien ut, quisque ac convallis, eiusmod amet mi nullam augue, et dolor nulla pede id cras urna, et sollicitudin turpis et.</p>
							</div>
						</div>

						<div class="col_one_third col_last">
							<div class="feature-box fbox-small fbox-plain">
								<div class="fbox-icon">
									<a href="#"><i class="icon-eye"></i></a>
								</div>
								<h3>Laser Vision Correction</h3>
								<p>Phasellus commodo sapien ut, quisque ac convallis, eiusmod amet mi nullam augue, et dolor nulla pede id cras urna, et sollicitudin turpis et.</p>
							</div>
						</div>

						<div class="clear"></div>

						<div class="col_one_third">
							<div class="feature-box fbox-small fbox-plain">
								<div class="fbox-icon">
									<a href="#"><i class="icon-eye"></i></a>
								</div>
								<h3>Treatment of Diseases of the Eyes</h3>
								<p>Phasellus commodo sapien ut, quisque ac convallis, eiusmod amet mi nullam augue, et dolor nulla pede id cras urna, et sollicitudin turpis et.</p>
							</div>
						</div>

						<div class="col_one_third">
							<div class="feature-box fbox-small fbox-plain">
								<div class="fbox-icon">
									<a href="#"><i class="icon-eye"></i></a>
								</div>
								<h3>Eye Glasses/Contact Lenses</h3>
								<p>Phasellus commodo sapien ut, quisque ac convallis, eiusmod amet mi nullam augue, et dolor nulla pede id cras urna, et sollicitudin turpis et.</p>
							</div>
						</div>

						<div class="col_one_third col_last">
							<div class="feature-box fbox-small fbox-plain">
								<div class="fbox-icon">
									<a href="#"><i class="icon-eye"></i></a>
								</div>
								<h3>Ocular Supplements</h3>
								<p>Phasellus commodo sapien ut, quisque ac convallis, eiusmod amet mi nullam augue, et dolor nulla pede id cras urna, et sollicitudin turpis et.</p>
							</div>
						</div>

					</div>
				</div>

		</section><!-- #content end -->
		
<?php get_footer(); ?>
