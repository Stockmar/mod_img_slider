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
// parms setup
$dateFormat     			=       $params->get('date_format', '');
$iconbackground             = 		$params->get('iconbackground');
$iconcolor              	= 		$params->get('iconcolor');
$verticaline              	= 		$params->get('verticaline');
$fontawesome 				= 		$params->get( 'font-awesome' );
$imageSize 				= 		$params->get( 'timeline_image_size' );

// add the stylesheet
$doc->addStylesheet( JURI::root(true) . '/modules/mod_timeline/css/style.css' );
if ($fontawesome==1)$doc->addStylesheet( '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );

// add the jquery
$doc->addScript( JURI::root(true) . '/modules/mod_timeline/js/timeline.js');

// TIMELINE DATES 
$dateStart1    	=       $params->get('date_start1', '');
if ($params->get('date_start1', '')){ $dateStart1 =  JHtml::date($dateStart1, ''.$dateFormat.'', false);}
$dateEnd1    		=       $params->get('date_end1', '');
if ($params->get('date_end1', '')){ $dateEnd1 =  JHtml::date($dateEnd1, ''.$dateFormat.'', false);}
$dateStart2    	=       $params->get('date_start2', '');
if ($params->get('date_start2', '')){ $dateStart2 =  JHtml::date($dateStart2, ''.$dateFormat.'', false);}
$dateEnd2    		=       $params->get('date_end2', '');
if ($params->get('date_end2', '')){ $dateEnd2 =  JHtml::date($dateEnd2, ''.$dateFormat.'', false);}
$dateStart3    	=       $params->get('date_start3', '');
if ($params->get('date_start3', '')){ $dateStart3 =  JHtml::date($dateStart3, ''.$dateFormat.'', false);}
$dateEnd3    		=       $params->get('date_end3', '');
if ($params->get('date_end3', '')){ $dateEnd3 =  JHtml::date($dateEnd3, ''.$dateFormat.'', false);}
$dateStart4    	=       $params->get('date_start4', '');
if ($params->get('date_start4', '')){ $dateStart4 =  JHtml::date($dateStart4, ''.$dateFormat.'', false);}
$dateEnd4    		=       $params->get('date_end4', '');
if ($params->get('date_end4', '')){ $dateEnd4 =  JHtml::date($dateEnd4, ''.$dateFormat.'', false);}
$dateStart5    	=       $params->get('date_start5', '');
if ($params->get('date_start5', '')){ $dateStart5 =  JHtml::date($dateStart5, ''.$dateFormat.'', false);}
$dateEnd5    		=       $params->get('date_end5', '');
if ($params->get('date_end5', '')){ $dateEnd5 =  JHtml::date($dateEnd5, ''.$dateFormat.'', false);}
$dateStart6    	=       $params->get('date_start6', '');
if ($params->get('date_start6', '')){ $dateStart6 =  JHtml::date($dateStart6, ''.$dateFormat.'', false);}
$dateEnd6    		=       $params->get('date_end6', '');
if ($params->get('date_end6', '')){ $dateEnd6 =  JHtml::date($dateEnd6, ''.$dateFormat.'', false);}

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


$TimeLineItemsParms = ModTimelineHelper::getData( $params );
require JModuleHelper::getLayoutPath('mod_timeline', $params->get('layout', 'default'));

?>