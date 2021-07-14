<?php
/**
 * Template part to display info team
 *
 * @package WordPress
 * @subpackage UTK
 * @since 0.1
 * @version 0.1
 */

?>
<?php
// TODO: change var below to setting up with theme mod
// $background = get_theme_mod('team-bg');
// $section_tite = get_theme_mod('team-title');
// $section_subtite = get_theme_mod('team-subtitle');

    $background = get_template_directory_uri().'/static/images/team-bg.jpg';
    $myposts = query_posts('post_type=team&posts_per_page=10&orderby=date');
    $i = 0;
    $EmptyTestArray = array_filter($myposts);
    if (!empty($EmptyTestArray)):
?>
<section id="team" class="section section-team">
      <div class="row">
        <div class="container-fluid team-bg"
        style="background: url(<?php echo $background ?>);
                background-position: right;
                background-clip: padding-box;
                background-size: cover;
                background-repeat: no-repeat;
                background-attachment: fixed; ">
          <div class="row">
            <div class="container">
              <h3 class="text-center white"><span class="orange">Наши</span> специалисты</h3>
              <h5 class="text-center">Опыт не делает работу отличной, отличный опыт делает её таковой.</h5>
              <div class="slider team" id="carouselTeam">
<?php

  foreach( $myposts as $post ){
    setup_postdata($post);
    $i++;
?>

<?php
if( has_post_thumbnail() ) {
  $thumb = get_the_post_thumbnail_url('','full-thumbnail');
} else {
  $thumb = get_template_directory_uri().'/static/images/trucks-front.jpg';
}

    $id = get_the_ID();
    $custom_fields = get_post_custom($id);
    $vcardEmail = $custom_fields['email'][0];
    $vcardTel = $custom_fields['tel'][0];
    $vcardUrl = $custom_fields['site'][0];
    $vcardName = get_the_title( $id );
    $vcardTitle = get_secondary_title( $id );
    $vcardOrg = bloginfo( 'name' );
    $vcardAddr =  get_theme_mod('address');
    $homeUrl = home_url( '/' );
?>

                <div class="item">
                  <div class="col-xs-10 item-inner">
                    <span class="face center-block">
                      <img src="<?php echo $thumb ?>" class="img-responsive center-block face">
                    </span>
                    <h4 class="couch-name text-center">
<?php the_title( '<span class="uppercase">', '</span>' ); ?>
                      <br>
<?php the_secondary_title( $id, '<span class="orange">', '</span>' ); ?>
                    </h4>
                    <p class="text-center">
                      <?php the_excerpt_max_charlength(180);?>
                    </p>
                    <a class="btn btn-lg btn-center"
                        href="#vcardModal<?php echo $i; ?>"
                        data-toggle="modal"
                        data-target="#vcardModal<?php echo  $i; ?>"
                        role="button">
                      <span>контакты</span>
                    </a>
                  </div>

                </div>
<?php
}
wp_reset_postdata(); // сбрасываем переменную $post
?>
      </div>
    </div>
  </div>
</section>

  <?php
    endif;
?>
