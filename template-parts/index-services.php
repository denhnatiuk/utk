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
<section id="services" class="section section-services">
  <div class="container">
<?php
    echo '<h2 class="section-header white"><span>Наши</span> услуги</h2>';
?>
<?php
  $mytemplates = ['template-transportation.php','template-servicestation.php','template-store.php'];
  foreach( $mytemplates as $template ){
    $args = array(
          'post_type' => 'page',
          'post_status' => 'publish',
          'posts_per_page' => '1',
          'orderby' => 'date',
          'meta_query' => array(
              array(
                  'key' => '_wp_page_template',
                  'value' => $template,
              )
          )
    );
  $myposts = query_posts($args);
  $post = $myposts[0];
  setup_postdata($post); ?>

  <?php
    
   ?>

<?php
// if( has_post_thumbnail() ) {
 //$iconThumb =  get_the_post_thumbnail($post->ID, 'icon-thumbnail', array( 'class' => 'feature-item__icon' ) );
 //$iconThumb =  the_post_thumbnail( 'icon-thumbnail', array( 'class'=>'icon-thumbnail feature-item__icon img-responsive', 'style'=>'') );
// }
// else {
  // if ( in_array('template-transportation.php', $post->$meta_quary['_wp_page_template'][0])){
  // // if ($post->$meta_quary['_wp_page_template'][0][0] == 'template-transportation.php'){
  //   $iconClass = 'transportation';
  //   $iconThumb = '';
  // } elseif ($post->$meta_quary['_wp_page_template'][0][0] == 'template-servicestation.php') {
  //   $iconClass = 'servicestation';
  //   $iconThumb = '';
  // } elseif ($post->$meta_quary['_wp_page_template'][0][0] == 'template-store.php') {
  //   $iconThumb = 'store';
  //   $iconThumb = '';
  // }
// }
    $id = get_the_ID();
    $custom_fields = get_post_custom($id);
    $icon = $custom_fields['icon'][0];
?>

    <div class="services_item <?php echo $iconClass ?> col-xs-12 col-sm-6 col-md-4">
      <!--<a href="<?php //the_permalink();?>" class="well_modal" role="button">-->
      <span class="well_modal" role="button">
        <div class="well">
          <span class="services_icon">
            <?php echo $icon;?>
          </span>
          <?php the_title( '<h3 class="well__header text-center">', '</h3>' );?>
          <p class="text text-justify">
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
          </p>
        </div>
      </span>
      <!--</a>-->
    </div>
<?php
}
wp_reset_postdata(); // сбрасываем переменную $post
?>
  </div>
</section>


  <?php

?>
