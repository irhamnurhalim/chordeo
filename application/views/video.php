<?php 
$v=$this->db->query("SELECT video FROM ch_websetting");
$row=$v->row();
?>
<iframe 
    width="473" 
    height="354" 
    src="http://www.youtube.com/embed/<?php echo $row->video;?>?rel=0" 
    frameborder="0" 
    allowfullscreen="">
</iframe>