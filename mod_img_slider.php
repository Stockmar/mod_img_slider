<?php
/*
* Version			: 1.0
* Created by		: Jeppe Stockmar
* Email				: info@stockmar.dk
* Created on		: 02-24-2015
* URL				: http://stockmar.dk
* @copyright		: 2015 stockmar.dk
* License 			: GPLv2 http://www.gnu.org/licenses/gpl-2.0.html
* <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
*/

defined('_JEXEC') or die;

// Include the helper.
 require_once __DIR__ . '/helper.php';

// Load the method jquery script.
JHtml::_('jquery.framework');

$doc 				=& JFactory::getDocument();
$imgpath 			= 		JURI::base();
// parms setup
$dateFormat     	=       $params->get('date_format', '');
$iconbackground     = 		$params->get('iconbackground');
$iconcolor          = 		$params->get('iconcolor');
$verticaline		= 		$params->get('verticaline');
$fontawesome 		= 		$params->get( 'font-awesome' );
$imageSize 			= 		$params->get( 'timeline_image_size' );

// add the stylesheet
$doc->addStylesheet( JURI::root(true) . '/modules/mod_img_slider/css/style.css' );

// add the jquery
$doc->addScript( JURI::root(true) . '/modules/mod_img_slider/js/lightslider.min.js');

$speed 			= 		$params->get('speed');
$pause 			= 		$params->get('pause');
$auto 			= 		$params->get('auto');
$loop 			= 		$params->get('loop');
$mode 			= 		$params->get('mode');
$controls 		= 		$params->get('controls');
$touch 			= 		$params->get('touch');
$drag 			= 		$params->get('drag');

// // GETTING IMG PARMS
$imagelist = array( );
$img_01 = $params->get('logo_file_01');
if (!empty($img_01)) {$imagelist["logo_file_01"] = "$imgpath"."$img_01";};

$img_02	= $params->get('logo_file_02');
if (!empty($img_02)) {$imagelist["logo_file_02"] = "$imgpath"."$img_02";};

$img_03	= $params->get('logo_file_03', '');
if (!empty($img_03)) {$imagelist["logo_file_03"] = "$imgpath"."$img_03";};

$img_04 = $params->get('logo_file_04', '');
if (!empty($img_04)) {$imagelist["logo_file_04"] = "$imgpath"."$img_04";};

$img_05 = $params->get('logo_file_05', '');
if (!empty($img_05)) {$imagelist["logo_file_05"] = "$imgpath"."$img_05";};

$img_06 = $params->get('logo_file_06', '');
if (!empty($img_06)) {$imagelist["logo_file_06"] = "$imgpath"."$img_06";};



$doc->addStyleDeclaration( '

.imgslider {
    
}
ul {
    list-style: none outside none;
    padding-left: 0;
    margin-bottom:0;
}
li {
    display: block;
    float: left;
    margin-right: 6px;
    cursor:pointer;
}
img {
    display: block;
    height: auto;
    max-width: 100%;
}
');


$doc->addScriptDeclaration('
	(function($) {
		$(document).ready(function() {
			$(\'#image-gallery\').lightSlider({
				
	            item: 1,
	     
	            slideMove: 1, // slidemove will be 1 if loop is true
	            slideMargin: 10,

	            mode: "'.$mode.'",
	            useCSS: true,

	            speed:'.$speed.',//ms
	            auto:'.$auto.',
	            loop:'.$loop.',
	            slideEndAnimation: true,
	            pause: '.$pause.',

	            keyPress: true,
	            controls:'.$controls.',

	            vertical:false,
	            verticalHeight:500,
	            vThumbWidth:100,

	            thumbItem:10,
	            pager: true,
	            gallery: false,
	            galleryMargin: 5,
	            thumbMargin: 5,
	            

	            enableTouch:'.$touch.',
	            enableDrag:'.$drag.',
	            freeMove:true,
	            swipeThreshold: 40,
	            onSliderLoad: function() {
	                $(\'#image-gallery\').removeClass(\'cS-hidden\');
	            }
			});
		});
	})(jQuery);
');

// $imagelist = ModImgSliderHelper::getData( $params );
// $colors = ModImgSliderHelper::getData( $params );
require JModuleHelper::getLayoutPath('mod_img_slider', $params->get('layout', 'default'));

?>