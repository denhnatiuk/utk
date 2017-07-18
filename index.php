<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen_child
 * @since 1.0
 * @version 1.0
 */

get_header();

get_template_part( 'template-parts/about', get_post_format() );
get_template_part( 'template-parts/services', get_post_format() );
get_template_part( 'template-parts/team', get_post_format() );
get_template_part( 'template-parts/clients', get_post_format() );

get_footer();
?>