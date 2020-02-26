<?php
/**
    Template Name: Full - width template
 */
get_header();
$thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
?>
	<!-- FEATURE IMAGE
    ================================================== -->
    <?php if(has_post_thumbnail()) { //Check for feature image?>
        <section class="feature-image" style="background:url('<?php echo $thumbnail_url ?>') no-repeat; background-size: cover;" data-type="background" data-speed="2">
            <h1 class="page-title"><?php the_title();?></h1>
        </section>
    <?php } else{ //fallback image?>
    <section class="feature-image feature-image-default" data-type="background" data-speed="2">
            <h1 class="page-title"><?php the_title();?></h1>
    </section>
    <?php } ?> 
<!-- MAIN CONTENT
 ================================================== -->
<div class="container">
    <div class="row" id="primary">

        <div id="content" class="col-md-12">

            <section class="main-content">
            <?php while(have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                    <?php endwhile;?>
            </section>

        </div><!-- content -->

    </div><!-- primary -->
</div><!-- container -->
<?php
get_footer();