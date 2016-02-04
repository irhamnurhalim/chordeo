<div id="center">	    
   	<div id="browse">
    	<div>
        <!-- Side Bar -->	
            <div id="left-menu">   
                <div class="type">
                   	BROWSE<hr />
                </div>
                <?php echo $browse_link;?>
                <br />
                <div class="type">
                   	CATEGORIES<hr />
                </div>
                <?php echo $categories;?>
            </div>
        <!-- end of side bar -->
        
        <!-- pagination -->
            <div id="projects">
            	<div>
                	<b><?php echo $headproject.$headcat;?></b>                                   	
                    	<?php echo $pagination;?>
                    <hr />                	
                </div>
                <!-- end of pagination -->
                
                <!-- project list -->
                
                <div id="project-list"><?php echo $site;?></div>
                
                <!-- end of project list -->
                <div>
                	<hr />
                    	<?php echo $pagination;?>
                </div>                
            </div>
        </div>
    </div>      
</div>