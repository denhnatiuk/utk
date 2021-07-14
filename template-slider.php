<?php
/**
 *
 * @package WordPress
 * @subpackage utk
 * @since 0.1
 * @version 0.1
 */

?>
/**
 * Template Name: Template for Client Brands Slider
 */
 <?php
     $args = array(
           'post_type' => 'page',
           'post_status' => 'publish',
           'posts_per_page' => '1',
           'orderby' => 'date',
           'meta_query' => array(
               array(
                   'key' => '_wp_page_template',
                   'value' => 'template-slider.php',
               )
           )
     );
   $myposts = query_posts($args);
   $post = $myposts[0];
   setup_postdata($post); ?>
