<div class="banner">
	<div class="container_24">
            <div class="grid_24 header">
		<h1>ADMIN SETTINGS</h1>
                <!-- Menu Top Admin -->
                <div class="grid_24 menu alpha">
                <?php echo $topmenu;?>
                </div>
                <!-- End menu top admin -->
                
            </div>
		<div class="clear"></div>
		<div class="space"></div>
		
                <!-- Pending donation -->
                <?php echo $donation_alert;?>
                <!-- end pending donation -->
                
		<div class="clear"></div>
		<div class="break"></div>
		
                <!-- Pending project -->
                <?php echo $project_alert;?>
		<!-- End Pending project -->
                
                <!-- Donation Section list -->
                <div class="clear"></div>
		<div class="space"></div>
		<?php echo $donation_list;?>
                <!-- End Donation -->
                
                <!-- Project List -->
		<?php echo $project_list;?>
                
                <!-- End Project List -->
		<div class="clear"></div>
		<div class="break"></div>
	</div>

