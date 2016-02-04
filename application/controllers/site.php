<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
    function Site()
    {
        parent::__construct();
        $this->load->model('viewloader');
        $this->load->model('dataloader');
    }
    
    public function index()
    {
        $data['title']='Welcome to Chordeo';
        $data['featured_project']=$this->dataloader->project_list();
        $this->viewloader->template($data,'chmain');
    }
    
    function login()
    {
        redirect("auth");
    }
}

/* End of file site.php */
/* Location: ./application/controllers/site.php */