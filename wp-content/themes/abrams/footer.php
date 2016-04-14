<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<!-- Footer
    ============================================= -->
    <footer id="footer" class="dark">

      <div class="container">

        <!-- Footer Widgets
        ============================================= -->
        <div class="footer-widgets-wrap clearfix">

          <div class="col_two_third">

            <div class="widget clearfix">
        
              <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/img/abrams-logo.png">

              <p>Abrams EyeCare Associates shall always strive to treat our patients with the greatest <strong>compassion, empathy, and respect</strong> while giving the individualized care they deserve.</p>

            
                <address class="col-sm-4">
                  <strong>North:</strong><br>
                  11455 N. Meridian St. Suite 100<br>
                  Carmel, IN 46032<br>
                  office: (317) 846-4223<br>
                  optical: (317) 844-3122
                </address>
                <address class="col-sm-4">
                  <strong>Midtown:</strong><br>
                  1801 North Senate Suite 620<br>
                  Indianapolis, IN 46202<br>
                  office: (317) 926-6699<br>
                  optical: (317) 921-1720
                </address>
                <address class="col-sm-4">
                  <strong>West:</strong><br>
                  6920 Parkdale Place Suite 206<br>
                  Indianapolis, IN 46254<br>
                  office: (317) 293-1420<br>
                  optical: (317) 293-6177
                </address>
                
            </div>

              <a href="https://www.facebook.com/Abrams-EyeCare-Associates-100829166480/" target="_blank" class="social-icon si-small si-rounded si-facebook">
                <i class="icon-facebook"></i>
                <i class="icon-facebook"></i>
              </a>

              <a href="https://twitter.com/abramseyecare" target="_blank" class="social-icon si-small si-rounded si-twitter">
                <i class="icon-twitter"></i>
                <i class="icon-twitter"></i>
              </a>

              <a href="https://plus.google.com/116308268019796069073/about" target="_blank" class="social-icon si-small si-rounded si-gplus">
                <i class="icon-gplus"></i>
                <i class="icon-gplus"></i>
              </a>

          </div>


          <div class="col_one_third col_last">

            <div class="widget quick-contact-widget clearfix">

              <h4>Contact Our Office</h4>

              <div id="quick-contact-form-result" data-notify-type="success" data-notify-msg="<i class=icon-ok-sign></i> Message Sent Successfully!"></div>

              <form id="quick-contact-form" name="quick-contact-form" action="include/quickcontact.php" method="post" class="quick-contact-form nobottommargin">

                <div class="form-process"></div>

                <div class="input-group divcenter">
                  <span class="input-group-addon"><i class="icon-user"></i></span>
                  <input type="text" class="required form-control input-block-level" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="Full Name" />
                </div>
                <div class="input-group divcenter">
                  <span class="input-group-addon"><i class="icon-email2"></i></span>
                  <input type="text" class="required form-control email input-block-level" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="Email Address" />
                </div>
                <textarea class="required form-control input-block-level short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="4" cols="30" placeholder="How can we help you?"></textarea>
                <input type="text" class="hidden" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
                <button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="button button-3d button-rounded button-blue nomargin" value="submit">Send Email</button>
              </form>

              <script type="text/javascript">

                $("#quick-contact-form").validate({
                  submitHandler: function(form) {
                    $(form).animate({ opacity: 0.4 });
                    $(form).find('.form-process').fadeIn();
                    $(form).ajaxSubmit({
                      target: '#quick-contact-form-result',
                      success: function() {
                        $(form).animate({ opacity: 1 });
                        $(form).find('.form-process').fadeOut();
                        $(form).find('.form-control').val('');
                        $('#quick-contact-form-result').attr('data-notify-msg', $('#quick-contact-form-result').html()).html('');
                        SEMICOLON.widget.notifications($('#quick-contact-form-result'));
                      }
                    });
                  }
                });

              </script>

            </div>

          </div>

        </div><!-- .footer-widgets-wrap end -->

      </div>

      <!-- Copyrights
      ============================================= -->
      <div id="copyrights">

        <div class="container clearfix">

          <div class="col-lg-12 nobottommargin text-center">
            <a href="<?php bloginfo('url'); ?>/copyright">Copyright</a> &nbsp; | &nbsp; <a href="<?php bloginfo('url'); ?>/privacy-notice">Privacy Notice</a> &nbsp; | &nbsp;  <a href="<?php bloginfo('url'); ?>/disclaimer">Disclaimer</a>
          </div>

        </div>

      </div><!-- #copyrights end -->

    </footer><!-- #footer end -->

  </div><!-- #wrapper end -->

    <script src="<?php echo get_template_directory_uri(); ?>/js/functions.js"></script>

<?php wp_footer(); ?>

</body>
</html>