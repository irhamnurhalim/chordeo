<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adminviewloader extends CI_Model {
    function Adminviewloader()
    {
        parent::__construct();
        $this->load->model("editor");
    }
    
    /*Template Generator*/
    function template($data,$tmp)
    {
        $this->load->view('chadminheader',$data);
        $this->load->view($tmp,$data);
        $this->load->view('chadminfooter');
    }
    
    function top_menu($var)
    {
        if($var=="index")
        {
            $rs = ' <ul>
                        <li class="grid_4 selected"><a href="adminchordeo">ADMIN HOME</a></li>
                        <li class="grid_4"><a href="adminchordeo/donation">DONATION</a></li>
                        <li class="grid_4"><a href="adminchordeo/project">PROJECTS</a></li>
                    </ul>';
        }elseif($var=="donation")
        {
            $rs = ' <ul>
                        <li class="grid_4"><a href="adminchordeo">ADMIN HOME</a></li>
                        <li class="grid_4 selected"><a href="adminchordeo/donation">DONATION</a></li>
                        <li class="grid_4"><a href="adminchordeo/project">PROJECTS</a></li>
                    </ul>';
        }elseif($var=="project")
        {
            $rs = ' <ul>
                        <li class="grid_4"><a href="adminchordeo">ADMIN HOME</a></li>
                        <li class="grid_4"><a href="adminchordeo/donation">DONATION</a></li>
                        <li class="grid_4 selected"><a href="adminchordeo/project">PROJECTS</a></li>
                    </ul>';
        }
        return $rs;
    }
    
}

/* End of file adminviewloader.php */
/* Location: ./application/models/adminviewloader.php */