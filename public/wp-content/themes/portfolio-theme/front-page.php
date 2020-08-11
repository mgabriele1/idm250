<?php
/**
 * The template for displaying the front page.
 *
 * This is the template that displays on the front page only.
 * Set this in settings > reading > static page
 *
 */

get_header();?>
Front Page
<?php
$args = [
  'post_type'      => 'post',
  'post_status'    => 'publish',
  'posts_per_page' => -1
];
// The Query
// Link: https://developer.wordpress.org/reference/classes/wp_query/#parameters
$the_query = new WP_Query($args); ?>
 
<?php if ($the_query->have_posts()) : ?>
 
    <!-- pagination here -->
 
    <!-- the loop -->
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <h2><?php the_title(); ?></h2>
    <?php endwhile; ?>
    <!-- end of the loop --> 
    
    <?php
    // After looping through a separate query, this function restores the $post global to the current post in the main query.
    wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
