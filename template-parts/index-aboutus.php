<?php
/**
 * Template part to display info about us
 *
 * @package WordPress
 * @subpackage UTK
 * @since 0.1
 * @version 0.1
 */

?>
<span style="width:1px;height:1px;clip:rect(1px,1px,1px,1px); opacity:0;" class="sr-only" ></span>
<?php
  $myposts = query_posts('post_type=aboutus&posts_per_page=1&orderby=date');
  foreach( $myposts as $post ){ setup_postdata($post); ?>

<?php
  if( has_post_thumbnail() ) {
    $thumbnail =  get_the_post_thumbnail_url('','full-thumbnail');
  }else {
    $thumbnail = get_template_directory_uri().'/static/images/trucks-front.png';
  }

  if ( is_singular() ) {
    echo '<h1 slyle="opacity:0; margin-bottom:10rem; visibility:hidden">'.get_bloginfo().'</h1>';
  }
?>
<section id="about" class="section section-full about row"
  style="background: url(<?php echo $thumbnail ?>);
  background-position: center;
  background-clip: padding-box;
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  ">
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
  // add custom fields carousel
  $id = get_the_ID();
  $custom_fields = get_post_custom($id);
  $my_custom_field = $custom_fields['feature-item'];
  if ($my_custom_field){
?>
      <div class="col-xs-12 col-sm-12 col-md-6">
        <div id="featuresCarousel" class="slider">
          <!-- <ol class="carousel-indicators hidden"> -->
<?php
    // foreach ( $my_custom_field as $key => $value ) {
    //   if ($key === 0){
    //     echo '<li data-target="#featuresCarousel" data-slide-to="0" class="active"></li>';
    //   }
    //   else {
    //     echo '<li data-target="#featuresCarousel" data-slide-to="'.$key.'"></li>';
    //   }
    // }
?>
          <!-- </ol> -->
          <!-- <div class="slider-inner" role="listbox"> -->
<?php
    foreach ( $my_custom_field as $key => $value ) {
      if ($key === 0){
        echo '<div class="feature-item item active">'. $value .'</div>';
      } else {
        echo '<div class="feature-item item">'. $value .'</div>';
      }
    }
?>
          <!-- </div> -->
        </div>
<?php
  }
?>
      </div>
    </div>
  </div>
</section>

  <?php
  }
  wp_reset_postdata(); // сбрасываем переменную $post
?>
