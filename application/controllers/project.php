<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project extends CI_Controller {
    function Project()
    {
        parent::__construct();
        $this->load->model('viewloader');
        $this->load->model('dataloader');
        $this->load->model('adminviewloader');
        $this->load->model('projectmodel');
    }
    
    public function index()
    {
        redirect("/");
    }
    
    function browse($var="latest",$cat="all")
    {
        if($this->uri->segment(3)==NULL)
        {
            $v="latest";
        } else 
            {
            $v=$this->uri->segment(3);
        }
        if($this->uri->segment(4)==NULL)
        {
            $c="all";
        } else 
            {
            $c=$this->uri->segment(4);
        }
        $data['title']='Browse Project';
        $data['browse_link']=$this->viewloader->browse_link($var,$c);
        $data['categories']=$this->viewloader->menu_cat($cat);
        $data['pagination']=$this->viewloader->browse_pagination($v,$cat);
        $data['site']=$this->projectmodel->browse_project($var);
        $data['headproject']=$this->viewloader->head_project();
        $data['headcat']=$this->viewloader->head_cat();
        $this->projectmodel->template2($data,"chbrowse");
    }
    
    function submit()
    {
        $data['title']='Submit Project';
        $this->viewloader->template($data,"chsubmitproject");
    }
    
    function projectsubmit()
    {
        
    }
    
    function projectdetail($var='id',$id)
    {
        /* Database Initiation */
        $q = $this->db->get_where('ch_project', array('project_id' => $id));
        $row=$q->row();
        $s = $this->db->get_where('ch_user', array('user_id' => $row->project_user_id));
        $row_user=$s->row();
        $r = $this->db->get_where('ch_projectreward', array('project_id' => $id));
        $reward=$r->row();
        /* Data Inititaion */
        $time = $row->project_time;
        $datetime=human_to_unix($time);
        $data['project_until']= standard_date('DATE_COOKIE',gmt_to_local($datetime, 'UP7', 'FALSE'));
        $data['sidebar_amount_funding']=$row->amount_funding;
        $data['project_title']=$row->project_name;
        $data['project_author']=$row_user->name;
        $data['user_location']=$row_user->location;
        $data['user_bio']=$row_user->bio;
        $data['title']=$row->project_name.' by '.$row_user->name;
        $data['topmenu']=$this->projectmodel->menu_top($var,$id);
        $data['project_location']=$row->project_location;
        $data['user_avatar']=$row_user->avatar;
        for($i=1;$i<6;$i++)
        {
            $rew="reward_$i";
            $count="count_$i";
            $data["donate_$i"]=$reward->$rew;
            $data["count_$i"]=$reward->$count;
        }
        switch ($var) {
            case 'id':
                $data['project_home']=$row->project_home;
                $data['project_video']=$row->project_video;
                $this->projectmodel->template($data,"chprojectdetail");
                break;
            case 'updates':
                $data['project_updates']=$this->projectmodel->project_updates($id);
                $data['project_updates_form']=$this->projectmodel->editor($id);
                $this->projectmodel->template($data,"chprojectupdates");
                break;
            case 'comments':
                $data['project_comments']=$this->projectmodel->project_comments($id);
                $this->projectmodel->template($data,"chprojectcomments");
                break;
            default:
                $data['project_home']=$row->project_home;
                $this->projectmodel->template($data,"chprojectdetail");
                break;
        }
    }
    function update_project($id)
    {
        $data = array(
                   'project_id' => $id ,
                   'update_title' => $_POST['title'] ,
                   'update_content' => $_POST['content']
        );
        $q=$this->db->insert('ch_projectupdate', $data);
        if($q)
        {
            redirect($_SERVER['HTTP_REFERER']);
            $this->session->set_flashdata('updatestatus','<div class="pending grid_24"><img src="assets/images/info.png">Success!</div>');
        } else
        {
            redirect($_SERVER['HTTP_REFERER']);
            $this->session->set_flashdata('updatestatus','<div class="pending grid_24"><img src="assets/images/info.png">Fail!</div>');
        }
    }
    
    function edit_project($project_id,$id)
    {
        $this->projectdetail($var='updates',$project_id,$id);
    }
}

/* End of file site.php */
/* Location: ./application/controllers/project.php */