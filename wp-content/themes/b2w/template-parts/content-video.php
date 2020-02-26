<?php
$course_indtrudaction_title = get_field('course_indrutaction_title');
$course_indtrudaction_video = get_field('course_indrutaction_video');
?>
<section id="featurette">
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <h2><?php echo $course_indtrudaction_title ?></h2>
        <iframe width="100%" height="415" src="https://www.youtube.com/embed/snFzbPm_RUE" frameborder="0"
          allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</section>
