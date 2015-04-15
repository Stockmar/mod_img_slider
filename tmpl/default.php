<?php
/*
* Version           : 1.0
* Created by        : Jeppe Stockmar
* Email             : info@stockmar.dk
* Created on        : 02-24-2015
* URL               : http://stockmar.dk
* @copyright        : 2015 stockmar.dk
* License           : GPLv2 http://www.gnu.org/licenses/gpl-2.0.html
* 
*/

defined('_JEXEC') or die;
?>

        <section id="timeline">
        	<?php if ($TimeLineItemsParms['boxitem1'] == "1" ) : ?>
            <div class="timeline-wrapper">
                <div class="timeline-icon"><i class="<?php echo $TimeLineItemsParms['icon1']; ?>"></i></div>
              	<div class="timeline-block <?php echo $TimeLineItemsParms['position1']; ?>">
                	<div class="timeline-heading">
                  		<h4 class="timeline-title"><?php echo $TimeLineItemsParms['timeline_title1']; ?></h4>
                	</div>
                	<div class="timeline-text">
                		<?php echo $TimeLineItemsParms['timeline_text1']; ?>
                	</div>        	
                	<?php if (!empty($dateStart1)) { ?>
                		<div class="timeline-date <?php echo $TimeLineItemsParms['position1']; ?>">
                			<span class="date text-muted">
        	        			<?php echo $dateStart1; ?> 
        	        			<?php if (!empty($dateEnd1)) { ?>- 
        	        				<?php echo $dateEnd1; ?> 
        	        			<?php }; ?>
                			</span>
                		</div>
                	<?php }; ?>
                	<?php if (!empty($TimeLineItemsParms['url1'])){ ?>
        				<div class="timeline-url">
                			</small><i class="fa fa-link fa-fw"></i><a href="http://<?php echo $TimeLineItemsParms['url1']; ?>" target="_blank"><?php echo $TimeLineItemsParms['url1']; ?></a></small>
                		</div>
        			<?php }; ?>
              	</div>
            </div>
            <?php endif ?>
        	<?php if ($TimeLineItemsParms['boxitem2'] == "1" ) : ?>
            <div class="timeline-wrapper">
                <div class="timeline-icon"><i class="<?php echo $TimeLineItemsParms['icon2']; ?>"></i></div>
              	<div class="timeline-block <?php echo $TimeLineItemsParms['position2']; ?>">
                	<div class="timeline-heading">
                  		<h4 class="timeline-title"><?php echo $TimeLineItemsParms['timeline_title2']; ?></h4>
                	</div>
                	<div class="timeline-text">
                		<?php echo $TimeLineItemsParms['timeline_text2']; ?>
                	</div>        	
                	<?php if (!empty($dateStart2)) { ?>
                		<div class="timeline-date <?php echo $TimeLineItemsParms['position2']; ?>">
                			<span class="date text-muted">
        	        			<?php echo $dateStart2; ?> 
        	        			<?php if (!empty($dateEnd2)) { ?>- 
        	        				<?php echo $dateEnd2; ?> 
        	        			<?php }; ?>
                			</span>
                		</div>
                	<?php }; ?>
                	<?php if (!empty($TimeLineItemsParms['url2'])){ ?>
        				<div class="timeline-url">
                			</small><i class="fa fa-link fa-fw"></i><a href="http://<?php echo $TimeLineItemsParms['url2']; ?>" target="_blank"><?php echo $TimeLineItemsParms['url2']; ?></a></small>
                		</div>
        			<?php }; ?>
              	</div>
            </div>
            <?php endif ?>
        	<?php if ($TimeLineItemsParms['boxitem3'] == "1" ) : ?>
            <div class="timeline-wrapper">
                <div class="timeline-icon"><i class="<?php echo $TimeLineItemsParms['icon3']; ?>"></i></div>
              	<div class="timeline-block <?php echo $TimeLineItemsParms['position3']; ?>">
                	<div class="timeline-heading">
                  		<h4 class="timeline-title"><?php echo $TimeLineItemsParms['timeline_title3']; ?></h4>
                	</div>
                	<div class="timeline-text">
                		<?php echo $TimeLineItemsParms['timeline_text3']; ?>
                	</div>        	
                	<?php if (!empty($dateStart3)) { ?>
                		<div class="timeline-date <?php echo $TimeLineItemsParms['position3']; ?>">
                			<span class="date text-muted">
        	        			<?php echo $dateStart3; ?> 
        	        			<?php if (!empty($dateEnd3)){ ?>- 
        	        				<?php echo $dateEnd3; ?> 
        	        			<?php }; ?>
                			</span>
                		</div>
                	<?php }; ?>
                	<?php if (!empty($TimeLineItemsParms['url3'])) { ?>
        				<div class="timeline-url">
                			</small><i class="fa fa-link fa-fw"></i><a href="http://<?php echo $TimeLineItemsParms['url3']; ?>" target="_blank"><?php echo $TimeLineItemsParms['url3']; ?></a></small>
                		</div>
        			<?php }; ?>
              	</div>
            </div>
            <?php endif ?>
        	<?php if ($TimeLineItemsParms['boxitem4'] == "1" ) : ?>
            <div class="timeline-wrapper">
                <div class="timeline-icon"><i class="<?php echo $TimeLineItemsParms['icon4']; ?>"></i></div>
              	<div class="timeline-block <?php echo $TimeLineItemsParms['position4']; ?>">
                	<div class="timeline-heading">
                  		<h4 class="timeline-title"><?php echo $TimeLineItemsParms['timeline_title4']; ?></h4>
                	</div>
                	<div class="timeline-text">
                		<?php echo $TimeLineItemsParms['timeline_text4']; ?>
                	</div>        	
                	<?php if (!empty($dateStart4)) { ?>
                		<div class="timeline-date <?php echo $TimeLineItemsParms['position4']; ?>">
                			<span class="date text-muted">
        	        			<?php echo $dateStart4; ?> 
        	        			<?php if (!empty($dateEnd4)){ ?>- 
        	        				<?php echo $dateEnd4; ?> 
        	        			<?php }; ?>
                			</span>
                		</div>
                	<?php }; ?>
                	<?php if (!empty($TimeLineItemsParms['url4'])) { ?>
        				<div class="timeline-url">
                			</small><i class="fa fa-link fa-fw"></i><a href="http://<?php echo $TimeLineItemsParms['url4']; ?>" target="_blank"><?php echo $TimeLineItemsParms['url4']; ?></a></small>
                		</div>
        			<?php }; ?>
              	</div>
            </div>
            <?php endif ?>
        	<?php if ($TimeLineItemsParms['boxitem5'] == "1" ) : ?>
            <div class="timeline-wrapper">
                <div class="timeline-icon"><i class="<?php echo $TimeLineItemsParms['icon5']; ?>"></i></div>
              	<div class="timeline-block <?php echo $TimeLineItemsParms['position5']; ?>">
                	<div class="timeline-heading">
                  		<h4 class="timeline-title"><?php echo $TimeLineItemsParms['timeline_title5']; ?></h4>
                	</div>
                	<div class="timeline-text">
                		<?php echo $TimeLineItemsParms['timeline_text5']; ?>
                	</div>        	
                	<?php if (!empty($dateStart5)) { ?>
                		<div class="timeline-date <?php echo $TimeLineItemsParms['position5']; ?>">
                			<span class="date text-muted">
        	        			<?php echo $dateStart5; ?> 
        	        			<?php if (!empty($dateEnd5)){ ?>- 
        	        				<?php echo $dateEnd5; ?> 
        	        			<?php }; ?>
                			</span>
                		</div>
                	<?php }; ?>
                	<?php if (!empty($TimeLineItemsParms['url5'])) { ?>
        				<div class="timeline-url">
                			</small><i class="fa fa-link fa-fw"></i><a href="http://<?php echo $TimeLineItemsParms['url5']; ?>" target="_blank"><?php echo $TimeLineItemsParms['url5']; ?></a></small>
                		</div>
        			<?php }; ?>
              	</div>
            </div>
            <?php endif ?>
        	<?php if ($TimeLineItemsParms['boxitem6'] == "1" ) : ?>
            <div class="timeline-wrapper">
                <div class="timeline-icon"><i class="<?php echo $TimeLineItemsParms['icon6']; ?>"></i></div>
              	<div class="timeline-block <?php echo $TimeLineItemsParms['position6']; ?>">
                	<div class="timeline-heading">
                  		<h4 class="timeline-title"><?php echo $TimeLineItemsParms['timeline_title6']; ?></h4>
                	</div>
                	<div class="timeline-text">
                		<?php echo $TimeLineItemsParms['timeline_text6']; ?>
                	</div>        	
                	<?php if (!empty($dateStart6)) { ?>
                		<div class="timeline-date <?php echo $TimeLineItemsParms['position6']; ?>">
                			<span class="date text-muted">
        	        			<?php echo $dateStart6; ?> 
        	        			<?php if (!empty($dateEnd6)){ ?>- 
        	        				<?php echo $dateEnd6; ?> 
        	        			<?php }; ?>
                			</span>
                		</div>
                	<?php }; ?>
                	<?php if (!empty($TimeLineItemsParms['url6'])) { ?>
        				<div class="timeline-url">
                			</small><i class="fa fa-link fa-fw"></i><a href="http://<?php echo $TimeLineItemsParms['url6']; ?>" target="_blank"><?php echo $TimeLineItemsParms['url6']; ?></a></small>
                		</div>
        			<?php }; ?>
              	</div>
            </div>
            <?php endif ?>
        </section>
