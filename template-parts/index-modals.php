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
  $myposts = query_posts('post_type=team&posts_per_page=10&orderby=date');
  $i = 0;
  foreach( $myposts as $post ){
    setup_postdata($post);
    $i++;

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
        // $vcardOrg = bloginfo( 'name' );
        $vcardAddr =  get_theme_mod('address');
        $homeUrl = home_url( '/' );
?>
<div class="modal fade"  id="vcardModal<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="#vcardModalLabel<?php echo $i; ?>" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="false">&times;</span>
        </button>
        <h4 class="modal-title text-center" id="vcardModalLabel<?php echo $i; ?>">Контакт</h4>
      </div>
      <div class="modal-body text-justify">
        <?php
// $vcUrl = 'https://zxing.org/w/chart';
$vcUrl = 'https://chart.googleapis.com/chart';
$vcCht = 'qr';
$vcChs = '350x350';
$vcChld = 'L';
$vcChoe = 'UTF-8';

$vcName = urlencode($vcardName);
$vcOrg = urlencode($vcardOrg);
$vcTitle = urlencode($vcardTitle);
// $vcTel = '%2B3801234567890';
$vcTel = urlencode($vcardTel);
$vcEmail = urlencode($vcardEmail);
$vcAddr = urlencode($vcardAddr);
$vcSite =  urlencode($homeUrl);
$vcChl = 'BEGIN%3AVCARD%0AVERSION%3A3.0%0AN%3A'.$vcName.'%0AORG%3A'.$vcOrg.'%0ATITLE%3A'.$vcTitle.'%0ATEL%3A'.$vcTel.'%0AURL%3A'.$vcSite.'%0AEMAIL%3A'.$vcEmail.'%0AADR%3A'.$vcAddr.'%0AEND%3AVCARD';

// $vCard = "https://zxing.org/w/chart?cht=qr&chs=350x350&chld=L&choe=UTF-8&chl=BEGIN%3AVCARD%0AVERSION%3A3.0%0AN%3ATest+Name%0AORG%3AUTK%0ATITLE%3Adirector%0ATEL%3A%2B3801234567890%0AURL%3Autk.net.ua%0AEMAIL%3Aemail%40utk.net.ua%0AADR%3Aasdasd+dasdsa+123%0AEND%3AVCARD";
$vCard = $vcUrl.'?cht='.$vcCht.'&chs='.$vcChs.'&chld='.$vcChl.'&choe='.$vcChoe.'&chl='.$vcChl;
        ?>
        <img
        src="<?php echo $vCard?>"
        alt="qr-vcard" />
<?php the_title( '<span class="lead">', '</span>' ); ?>
        <table class="table table-striped">
        <tbody>
        <tr>
          <td>компания:</td>
          <td><?php bloginfo( 'name' ); ?></td>
        </tr>
        <tr>
          <td>Должность</td>
<?php
if (has_secondary_title()){
the_secondary_title( $id, '<td>', '</td>' );
}
?>
        </tr>
<?php
          if ($vcardEmail){
            // foreach ( $vcardEmail as $key => $value ) {
        ?>
        <!-- <tr>
          <td>Е-mail</td>
          <td><a href="mailto:<?php //echo $value ?>" class="email"><?php //echo $value ?></a></td>
        </tr> -->
        <?php
            // }
        ?>
            <tr>
              <td>Е-mail</td>
              <td><a href="mailto:<?php echo $vcardEmail ?>" class="email"><?php echo $vcardEmail ?></a></td>
            </tr>
        <?php
          }
          if ($vcardTel){
            // foreach ( $vcardEmail as $key => $value ) {
         ?>
        <!-- <tr>
          <td>Телефон</td>
          <td><a href="tel:<?php //echo $value ?>" class="tel"><?php //echo $value ?></a></td>
        </tr> -->
        <?php
        ?>
         <tr>
           <td>Телефон</td>
           <td><a href="tel:<?php echo $vcardTel ?>" class="tel"><?php echo $vcardTel ?></a></td>
         </tr>
       <?php
            // }
          }
         ?>
        <tr>
          <td>веб-сайт</td>
          <td>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="tel"><?php echo esc_url( home_url( '/' ) ); ?></a>
          </td>
        </tr>
        </tbody>
        </table>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary center-block" data-dismiss="modal">закрыть</button>
      </div>
    </div>
  </div>
</div>
<?php
}
wp_reset_postdata(); // сбрасываем переменную $post
?>
