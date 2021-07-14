<?php
/**
 * @package vCard-plugin
 * @version 0.0.1
 */
 /*
	Plugin Name: vCard
	Plugin URI: http://
	Description:
	Author: Den Hnatiuk
	Version: 0.0.1
	Author URI: mailto:denys.hnatiuk@gmail.com
	*/

// standarts rfc5234,  rfc6350
// for vcard version 3.0
  function vcard_get_qr_url(){
    $vcUrl = 'https://zxing.org/w/chart';
    $vcUrl2 = 'https://chart.googleapis.com/chart';
    $vcCht = 'qr';
    $vcChs = '350x350';
    $vcChld = 'L';
    $vcChoe = 'UTF-8';
    $vcName = 'Test+Name';
    $vcOrg = 'UTK';
    $vcTitle = 'director';
    $vcTel = '%2B3801234567890';
    $vcEmail = 'mail%40utk.net.ua';
    $vcAddr = '';
    $vcUrl =  'https://zxing.org';
    $vcChl = 'BEGIN%3AVCARD%0AVERSION%3A3.0%0AN%3A'.$vcName.'%0AORG%3A'.$vcOrg.'%0ATITLE%3A'.$vcTitle.'%0ATEL%3A'.$vcTel.'%0AURL%3A'.$vcUrl.'%0AEMAIL%3Ae'.$vcEmail.'%0AADR%3A'.$vcAddr.'%0AEND%3AVCARD';

    //$vCard = "https://zxing.org/w/chart?cht=qr&chs=350x350&chld=L&choe=UTF-8&chl=BEGIN%3AVCARD%0AVERSION%3A3.0%0AN%3ATest+Name%0AORG%3AUTK%0ATITLE%3Adirector%0ATEL%3A%2B3801234567890%0AURL%3Autk.net.ua%0AEMAIL%3Aemail%40utk.net.ua%0AADR%3Aasdasd+dasdsa+123%0AEND%3AVCARD";
    $vCard = $vcUrl.'?cht='.$vcCht.'&chs='.$vcChs.'&chld='.$vcChl.'&choe='.$vcChoe.'&chl='.$vcChl;

    return $vCard;
  }

function vcard_get_name(){
  $name =
}

function utk_get_qr_url(){
  $vcUrl = 'https://zxing.org/w/chart';
  $vcUrl2 = 'https://chart.googleapis.com/chart';
  $vcCht = 'qr';
  $vcChs = '350x350';
  $vcChld = 'L';
  $vcChoe = 'UTF-8';
  $vcName = 'Test+Name';
  $vcOrg = 'UTK';
  $vcTitle = 'director';
  $vcTel = '%2B3801234567890';
  $vcEmail = 'mail%40utk.net.ua';
  $vcAddr = '';
  $vcUrl =  'https://zxing.org';
  $vcChl = 'BEGIN%3AVCARD%0AVERSION%3A3.0%0AN%3A'.$vcName.'%0AORG%3A'.$vcOrg.'%0ATITLE%3A'.$vcTitle.'%0ATEL%3A'.$vcTel.'%0AURL%3A'.$vcUrl.'%0AEMAIL%3Ae'.$vcEmail.'%0AADR%3A'.$vcAddr.'%0AEND%3AVCARD';

  //$vCard = "https://zxing.org/w/chart?cht=qr&chs=350x350&chld=L&choe=UTF-8&chl=BEGIN%3AVCARD%0AVERSION%3A3.0%0AN%3ATest+Name%0AORG%3AUTK%0ATITLE%3Adirector%0ATEL%3A%2B3801234567890%0AURL%3Autk.net.ua%0AEMAIL%3Aemail%40utk.net.ua%0AADR%3Aasdasd+dasdsa+123%0AEND%3AVCARD";
  $vCard = $vcUrl.'?cht='.$vcCht.'&chs='.$vcChs.'&chld='.$vcChl.'&choe='.$vcChoe.'&chl='.$vcChl;

  return $vCard;
}
