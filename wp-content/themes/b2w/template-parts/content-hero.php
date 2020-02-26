<?php
 //Custom Fields
 $prelaunch_price =get_post_meta(10, 'prelaunch_price', true );
 $launch_price =get_post_meta(10, 'launch_price', true );
 $final_price =get_post_meta(10, 'final_price', true );
 $custom_url = get_post_meta(10, 'custom_url', true);
 $buttom_text = get_post_meta(10, 'buttom_text', true);
 
?>
<!--HERO -->
<section id="hero" data-type="background" data-speed="5">
  <article>
    <div class="container clearfix">
      <div class="row">
        <div class="col-md-5">
          <img src="<?php bloginfo("stylesheet_directory");?>/assets/img/logo-badge.png" alt="Bootstrap to Wordpress"
            class="logo">
        </div>
        <div class="col-md-7 hero-text">
          <h1><?php bloginfo('name') ?></h1>
          <p class="lead"><?php bloginfo('description') ?></p>
          <div id="price-timeline">
            <div class="price active">
              <h4>Pre-Launch Price<small>Ends soon! <span><?php echo( $prelaunch_price)?></span></small></h4>
            </div>
            <div class="price">
              <h4>Launch Price<small>Coming soon! <span><?php echo( $launch_price)?></span></small></h4>
            </div>
            <div class="price">
              <h4>Final Price <small>Coming soon! <span><?php echo( $final_price)?></span></small></h4>
            </div>
          </div>
          <p><a href="<?php echo $custom_url ?>" class="btn btn-lg btn-danger" role="button"
              target="_blank"><?php echo $buttom_text  ?></a></p>
        </div>
      </div>
    </div>
    <!--End of container-->
  </article>
</section>