<section>
  <h2>Most Recent Blogs</h2>
  <div class="js-carousel">


  <?php
    // The Query
    // Link: https://developer.wordpress.org/reference/classes/wp_query/#parameters

    $args = [
      // 'post_type'      => ['post', 'projects'], use this if you want to include multiple post types
      'post_type'      => 'post',
      'post_status'    => 'publish',
      'posts_per_page' => 3
    ];
    $the_query = new WP_Query($args);
  ?>

  <?php if ($the_query->have_posts()) : ?>
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>  
      <div>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
        <div><?php the_excerpt(); ?></div>
    <?php endwhile; ?>
  <?php else : ?>
    <h2>Sorry, no results</h2>
  <?php endif; ?>
    </div>
</section>