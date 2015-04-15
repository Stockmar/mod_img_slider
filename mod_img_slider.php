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

$doc =& JFactory::getDocument();
$modulePath 		= 		JURI::base();
// parms setup
$dateFormat     			=       $params->get('date_format', '');
$iconbackground             = 		$params->get('iconbackground');
$iconcolor              	= 		$params->get('iconcolor');
$verticaline              	= 		$params->get('verticaline');
$fontawesome 				= 		$params->get( 'font-awesome' );
$imageSize 				= 		$params->get( 'timeline_image_size' );

// add the stylesheet
$doc->addStylesheet( JURI::root(true) . '/modules/mod_img_slider/css/style.css' );

// add the jquery
$doc->addScript( JURI::root(true) . '/modules/mod_img_slider/js/lightslider.min.js');

// TIMELINE DATES 
$img_01    	=       $params->get('logo_file_01', '');
if ($params->get('logo_file_01', '')){ JURI::base().$img_01;}

$img_02    	=       $params->get('logo_file_02', '');
if ($params->get('logo_file_02', '')){ JURI::base().$img_02;}

$img_03    	=       $params->get('logo_file_03', '');
if ($params->get('logo_file_03', '')){ JURI::base().$img_03;}

$img_04    	=       $params->get('logo_file_04', '');
if ($params->get('logo_file_04', '')){ JURI::base().$img_04;}




// Add styles
$style = '
	#timeline:before {
	    background:'. $verticaline .';
	}
	.timeline-icon{
		background:'. $iconbackground .';
	}
	.timeline-icon .fa{
		color:'. $iconcolor .';
	}
	.timeline-wrapper:hover .timeline-block{
        border: 1px solid '. $iconbackground .'; 
    }
	.timeline-text img{
    	width:'. $imageSize .'px;
	}
';
  
$doc->addStyleDeclaration($style);


$colors = ModImgSliderHelper::getData( $params );
require JModuleHelper::getLayoutPath('mod_img_slider', $params->get('layout', 'default'));

?>