<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
    function User()
    {
        parent::__construct();
        $this->load->model('viewloader');
        $this->load->model('dataloader');
        $this->load->model('adminviewloader');
    }
    
    public function index()
    {
        $data['title']='Wellcome to Chordeo';
        $data['picture']=$this->dataloader->project_list();
        $this->viewloader->template($data,'chmain');
    }
    
    function profile($id)
    {
        $data['title']='User Profile '.$id;
        $data['profile']=$this->dataloader->user_profile($id);
        $q=$this->db->get_where("ch_user",array("user_id"=>$id));
        $row=$q->row();
        $data['name']=$row->name;
        $this->adminviewloader->template($data,'chprofile');
    }
}

/* End of file site.php */
/* Location: ./application/controllers/user.php */