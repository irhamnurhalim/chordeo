<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adminchordeo extends CI_Controller {
    function Adminchordeo()
    {
        parent::__construct();
        $this->load->model('adminviewloader');
        $this->load->model('admindataloader');
    }
    
    public function index()
    {
        $data['title']='Site Administration';
        $data['donation_alert']=$this->admindataloader->donation_alert();
        $data['project_alert']=$this->admindataloader->project_alert();
        $data['project_list']=$this->admindataloader->project_list();
        $data['donation_list']=$this->admindataloader->donation_list();
        $data['topmenu']=$this->adminviewloader->top_menu('index');
        $this->adminviewloader->template($data,'chadminindex');
    }
    
    public function donation()
    {
        $data['title']='Site Administration';
        $data['donation_list']=$this->admindataloader->donation();
        $data['topmenu']=$this->adminviewloader->top_menu('donation');
        $this->adminviewloader->template($data,'chadmindonation');
    }
    
    public function project()
    {
        $data['title']='Site Administration';
        $data['project_list']=$this->admindataloader->project();
        $data['topmenu']=$this->adminviewloader->top_menu('project');
        $this->adminviewloader->template($data,'chadminproject');
    }
    
    function verification($p,$var)
    {
        if($var==0)
        {
            $q=$this->db->query("UPDATE  ch_donations SET donation_status = 'pending' WHERE donation_id=$p");
            if($q)
            {
                redirect("adminchordeo");
            } else {
                redirect("adminchordeo");
            }
        }elseif($var==1)
        {
            $q=$this->db->query("UPDATE  ch_donations SET donation_status = 'true' WHERE donation_id=$p");
            if($q)
            {
                redirect("adminchordeo");
            } else {
                redirect("adminchordeo");
            }
        }elseif($var==2)
        {
            $q=$this->db->query("UPDATE  ch_donations SET donation_status = 'false' WHERE donation_id=$p");
            if($q)
            {
                redirect("adminchordeo");
            } else {
                redirect("adminchordeo");
            }
        }
    }
    
    function verification_project($p,$var)
    {
        if($var==0)
        {
            $q=$this->db->query("UPDATE  ch_project SET project_status = 'pending' WHERE project_id=$p");
            if($q)
            {
                redirect("adminchordeo");
            } else {
                redirect("adminchordeo");
            }
        }elseif($var==1)
        {
            $q=$this->db->query("UPDATE  ch_project SET project_status = 'true' WHERE project_id=$p");
            if($q)
            {
                redirect("adminchordeo");
            } else {
                redirect("adminchordeo");
            }
        }elseif($var==2)
        {
            $q=$this->db->query("UPDATE  ch_project SET project_status = 'false' WHERE project_id=$p");
            if($q)
            {
                redirect("adminchordeo");
            } else {
                redirect("adminchordeo");
            }
        }
    }
}

/* End of file site.php */
/* Location: ./application/controllers/administration.php */