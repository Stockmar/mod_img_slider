<?php
/*
* Version           : 1.0
* Created by        : Jeppe Stockmar
* Email             : info@stockmar.dk
* Created on        : 04-15-2015
* URL               : http://stockmar.dk
* @copyright        : 2015 stockmar.dk
* License           : GPLv2 http://www.gnu.org/licenses/gpl-2.0.html
* 
*/
defined('_JEXEC') or die;
        $images = $imagelist;
        echo '<div class="imgslider">';
	        echo '<ul class="bxslider">';
	        foreach($images as $image) {
	            echo "<li><img src=".$image." /></li>";
	        }
	        echo '</ul>';
        echo '</div>';
?>

<div class="outside">
  <h3>This div is outside of the slider</h3>
  <p><span id="slider-prev"></span> | <span id="slider-next"></span></p>
</div>