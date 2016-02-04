<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Session extends CI_Controller {
    function Session()
    {
        parent::__construct();
        $this->load->model('viewloader');
        $this->load->model('dataloader');
    }
    
    public function index()
    {
        $data['title']='Wellcome to Chordeo';
        $data['picture']=$this->dataloader->project_list();
        $this->viewloader->template($data,'chmain');
    }
}

/* End of file site.php */
/* Location: ./application/controllers/session.php */