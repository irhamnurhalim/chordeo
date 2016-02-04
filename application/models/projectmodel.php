<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Projectmodel extends CI_Model {
    function Projectmodel()
    {
        parent::__construct();
    }
    /*Template Generator*/
    function template($data,$tmp)
    {
        $this->load->view('chadminheader',$data);
        $this->load->view($tmp,$data);
        $this->load->view('chprojectsidebar',$data);
        $this->load->view('chadminfooter');
    }
    function template2($data,$tmp)
    {
        $this->load->view('chprojectheader',$data);
        $this->load->view($tmp,$data);
        $this->load->view('chfooter');
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
                  <div class="pitch_description" id="pitch_description_'.$row["project_id"].'"><strong><a href="project/projectdetail/'.$row["project_id"].'">'.$row["project_name"].'</a></strong><br/>
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
    
    /* Browse Project */
    function browse_project()
    {
        $rs = '';
        if($this->uri->segment(5)==NULL)
            {
                $offset=0;
            } else 
            {
                $offset=$this->uri->segment(5);
            }
        $limit=2;
        $cat = $this->uri->segment(4);
        if($cat=="all")
        {
            $q=$this->db->get_where("ch_project",array("project_status"=>"true"),$limit,$offset);
        } else {
            $q=$this->db->get_where("ch_project",array("project_status"=>"true","category"=>$cat),$limit,$offset);
        }
        foreach($q->result_array() as $row)
        {
            $i=$row['project_id'];
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
        return $rs;
    }
    /* Project Detail */
    // Menu Top
    function menu_top($var,$id)
    {
        $rs = '';
        switch ($var) {
            case 'id':
                $rs .= ' <ul>
                        <li class="grid_4 selected"><a href="project/projectdetail/id/'.$id.'">PROJECT HOME</a></li>
                        <li class="grid_4"><a href="project/projectdetail/updates/'.$id.'">UPDATES</a></li>
                        <li class="grid_4"><a href="project/projectdetail/comments/'.$id.'">COMMENTS</a></li>
                    </ul></div>';
                //$rs .='<div class="grid_4 push_5 alpha follow"><input type="button" class="grid_4 button_follow" /></div>';
                break;
            case 'updates':
                $rs .= ' <ul>
                        <li class="grid_4"><a href="project/projectdetail/id/'.$id.'">PROJECT HOME</a></li>
                        <li class="grid_4 selected"><a href="project/projectdetail/updates/'.$id.'">UPDATES</a></li>
                        <li class="grid_4"><a href="project/projectdetail/comments/'.$id.'">COMMENTS</a></li>
                    </ul></div>';
                //$rs .='<div class="grid_4 push_5 alpha follow"><input type="button" class="grid_4 button_follow" /></div>';
                break;
            case 'comments':
                $rs .= ' <ul>
                        <li class="grid_4"><a href="project/projectdetail/id/'.$id.'">PROJECT HOME</a></li>
                        <li class="grid_4"><a href="project/projectdetail/updates/'.$id.'">UPDATES</a></li>
                        <li class="grid_4 selected"><a href="project/projectdetail/comments/'.$id.'">COMMENTS</a></li>
                    </ul></div>';
                //$rs .='<div class="grid_4 push_5 alpha follow"><input type="button" class="grid_4 button_follow" /></div>';
                break;
            default:
                $rs .= ' <ul>
                        <li class="grid_4 selected"><a href="project/projectdetail/id/'.$id.'">PROJECT HOME</a></li>
                        <li class="grid_4"><a href="project/projectdetail/updates/'.$id.'">UPDATES</a></li>
                        <li class="grid_4"><a href="project/projectdetail/comments/'.$id.'">COMMENTS</a></li>
                    </ul></div>';
                //$rs .='<div class="grid_4 push_5 alpha follow"><input type="button" class="grid_4 button_follow" /></div>';
                break;
        }
        return $rs;
    }
    
    function project_updates($id)
    {
        $this->db->order_by("id", "desc"); 
        $q = $this->db->get_where('ch_projectupdate', array('project_id' => $id));
        $rs ='';
        if($q->num_rows()==null)
        {
            $rs .= '<h1 class="proupdate">No Updates Available</h1>';
        }
        foreach($q->result_array() as $row)
        {
            $rs .= '<h1 class="proupdate">'.$row['update_title'].'</h1>';
            $rs .= '<p>'.$row['update_content'].'</p>';
            //$rs .= '<span class="edit"><a href="project/edit_project/'.$id.'/'.$row['id'].'">[Edit]</a></span> &nbsp; <span class="edit"><a href="project/delete_project/'.$id.'/'.$row['id'].'">[Delete]</a></span>';
        }
        return $rs;
    }
    
    function project_comments($id)
    {
        $rs ='<table width="100%">';
        $rs .='<tr><td width="20%">Name</td><td><strong>Alfard</strong></td></tr>';
        $rs .='</table>';
        $rs .='<form>
		<textarea name="comments" rows="5" cols="73"></textarea>
		<input type="submit" class="grid_3 push_11 alpha button_submit" value="COMMENT">
              </form>';
        $rs .='<div class="grid_14 jarak"></div><div class="clear"></div>';
        $s=$this->db->get_where("ch_projectcomment",array("project_id"=>$id));
        if($s->num_rows()==null)
        {
            $rs .='<h1>No Recent Comments</h1>';
        }
        foreach($s->result_array() as $row)
        {
            $q=$this->db->get_where("ch_user",array("user_id"=>$row['userid_comment']));
            $user=$q->row();
            $rs .='<div class="grid_14 recent_comments">
                            <div class="grid_14 content_comment">
                                    <img src="assets/images/'.$user->avatar.'" class="grid_2 avatar">
                                    <div class="grid_11 text">
                                            <p><a href="user/profile/'.$user->user_id.'" class="name">'.$user->name.'</a><br>
                                               <span class="time_posted">2 minutes ago</span><br>
                                               '.$row['content_comment'].'</p>
                                    </div>
                            </div>
                    </div>';
        }
        return $rs;
    }

    function editor($id)
    {
        $onblur="if(this.value==''){this.value='Title Update';this.style='color:#000'};";
        $onfocus="if(this.value=='Title Update'){this.value=''};";
        $q = $this->db->get_where('ch_projectupdate', array('id' => $id));
        $row=$q->row();
        $rs='<h3>Project Updates</h3><form action=project/update_project/'.$id.'" method="post">
            <p>
                <input type="text" name="title" onblur="'.$onblur.'" onfocus="'.$onfocus.'" id="title" value="Title Update" class="text-title"/>
            </p>    
            <p>
                <textarea class="ckeditor" cols="80" id="update" name="content" rows="10"></textarea>
            </p>
            <p>
                <input type="submit" class="button_submit" />
            </p>
        </form>';
        $rs.="<script type='text/javascript'>
                    CKEDITOR.replace( 'update',
                            {
                                    extraPlugins : 'uicolor',
                                    toolbar :
                                    [
                                            [ 'Bold','Italic','Underline','-','Strike','Subscript','Superscript','-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink', 'Anchor' ],
                                            [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ],
                                            [ 'JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl' ], 
                                            [ 'Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak','Iframe', ],
                                            [ 'Styles','Format','Font','FontSize' ]
                                    ]
                            });
		</script><hr />";
        return $rs;
    }

    function project_home($id)
    {
        $s=$this->db->get_where("ch_project",array("project_id"=>$id));
        $row=$s->row();
        return $row->project_home;
    }
    
    function verification_project()
    {
        $rs='hello';
        $rs .='<br>';
        return $rs;
    }
}

/* End of file projectmodel.php */
/* Location: ./application/models/projectmodel.php */