<?php 
if($registry->has('theme_options') == true) { 
	$theme_options = $registry->get('theme_options');
	$config = $registry->get('config');
	$language_id = $config->get( 'config_language_id' );
	$customfooter = $theme_options->get( 'customfooter' );
	if(!isset($customfooter[$language_id])) {
		$customfooter[$language_id] = array(
			'facebook_status' => 0,
			'contact_status' => 0
		);
	}
$class = 3; 
$id = rand(0, 5000)*rand(0, 5000); 
$all = 4; 
$row = 4; 

if($theme_options->get( 'gallery_per_pow' ) == 6) { $class = 2; }
if($theme_options->get( 'gallery_per_pow' ) == 5) { $class = 25; }
if($theme_options->get( 'gallery_per_pow' ) == 3) { $class = 4; }

if($theme_options->get( 'gallery_per_pow' ) > 1) { $row = $theme_options->get( 'gallery_per_pow' ); $all = $theme_options->get( 'gallery_per_pow' ); } 
?>
<?php } ?>

<?php echo $header;
$theme_options = $registry->get('theme_options');
$config = $registry->get('config'); ?>
<?php 
$grid_center = 12; 
if($column_left != '') { 
	$grid_center = $grid_center-3; 
}

if($column_right != '') { 
	$grid_center = $grid_center-3; 
} 

require_once( DIR_TEMPLATE.$config->get($config->get('config_theme') . '_directory')."/lib/module.php" );
$modules_old_opencart = new Modules($registry); ?>

<!-- MAIN CONTENT
	================================================== -->
<div class="main-content full-width home">
			<div class="container">
				
						<div class="row">				
								<?php 
								$columnleft = $modules_old_opencart->getModules('column_left');
								if( count($columnleft) ) { ?>
								<div class="col-sm-3" id="column_left">
									<?php
									foreach ($columnleft as $module) {
										echo $module;
									}
									?>
								</div>
								<?php } ?>
								
								<?php $grid_center = 12; if( count($columnleft) ) { $grid_center = 9; } ?>
								<div class="col-sm-<?php echo $grid_center; ?>">
									<?php 
									$content_big_column = $modules_old_opencart->getModules('content_big_column');
									if( count($content_big_column) ) { 
										foreach ($content_big_column as $module) {
											echo $module;
										}
									} ?>
									
									<div class="row">
										<?php 
										$grid_content_top = 12; 
										$grid_content_right = 3;
										$column_right = $modules_old_opencart->getModules('column_right'); 
										if( count($column_right) ) {
											if($grid_center == 9) {
												$grid_content_top = 8;
												$grid_content_right = 4;
											} else {
												$grid_content_top = 9;
												$grid_content_right = 3;
											}
										}
										?>
										<div class="col-sm-<?php echo $grid_content_top; ?>">
											<?php 
											$content_top = $modules_old_opencart->getModules('content_top');
											if( count($content_top) ) { 
												foreach ($content_top as $module) {
													echo $module;
												}
											} ?>
										</div>
										
										<?php if( count($column_right) ) { ?> 
										<div class="col-sm-<?php echo $grid_content_right; ?>" id="column_right">
											<?php foreach ($column_right as $module) {
												echo $module;
											} ?>
										</div>
										<?php } ?>
									</div>
								</div>
						</div>
			</div>
					

						<div class="container">
						<div class="row">
						<div class="col-sm-12">
					
							<!-- Middle Left ->
							<?php $mcenterleft = $modules_old_opencart->getModules('mcenterleft'); ?>
								<?php  if(count($mcenterleft)) { ?>
								<!-- Slider -->
								<div class="col-sm-6 mpadding-right" style="padding-left: 0px;">
											<?php foreach($mcenterleft as $module) { ?>
											<?php echo $module; ?>
											<?php } ?>
								</div>
							<?php } ?>
							
							<!-- Middle Right ->
							<?php $mcenterright = $modules_old_opencart->getModules('mcenterright'); ?>
								<?php  if(count($mcenterright)) { ?>
								<!-- Slider -->
								<div id="column_right" class="col-sm-6 mpadding-left">
											<?php foreach($mcenterright as $module) { ?>
											<?php echo $module; ?>
											<?php } ?>
								</div>
							<?php } ?>
		
						</div>
						</div>
						</div>
					<!-- Content Bottom -->
					<?php 
						$contentbottom = $modules_old_opencart->getModules('content_bottom');
						if( count($contentbottom) ) { ?>
							<div class="bottom-holder" style="clear: both;">	
								<div class="container">
									<div class="row">	
										<div class="col-sm-12">	
											
												<?php
												foreach ($contentbottom as $module) {
													echo $module;
												}
												?>
											
										</div>
									</div>
								</div>
							</div>
					<?php } ?>
					
					<!-- Bottom Slider Position -->

						<?php $slideshow_bottom = $modules_old_opencart->getModules('slideshow_bottom'); ?>
						<?php  if(count($slideshow_bottom)) { ?>
						<!-- Slider -->
						<div id="slider" class="full-width" style="margin-bottom: 0px!important;">
									<?php foreach($slideshow_bottom as $module) { ?>
									<?php echo $module; ?>
									<?php } ?>
						</div>
						<?php } ?>
			
</div>
</div>
</div>
<?php echo $footer; ?>