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
    <ul id="ss-image-gallery" class="ss-gallery list-unstyled ss-cS-hidden">
        <?php
        $images = array($img_01, $img_02, $img_03, $img_04, $img_05, $img_06);
        echo "<ul>";
        foreach($images as $image) {
            // if ($pos > 2 && $pos % 2 == 0) {
            //     echo "</li>\n<li>";
            // }
            echo "<li><img src=".$modulePath.$image." /></li>";
        }
        echo "</ul>";
        ?>


        <?php echo $img_01; ?>
        <li> 
            <img src="<?php echo $img_02; ?>" />
            <?php echo $value; ?>
            
        </li>
        <li> 
            <img src="<?php echo $img_03; ?>" />
        </li>
        <li> 
            <img src="<?php echo $img_04; ?>" />
        </li>
    </ul>

    hallo