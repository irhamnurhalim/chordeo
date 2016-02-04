<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Launching extends CI_Controller {
    function Launching()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $data['title']='launching soon';
        $this->load->view('chlaunch',$data);
    }
}

/* End of file site.php */
/* Location: ./application/controllers/launching.php */