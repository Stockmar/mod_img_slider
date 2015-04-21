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
?>
<ul class="actions">
    <li class="edit-icon">
        <?php echo JHtml::_('icon.edit', $item, $params); ?>
    </li>
</ul>
<?php
    $images = $imagelist;
    echo '<div class="imgslider">';
        echo '<ul class="bxslider">';
        foreach($images as $image) {
            echo "<li><img src=".$image." /></li>";
        }
        echo '</ul>';
    echo '</div>';

//format the display
if ($params->get('controlsPosition') == 'outside'){?>
	<div class="outside">
  		<ul class="pager">
	    	<li id="slider-prev" class="previous"></li>
	    	<li id="slider-next" class="next"></li>
	  	</ul>
	</div>
<?php } ?>