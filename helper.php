<?php
/*
* Version			: 1.0
* Created by		: Jeppe Stockmar
* Email				: info@stockmar.dk
* Created on		: 02-24-2015
* URL				: http://stockmar.dk
* @copyright		: 2015 stockmar.dk
* License 			: GPLv2 http://www.gnu.org/licenses/gpl-2.0.html
* 
*/

defined('_JEXEC') or die;

class ModTimelineHelper {
    /**
     * Retrieves the hello message
     *
     * @param array $params An object containing the module parameters
     * @access public
     */    

    function getData( $params ){
		$TimeLineItemsParms = array();
		// TIMELINE BOX 1
		$TimeLineItemsParms['boxitem1'] = $params->get( 'boxitem1' );
		$TimeLineItemsParms['position1'] = $params->get( 'position1' );
		$TimeLineItemsParms['timeline_title1'] = $params->get( 'timeline_title1' );
		$TimeLineItemsParms['timeline_text1'] = $params->get( 'timeline_text1' );
		$TimeLineItemsParms['url1'] = $params->get( 'url1' );
		$TimeLineItemsParms['icon1'] = $params->get( 'icon1' );

		// TIMELINE BOX 2
		$TimeLineItemsParms['boxitem2'] = $params->get( 'boxitem2' );
		$TimeLineItemsParms['position2'] = $params->get( 'position2' );
		$TimeLineItemsParms['timeline_title2'] = $params->get( 'timeline_title2' );
		$TimeLineItemsParms['timeline_text2'] = $params->get( 'timeline_text2' );
		$TimeLineItemsParms['url2'] = $params->get( 'url2' );
		$TimeLineItemsParms['icon2'] = $params->get( 'icon2' );

		// TIMELINE BOX 3
		$TimeLineItemsParms['boxitem3'] = $params->get( 'boxitem3' );
		$TimeLineItemsParms['position3'] = $params->get( 'position3' );
		$TimeLineItemsParms['timeline_title3'] = $params->get( 'timeline_title3' );
		$TimeLineItemsParms['timeline_text3'] = $params->get( 'timeline_text3' );
		$TimeLineItemsParms['url3'] = $params->get( 'url3' );
		$TimeLineItemsParms['icon3'] = $params->get( 'icon3' );

		// TIMELINE BOX 4
		$TimeLineItemsParms['boxitem4'] = $params->get( 'boxitem4' );
		$TimeLineItemsParms['position4'] = $params->get( 'position4' );
		$TimeLineItemsParms['timeline_title4'] = $params->get( 'timeline_title4' );
		$TimeLineItemsParms['timeline_text4'] = $params->get( 'timeline_text4' );
		$TimeLineItemsParms['url4'] = $params->get( 'url4' );
		$TimeLineItemsParms['icon4'] = $params->get( 'icon4' );
		
		// TIMELINE BOX 4
		$TimeLineItemsParms['boxitem5'] = $params->get( 'boxitem5' );
		$TimeLineItemsParms['position5'] = $params->get( 'position5' );
		$TimeLineItemsParms['timeline_title5'] = $params->get( 'timeline_title5' );
		$TimeLineItemsParms['timeline_text5'] = $params->get( 'timeline_text5' );
		$TimeLineItemsParms['url5'] = $params->get( 'url5' );
		$TimeLineItemsParms['icon5'] = $params->get( 'icon5' );
		
		// TIMELINE BOX 4
		$TimeLineItemsParms['boxitem6'] = $params->get( 'boxitem6' );
		$TimeLineItemsParms['position6'] = $params->get( 'position6' );
		$TimeLineItemsParms['timeline_title6'] = $params->get( 'timeline_title6' );
		$TimeLineItemsParms['timeline_text6'] = $params->get( 'timeline_text6' );
		$TimeLineItemsParms['url6'] = $params->get( 'url6' );
		$TimeLineItemsParms['icon6'] = $params->get( 'icon6' );

		return $TimeLineItemsParms;
	}
}
?>