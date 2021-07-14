<?php
/**
 * Template part to display brand features
 *
 * @package WordPress
 * @subpackage UTK
 * @since 0.1
 * @version 0.1
 */

?>
<section id="clients" class="section container">
  <div class="row">
    <div class="container-fluid partners">
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
        setup_postdata($post);
        the_title( '<h2 class="partners__header text-center white">', '</h2>' );
        the_content();
        wp_reset_postdata();
        ?>
    </div>
  </div>
  <h2 class="title-underline">Почему выбирают нас?</h2>
  <div class="row permission-box-mobile arrow-on-white">
    <?php
      $myposts = query_posts('post_type=features&posts_per_page=10&orderby=date');
      $i = 0;
      foreach( $myposts as $post ){
        setup_postdata($post);
        $i++;
          $id = get_the_ID();
          $custom_fields = get_post_custom($id);
          $my_custom_field = $custom_fields['feature-item'];
          if ($my_custom_field){
            $icon = $custom_fields['feature-item'][0];
          }
    ?>

    <div class="col-md-4 asset-item">
      <div class="permission-box animation" data-animation="fadeIn" data-animation-delay="0s">
<?php echo $icon ?>
        <div class="description">
          <?php the_title('<h4 class="title">','</h4>') ?>
          <p>
            <?php the_excerpt_max_charlength(250); ?>
          </p>
        </div>
      </div>

    </div>
    <?php
    }
    wp_reset_postdata(); // сбрасываем переменную $post
    ?>
  </div>
</section>
