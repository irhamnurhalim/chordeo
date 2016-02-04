<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Donationmodel extends CI_Model {
    function Donationmodel()
    {
        parent::__construct();
    }
    /*Template Generator*/
    function template($data,$tmp)
    {
        $this->load->view('chdonationheader',$data);
        $this->load->view($tmp,$data);
        //$this->load->view('chprojectsidebar',$data);
        $this->load->view('chdonationfooter');
    }
}

/* End of file donationmodel.php */
/* Location: ./application/models/donationmodel.php */