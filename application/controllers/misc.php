<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Misc extends CI_Controller {
    function Misc()
    {
        parent::__construct();
        $this->load->model('viewloader');
        $this->load->model('dataloader');
    }
    
    public function index()
    {
        redirect('/');
    }
    
    function about()
    {
        $data['title']='About Chordeo';
        $data['content']=$this->viewloader->about();
        $this->viewloader->template($data,"chsite");
    }
    
    function contact()
    {
        $data['title']='Contact Us';
        $data['content']=$this->viewloader->contact();
        $this->viewloader->template($data,"chsite");
    }
    
    function policy()
    {
        $data['title']='Privacy Policy';
        $data['content']=$this->viewloader->privacy();
        $this->viewloader->template($data,"chsite");
    }
    
    function term()
    {
        $data['title']='Term of Use';
        $data['content']=$this->viewloader->term();
        $this->viewloader->template($data,"chsite");
    }
    
    function faq()
    {
        $data['title']='FAQ / Help';
        $data['content']=$this->viewloader->faq_help();
        $this->viewloader->template($data,"chsite");
    }
    
    function editor()
    {
        $data['title']='Tes Editor';
        $q = $this->db->query("SELECT * FROM ch_article");
        $rs = '<hr>';
        foreach ($q->result() as $row)
        {
            $rs .= '<h2>'.$row->title.'</h2>';
            $rs .= '<p>'.$row->content.'</p>';
        }
        $data['content']=$rs;
        $this->viewloader->template($data,"cheditor");
    }
    
    function to_editor()
    {
        $title=$_POST['title'];
        $content=$_POST['content'];
        if($_POST==null)
        {
            $this->session->set_flashdata('error_post','<div class="error">Masukan semua parameter!</div>');
            redirect('misc/editor');
        } else
        {
            $data = array(
               'title' => $title ,
               'content' => $content
            );
            $q=$this->db->insert('ch_article', $data);
            if($q)
            {
                $this->session->set_flashdata('success_post','<div class="alert">Success!</div>');
                redirect('misc/editor');
            } else 
            {
                $this->session->set_flashdata('error_post','<div class="error">Error!</div>');
                redirect('misc/editor');
            }
        }
    }
}

/* End of file site.php */
/* Location: ./application/controllers/misc.php */