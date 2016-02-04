<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Viewloader extends CI_Model {
    function Viewloader()
    {
        parent::__construct();
        $this->load->model("editor");
    }
    
    /* Link Category*/
    function browse_link($var,$c)
    {
        switch($var)
        {
            case "latest":
                $rs = '<ul>
                    <li class="active"><a href="project/browse/latest/'.$c.'">Latest</a></li>
                    <li><a href="project/browse/popular/'.$c.'">Popular</a></li>
                    <li><a href="project/browse/ending_soon/'.$c.'">Ending Soon</a></li>
                </ul>';
            break;
            case "popular":
                $rs = '<ul>
                    <li><a href="project/browse/latest/'.$c.'">Latest</a></li>
                    <li class="active"><a href="project/browse/popular/'.$c.'">Popular</a></li>
                    <li><a href="project/browse/ending_soon/'.$c.'">Ending Soon</a></li>
                </ul>';
            break;
            case "ending_soon":
                $rs = '<ul>
                    <li><a href="project/browse/latest/'.$c.'">Latest</a></li>
                    <li><a href="project/browse/popular/'.$c.'">Popular</a></li>
                    <li class="active"><a href="project/browse/ending_soon/'.$c.'">Ending Soon</a></li>
                </ul>';
            break;
            default:
                $rs = '<ul>
                    <li class="active"><a href="project/browse/latest/'.$c.'">Latest</a></li>
                    <li><a href="project/browse/popular/'.$c.'">Popular</a></li>
                    <li><a href="project/browse/ending_soon/'.$c.'">Ending Soon</a></li>
                </ul>';
        };
        return $rs;
    }
    function menu_cat($cat=null)
    {
        if($this->uri->segment(3)==NULL)
        {
            $var="latest";
        } else 
            {
        
            $var=$this->uri->segment(3);
        }
        switch($cat)
        {
            case "all":
                $rs = '<ul>
                    <li class="active"><a href="project/browse/'.$var.'/all">All</a></li>
                    <li><a href="project/browse/'.$var.'/art">Art</a></li>
                    <li><a href="project/browse/'.$var.'/engineering">Engineering</a></li>
                    <li><a href="project/browse/'.$var.'/social">Social</a></li>
                </ul>';
            break;
            case "art":
                $rs = '<ul>
                    <li><a href="project/browse/'.$var.'/all">All</a></li>
                    <li class="active"><a href="project/browse/'.$var.'/art">Art</a></li>
                    <li><a href="project/browse/'.$var.'/engineering">Engineering</a></li>
                    <li><a href="project/browse/'.$var.'/social">Social</a></li>
                </ul>';
            break;
            case "engineering":
                $rs = '<ul>
                    <li><a href="project/browse/'.$var.'/all">All</a></li>
                    <li><a href="project/browse/'.$var.'/art">Art</a></li>
                    <li class="active"><a href="project/browse/'.$var.'/engineering">Engineering</a></li>
                    <li><a href="project/browse/'.$var.'/social">Social</a></li>
                </ul>';
            break;
            case "social":
                $rs = '<ul>
                    <li><a href="project/browse/'.$var.'/all">All</a></li>
                    <li><a href="project/browse/'.$var.'/art">Art</a></li>
                    <li><a href="project/browse/'.$var.'/engineering">Engineering</a></li>
                    <li class="active"><a href="project/browse/'.$var.'/social">Social</a></li>
                </ul>';
            break;
            default :
                $rs = '<ul>
                    <li class="active"><a href="project/browse/'.$var.'/all">All</a></li>
                    <li><a href="project/browse/'.$var.'/all">Art</a></li>
                    <li><a href="project/browse/'.$var.'/engineering">Engineering</a></li>
                    <li><a href="project/browse/'.$var.'/social">Social</a></li>
                </ul>';
        };
                
        return $rs;
    }
    
    /* Pagination Browse Page */
    function browse_pagination($var,$cat)
    {
        /*Pagination*/
        $limit=2;
        $this->load->library('pagination');
        $q1 = $this->db->query('SELECT * FROM ch_project WHERE project_status="true" ORDER BY project_id DESC');
        $config['base_url'] = site_url().'project/browse/'.$var.'/'.$cat;
        $config['uri_segment'] = 5;
        $config['total_rows'] = $q1->num_rows();
        $config['per_page'] = $limit;
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['full_tag_open'] = '<ul class="nav">';
        $config['full_tag_close'] = '</ul>';
        $config['prev_link'] = '<li><img src="assets/images/left-arrow.gif" />Prev';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '<li>Next<img src="assets/images/right-arrow.gif" />';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['cur_tag_open']='<li>';
        $config['cur_tag_close']='</li>';
        $config['num_tag_open']='<li>';
        $config['num_tag_close']='</li>';
        $this->pagination->initialize($config);
        $rs = $this->pagination->create_links();
        /*End Pagination*/
        return $rs;
    }
    
    function head_project()
    {
        $var = $this->uri->segment(3);
        switch ($var) {
            case 'latest':
                $rs = 'LATEST PROJECT';
                break;
            case 'popular':
                $rs = 'POPULAR PROJECT';
                break;
            case 'ending_soon':
                $rs = 'ENDING SOON PROJECT';
                break;
            default:
                $rs = 'LATEST PROJECT';
                break;
        }
        return $rs;
    }
    
    function head_cat()
    {
        $var = $this->uri->segment(4);
        switch ($var) {
            case 'all':
                $rs = NULL;
                break;
            case 'art':
                $rs = ' | ART';
                break;
            case 'engineering':
                $rs = ' | ENGINEERING';
                break;
            case 'social':
                $rs = ' | SOCIAL';
                break;
            default:
                $rs = NULL;
                break;
        }
        return $rs;
    }
    
    /*Template Generator*/
    function template($data,$tmp)
    {
        $this->load->view('chheader',$data);
        $this->load->view($tmp,$data);
        $this->load->view('chfooter');
    }
    
    function template_admin($data,$tmp)
    {
        $this->load->view('chadminheader',$data);
        $this->load->view($tmp,$data);
        $this->load->view('chadminfooter');
    }

    function about()
    {
        $q = $this->db->get("ch_websetting");
        $row = $q->row();
        $rs = $row->about_chordeo;
        return $rs;
    }
    function contact()
    {
        $q = $this->db->get("ch_websetting");
        $row = $q->row();
        $rs = $row->contact_us;
        return $rs;
    }
    function privacy()
    {
        $q = $this->db->get("ch_websetting");
        $row = $q->row();
        $rs = $row->policy;
        return $rs;
    }
    function term()
    {
        $q = $this->db->get("ch_websetting");
        $row = $q->row();
        $rs = $row->term_of_use;
        return $rs;
    }
    function faq_help()
    {
        $q = $this->db->get("ch_websetting");
        $row = $q->row();
        $rs = $row->faq_help;
        return $rs;
    }
}

/* End of file viewloader.php */
/* Location: ./application/models/viewloader.php */