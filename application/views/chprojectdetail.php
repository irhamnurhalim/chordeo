<div class="banner">
	<div class="container_24 full">
            <div class="grid_24 header">
		<div class="grid_24 judul"><p class="judul_utama"><?php echo $project_title;?><p style="color:white">Project by <font color="yellow"><?php echo $project_author;?></font></p></div>
		<div class="grid_15 menu_margin_top_lit alpha">
                    <?php echo $topmenu;?>
                    <!-- End menu top -->
            </div>
            <div class="grid_9 push_15 bg_kanan"></div>
            
            <!-- Content -->
            <div class="grid_24">  
	<div class="grid_14 alpha content-kiri">
            <iframe 
                width="550" 
                height="400" 
                src="http://www.youtube.com/embed/<?php echo $project_video;?>?rel=0" 
                frameborder="0" 
                allowfullscreen="" />
            </iframe>
            <hr/>
            <?php echo $project_home;?>
            <p><strong>Location :</strong> <?php echo $project_location;?></p>
            <hr />
	</div>