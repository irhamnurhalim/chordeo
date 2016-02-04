<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Auth extends CI_Controller {
    function Auth()
    {
        parent::__construct();
        $this->load->model('viewloader');
    }
    public function index()
    {
        $this->authentication();
    }

    protected function authentication()
    {
        $username = $_POST['username'];
        $password = $this->encrypt->sha1($_POST['password']);
        $ip = $_POST['ip'];
        if ($this->dologin($username,$password,$ip))
        {
            redirect('administrator');
        }
        else {
            $this->session->set_flashdata('message_login','<div class="error">Username atau Password salah!</div>');
            redirect('site/login');
        }
    }

    private function dologin($user_name, $user_pass, $ip)
    {
        $q1 = $this->db->query("select * from ch_user where username='".$user_name."' AND password='".$user_pass."'");
        if ($q1->num_rows() != null)
            {
                $row = $q1->row();
                $sesi = array(
                       'username'  => $user_name,
                       'type' => $row->type,
                       'LOGGED_IN' => TRUE
                       );
                $this->session->set_userdata($sesi);
                return true;
            }
            else
            {
                return false;
            }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect('/');
    }
}
?>