<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package utk
 */

?>
</main>
<div class="scroll-top-wrapper ">
	<span class="scroll-top-inner">
		<span class="glyphicon glyphicon-menu-up"></span>
	</span>
</div>
<footer id="contacts" class="footer container-fluid">
	<div class="row">
<div class="col-xs-12 col-sm-12 col-md-6 footer__overflow ">
<h3 class="white">ОДО <span>"Южная транспортная компания"</span></h3>
<table class="table table">
<tbody>
<tr>
<td>Aдрес</td>
<td><?php echo get_theme_mod('panel-text-address');?></td>
</tr>
<tr>
<td>Е-mail</td>
<td><a href="mailto:<?php echo get_theme_mod('panel-text-email');?>" class="email"><?php echo get_theme_mod('panel-text-email');?></a></td>
</tr>
<tr>
<td>Телефон</td>
<td><a href="tel:<?php echo get_theme_mod('panel-text-tel');?>" class="tel"><?php echo get_theme_mod('panel-text-tel');?></a></span></td>
</tr>
<tr>
<td>Реквизиты</td>
<td><?php echo get_theme_mod('panel-text-requisits');?></td>
</tr>
</tbody>
</table>

<div class="copyright align-bottom">
	<span>&copy; 2017 |
					<a href="#copyModal" data-toggle="modal" data-target="#copyModal" class="policy">UTK</a>
				</span>

</div>

</div>
<div class="col-xs-12 col-sm-12 col-md-6 footer__map  margin-bottom">
	<?php
	$gmapsapi = get_theme_mod('panel-text-gmapsplace');
	// $gmapskey = get_theme_mod('panel-text-gmapsapi');
	$gmapskey = 'AIzaSyC6Am2xjvlTJqFWvrM6xp7DZ3zMDNmlyRw';
	// get_template_part('template-parts', 'chart.php');
	 ?>
	 <!-- <script>
	 //	function initMap() {
		//   var map = new google.maps.Map(document.getElementById('map'), {
		//     disableDefaultUI: true
		//   });
		// }
	 </script> -->
	 <!--<script src="https://maps.googleapis.com/maps/api/js?key=<?php //echo $gmapsapi ?>&callback=initMap&query_place_id='X3M6+M7 Николаев, Николаевская область"    async defer></script>-->
	 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2721.854749253463!2d32.0606875!3d46.9841875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2s8GRJX3M6%2BM7!5e0!3m2!1suk!2sua!4v1560416356292!5m2!1suk!2sua" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	 
	<!--<iframe name="chart" id="chart" title="google charts" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5288.707733924651!2d32.05646334164425!3d46.984490322389036!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c5cb5eba148779%3A0x9eb6e694fe6a364c!2z0JDQotCfINCu0KLQmg!5e0!3m2!1sru!2sua!4v1560239968506!5m2!1sru!2sua&callback=initMap" width="600" height="450" frameborder="0" style="border:0" allowfullscreen async></iframe>-->


<!--<iframe width="100%" -->
<!--		height="600" -->
<!--		src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;coord=46.98425610995792,32.0608413219452&amp;q=%D0%B2%D1%83%D0%BB%D0%B8%D1%86%D1%8F%20%D0%90%D0%B2%D1%82%D0%BE%D0%BC%D0%BE%D0%B1%D1%96%D0%BB%D1%8C%D0%BD%D0%B0%2C%202%2C%20%D0%9C%D0%B8%D0%BA%D0%BE%D0%BB%D0%B0%D1%97%D0%B2%2C%20%D0%9C%D0%B8%D0%BA%D0%BE%D0%BB%D0%B0%D1%97%D0%B2%D1%81%D1%8C%D0%BA%D0%B0%20%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C%2C%2054007+(%D0%90%D0%A2%D0%9F%20%D0%AE%D0%A2%D0%9A)&amp;ie=UTF8&amp;t=&amp;z=18&amp;iwloc=B&amp;output=embed" -->
<!--		frameborder="0" scrolling="no" marginheight="0" marginwidth="0">-->
<!--	<a href="https://www.maps.ie/map-my-route/">Map a route</a></iframe>-->
<!-- <iframe src="https://www.google.com/maps/embed?query_place_id=<?php //echo $gmapsapi ?>&key=<?php //echo $gmapskey ?>" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->

</div>
	</div>
	</footer>
	<?php
	if (is_home()){
		 get_template_part( 'template-parts/index', 'modals' );
	}
	?>
	<div id="scripts">
		<?php wp_footer(); ?>
	</div>
</body>
</html>
