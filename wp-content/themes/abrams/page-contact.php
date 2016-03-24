<?php
/**
 * Template Name: Contact Template
 *
 */
get_header(); ?>


<!-- Page Title
		============================================= -->
<section id="page-title">

	<div class="container clearfix">
		<h1>Contact</h1>
		<ol class="breadcrumb">
			<li class="active">Contact</li>
		</ol>
	</div>

</section><!-- #page-title end -->

<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container">

					<!-- Location 1
					============================================= -->
					<div class="col_half pb-40">

						<div class="fancy-title title-dotted-border">
							<h3>North Location</h3>
						</div>
						<div class="col-md-6">
							<address>
								<strong>Address:</strong><br>
								11455 N. Meridian Street Suite 100<br>
								Carmel, IN 46032<br>
							</address>
							<abbr title="Phone Number"><strong>Phone:</strong></abbr> (317) 846-4223<br>
							<abbr title="Fax"><strong>Fax:</strong></abbr> (317) 573-0748<br>
							<abbr title="Optical Number"><strong>Optical:</strong></abbr> (317) 844-3122<br><br>
							<strong>Office Hours:</strong><br>
								8:00-5:00 M - F<br>
								8:00-12:00 Sa<br>
								First and Third Saturday of the Month
						</div>
						<div class="col-md-6">
							<strong>Special Driving Instructions:</strong><br>
								North on Meridian Street (US 31) to 116th Street, turn right (east), one block to Pennsylvania. Turn right (south), 2 story building (third building) on right (west) side of street.
						</div>


						<div class="clear"></div>

					</div><!-- Contact Form End -->

					<!-- Google Map
					============================================= -->
					<div class="col_half col_last pb-40">

						<section id="google-map" class="gmap" style="height: 410px;"></section>

						<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
						<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.gmap.js"></script>

						<script type="text/javascript">

							jQuery('#google-map').gMap({

								address: '11455 N. Meridian Street, Carmel, IN',
								maptype: 'ROADMAP',
								zoom: 14,
								markers: [
									{
										address: "Melbourne, Australia",
										html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;">Hi, we\'re <span>Envato</span></h4><p class="nobottommargin">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day, and a network of educational blogs where millions learn <strong>creative skills</strong>.</p></div>',
										icon: {
											image: "images/icons/map-icon-red.png",
											iconsize: [32, 39],
											iconanchor: [32,39]
										}
									}
								],
								doubleclickzoom: false,
								controls: {
									panControl: true,
									zoomControl: true,
									mapTypeControl: true,
									scaleControl: false,
									streetViewControl: false,
									overviewMapControl: false
								}

							});

						</script>

					</div><!-- Google Map End -->

					<!-- Location 2
					============================================= -->
					<div class="col_half pb-40">

						<div class="fancy-title title-dotted-border">
							<h3>Midtown Location</h3>
						</div>
						<div class="col-md-6">
							<address>
								<strong>Address:</strong><br>
								1801 North Senate Suite 620<br>
								Indianapolis, IN 46202<br>
							</address>
							<abbr title="Phone Number"><strong>Phone:</strong></abbr> (317) 926-6699<br>
							<abbr title="Fax"><strong>Fax:</strong></abbr> (317) 921-1723<br>
							<abbr title="Optical Number"><strong>Optical:</strong></abbr> (317) 921-1720<br><br>
							<strong>Office Hours:</strong><br>
								8:00-5:00 M-F<br>
						</div>
						<div class="col-md-6">
							<strong>Special Driving Instructions:</strong><br>
								Professional Center is on the north side of Methodist Hospital. Park in Garage 2.
						</div>


						<div class="clear"></div>

					</div><!-- Contact Form End -->

					<!-- Google Map
					============================================= -->
					<div class="col_half col_last pb-40">

						<section id="google-map3" class="gmap" style="height: 410px;"></section>

						<script type="text/javascript">

							jQuery('#google-map3').gMap({

								address: '11455 N. Meridian Street, Carmel, IN',
								maptype: 'ROADMAP',
								zoom: 14,
								markers: [
									{
										address: "Melbourne, Australia",
										html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;">Hi, we\'re <span>Envato</span></h4><p class="nobottommargin">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day, and a network of educational blogs where millions learn <strong>creative skills</strong>.</p></div>',
										icon: {
											image: "images/icons/map-icon-red.png",
											iconsize: [32, 39],
											iconanchor: [32,39]
										}
									}
								],
								doubleclickzoom: false,
								controls: {
									panControl: true,
									zoomControl: true,
									mapTypeControl: true,
									scaleControl: false,
									streetViewControl: false,
									overviewMapControl: false
								}

							});

						</script>

					</div><!-- Google Map End -->

					<!-- Location 3
					============================================= -->
					<div class="col_half">

						<div class="fancy-title title-dotted-border">
							<h3>West Location</h3>
						</div>
						<div class="col-md-6">
							<address>
								<strong>Address:</strong><br>
								6920 Parkdale Place Suite 206<br>
								Indianapolis, IN 46254<br>
							</address>
							<abbr title="Phone Number"><strong>Phone:</strong></abbr> (317) 293-1420<br>
							<abbr title="Fax"><strong>Fax:</strong></abbr> (317) 297-6507<br>
							<abbr title="Optical Number"><strong>Optical:</strong></abbr> (317) 293-6177 <br><br>
							<strong>Office Hours:</strong><br>
								8:00-5:00 M - F<br>
								8:00-12:00 Sa<br>
								Second and Fourth Saturday of the Month
						</div>
						<div class="col-md-6">
							<strong>Special Driving Instructions:</strong><br>
								I-465 to West 38th Street. West on 38th Street to 2nd stoplight, turn right onto Eagle Creek Parkway, 1 1/2 blocks to Eagle Highlands Way, turn right into parking lot. 
						</div>


						<div class="clear"></div>

					</div><!-- Contact Form End -->

					<!-- Google Map
					============================================= -->
					<div class="col_half col_last">

						<section id="google-map2" class="gmap" style="height: 410px;"></section>

						<script type="text/javascript">

							jQuery('#google-map2').gMap({

								address: '11455 N. Meridian Street, Carmel, IN',
								maptype: 'ROADMAP',
								zoom: 14,
								markers: [
									{
										address: "Melbourne, Australia",
										html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;">Hi, we\'re <span>Envato</span></h4><p class="nobottommargin">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day, and a network of educational blogs where millions learn <strong>creative skills</strong>.</p></div>',
										icon: {
											image: "images/icons/map-icon-red.png",
											iconsize: [32, 39],
											iconanchor: [32,39]
										}
									}
								],
								doubleclickzoom: false,
								controls: {
									panControl: true,
									zoomControl: true,
									mapTypeControl: true,
									scaleControl: false,
									streetViewControl: false,
									overviewMapControl: false
								}

							});

						</script>

					</div><!-- Google Map End -->

				</div>

			</div>

		</section><!-- #content end -->

<?php get_footer(); ?>