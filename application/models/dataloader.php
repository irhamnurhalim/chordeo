<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dataloader extends CI_Model {
    function Dataloader()
    {
        parent::__construct();
    }
    
    /*Main Loader Generator*/
    function project_list()
    {
        
        $rs = '<div class="picture-wrapper">';
        $q=$this->db->get_where("ch_project",array("featured"=>1));
        foreach($q->result_array() as $row)
        {
            $s=$this->db->get_where("ch_user",array("user_id"=>$row['project_user_id']));
            $user=$s->row();
            $rs .= '
                <script type="text/javascript">
                    $(document).ready(function(){
                            $("#pitch_'.$row["project_id"].'").mouseover(function(){
                                    $("#pitch_description_'.$row["project_id"].'").animate({top:"0px"},"fast");
                                    $("#pitch_background_'.$row["project_id"].'").animate({top:"0px"},"fast");
                            });

                            $("#pitch_'.$row["project_id"].'").mouseleave(function(){
                                    $("#pitch_description_'.$row["project_id"].'").animate({top:"240px"},"fast");
                                    $("#pitch_background_'.$row["project_id"].'").animate({top:"240px"},"fast");
                            });
                    });
                </script>            
                
                <div class="pitch_container" id="pitch_'.$row["project_id"].'">
                    <img src="assets/images/project/'.$row["project_image"].'" width="230" height="300" />
                  <div class="pitch_background" id="pitch_background_'.$row["project_id"].'">  </div>
                  <div class="pitch_description" id="pitch_description_'.$row["project_id"].'"><strong><a href="project/projectdetail/id/'.$row["project_id"].'">'.$row["project_name"].'</a></strong><br/>
                    <div class="pitch_description_creator">by '.$user->name.'</div>
                    <div class="pitch_description_content">'.$row["project_detail"].'
                      </div>
                    <div class="pitch_amount_funded"><strong>Rp '.number_format($row["amount_funding"],2,",",".").'</strong> Needed </div>
                    <div class="pitch_progressbar_funded"><div style="height:100%;width:'.$row["funding_status"].'%;background-color:#FFF"></div></div>
                    <div class="pitch_progress_funded" style=""><strong>'.$row["funding_status"].'%</strong> Funded
                      <span style="font-size:11pt; text-align:right"><strong>30</strong> Days Left</span></div>
                  </div>
                </div>';
        }
        $rs .= '</div>';
        return $rs;
    }
    /* User Profile */
    function user_profile($id)
    {
        $rs='<div class="grid_12">';	
	$q=$this->db->get_where("ch_user",array("user_id"=>$id));
        $row=$q->row();
        $rs .='
                <div class="grid_4 field">location</div>
                <div class="grid_7"><strong>'.$row->location.'</strong></div>
                <div class="clear"></div>
                <div class="space"></div>
                <div class="grid_4 field">website</div>
                <div class="grid_7"><strong>'.$row->website.'</strong></div>
                <div class="clear"></div>
                <div class="space"></div>
                <div class="grid_4 field">biography</div>
                <div class="grid_7"><strong>'.$row->bio.'</strong></div>
                <div class="clear"></div>
                <div class="space"></div>
                <a href="#" class="grid_4 button_save alpha push_4"></a>
            </div>
            <div class="grid_5 push_2 pp">
                    <img src="assets/images/'.$row->avatar.'">
            </div>';
        return $rs;
    }
}

/* End of file dataloader.php */
/* Location: ./application/models/dataloader.php */