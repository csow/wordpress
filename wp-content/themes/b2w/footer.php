<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package B2W
 */

?>



<?php wp_footer(); ?>
  <!--SIGN UP -->
  <section id="signup" data-type="background" data-speed="4">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<h2>Are you ready to take your coding skills to the <strong>next level</strong>?</h2>
					<p><a href="" class="btn btn-lg btn-block btn-success">Yes, sign me up!</a></p>
				</div><!-- end col -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- signup -->
  <!--FOOTER -->
  <footer>
		<div class="container">
      <div class="row">
        <div class="col-md-3">
          <p><a href="/"><img src="<?php bloginfo("stylesheet_directory");?>/assets/img/logo.png" alt="Bootstrap to WordPress"></a></p>
        </div><!-- end col -->
        <div class="col-md-6">
        <?php
          wp_nav_menu(array(
            'theme_location'  =>'menu-2',
            'container'       => 'nav',
            'menu_class'      => 'list-unstyled d-flex justify-content-around'
          ));
		?>
        </div><!-- end col -->
        <div class="col-md-3">
          <p class="float-right">&copy; <?php echo date('Y') ?></p>
        </div><!-- end col -->
      </div>

		</div><!-- container -->
	</footer>
  <!--MODAL -->
  <div class="modal fade" id="MyModal" tabindex="-1" role="dialog" aria-labelledby="MyModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="MyModal"> <i class="fas fa-envelope"></i> Subscrice to our mailing list.</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Simply enter your name and email! As a thank you for joining us, we're going to give you one of our best
            selling course <em>for free!</em></p>
        </div>
        <form class="form-inline center" role="form">
          <div class="form-group">
            <label for="subscribe-name" class="sr-only">Your first name</label>
            <input type="text" class="form-control short-input" id="subscribe-name" placeholder="Your first name">
          </div>
          <div class="form-group">
            <label for="subscribe-email" class="sr-only">and your email</label>
            <input type="text" class="form-control short-input" id="subscribe-email" placeholder="and your email">
          </div>
          <input type="submit" value="Subscribe" class="btn btn-danger">
        </form>
        <hr>
        <p class="need-padding"><small>By providing your email you consent to receviving occaisional promotional email
            and
            newsletters</small></p>
      </div>
    </div>
  </div>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-3.4.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
</body>
</html>