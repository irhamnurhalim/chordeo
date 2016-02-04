<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Donate extends CI_Controller {
    function Donate()
    {
        parent::__construct();
        $this->load->model('viewloader');
        $this->load->model('donationmodel');
    }
    
    public function index()
    {
        redirect("/");
    }
    
    function project($id=null)
    {
    	$data['title']='Donation project';
    	$this->donationmodel->template($data,'chdonationindex');
    }
}