<?php
/*
Template Name: General
*/
?>
<?php get_header();?>
<!--blog body-->
<div id="Blog-post"> 
  <!-- banner Page
    ==========================================-->

  <header class="entry-header" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/s-1.jpg);">
    <div class="content  wow fadeInUp">
      <div class="container">
        <h1><?php the_title(); ?></h1>
    </div>
  </header>
  <div class="container">
    <div class="row wow fadeInUp"> 
      <!--blog posts container-->
      <div class="col-md-10 col-sm-10 col-md-offset-1 single-post">
        <article class="post">   
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
        </article>
		<br>
        <div class="clearfix"></div>
      </div>
      <!--blog posts container-->
      
      <div class="clearfix"></div>
    </div>
  </div>
</div>
<?php get_footer();?>
