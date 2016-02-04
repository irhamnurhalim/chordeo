<div id="center">
      <div style="background-color: #003f66; background-image: url(assets/images/tag_bg.png); background-repeat: repeat-x;">
        <div id="motto">
            <img src="assets/images/motto.png" />
        </div>  
      </div>
        <!-- How it Works -->
        <div class="band">
              <div align="center">HOW IT WORKS</div>
        </div>
        <!-- Video -->
        <div id="hiw">
            <div align="center">
                <?php $this->load->view('video');?>
            </div>
        </div>
        <!-- Featured Project -->
        <div class="band">
            <div align="center">FEATURED PROJECTS</div>
        </div>

        <div id="fp">
        <div>
            <div class="picture">
                <div class="picture-wrapper">
                        <?php echo $featured_project;?>
                </div>
        </div>
        <div class="button">
                <br /><br />
            <a href="project/submit" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('submit','','assets/images/submit_hover.png',1)">
                <img src="assets/images/submit.png" name="submit" width="232" height="42" border="0" id="submit" />
            </a>&nbsp;&nbsp;
            <a href="project/browse" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('browse','','assets/images/browse_bg.png',1)">
                <img src="assets/images/browse.png" name="browse" width="231" height="42" border="0" id="browse" />
            </a> 
          </div>
        </div>
    </div>    
</div>
