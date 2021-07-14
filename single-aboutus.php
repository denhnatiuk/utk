<?php
/**
 *
 * @package WordPress
 * @subpackage utk
 * @since 0.1
 * @version 0.1
 */

?>
<?php get_header();?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php
    if( has_post_thumbnail() ) {
      $thumbnail =  get_the_post_thumbnail_url('','full-thumbnail');
    }else {
      $thumbnail = get_template_directory_uri().'/assets/images/trucks-front.jpg';
    }

    if ( is_singular() ) {
      echo '<h1 slyle="opacity:0; margin-bottom:10rem; visibility:hidden">'.get_bloginfo().'</h1>';
    }
  ?>
  <section id="about" class="section section-full about row"
    style="background: url(<?php echo $thumbnail ?>);
    background-position: right;
    background-clip: padding-box;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed; ">
    <div class="container-fluid">
      <div class="row">
  <?php
  the_title( '<h2 class="entry-title section-header">', '</h2>' );
  ?>
  <div class="col-xs-12 col-sm-12 col-md-6">
    <div class="clipped">
     <div class="caption">
  <?php

  the_content( sprintf(
    wp_kses(
      /* translators: %s: Name of current post. Only visible to screen readers */
      __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'utk' ),
      array(
        'span' => array(
          'class' => array(),
        ),
      )
    ),
    get_the_title()
  ) );
  ?>
</div>
</div>
</div>
  <?php
  $id = get_the_ID();
  //get_template_part( 'template-parts/content', 'page');
  $custom_fields = get_post_custom($id);
  $my_custom_field = $custom_fields['feature-item'];
  if ($my_custom_field){
    ?>
    <div class="col-xs-12 col-sm-12 col-md-6">
      <div id="featuresCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators hidden">
    <?php
    foreach ( $my_custom_field as $key => $value ) {
      if ($key === 0){
        echo '<li data-target="#featuresCarousel" data-slide-to="0" class="active"></li>';

      }
      else {
        echo '<li data-target="#featuresCarousel" data-slide-to="'.$key.'"></li>';
      }
    }
      ?>
        </ol>
        <div class="carousel-inner" role="listbox">
      <?php
      foreach ( $my_custom_field as $key => $value ) {
        if ($key === 0){
          echo '<div class="feature-item item active">'. $value .'</div>';
        } else {
          echo '<div class="feature-item item">'. $value .'</div>';
        }
      }
      //echo $key . " => " . $value . "<br />";
      ?>
    </div>
</div>
      <?php
    }
  ?>
<?php endwhile; endif; ?>
  </div>
  </div>
</section>
<?php get_footer();?>
