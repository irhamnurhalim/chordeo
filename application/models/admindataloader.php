<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admindataloader extends CI_Model {
    function Admindataloader()
    {
        parent::__construct();
    }
    
    function project_alert()
    {
        $this->db->like('project_status', 'pending');
        $this->db->from('ch_project');
        $q=$this->db->count_all_results();
        if($q==null)
        {
            $rs = null;
        } else {
            $rs = '<div class="pending grid_24">';
            $rs .= '<img src="assets/images/info.png"> You have <a href="#"> '.$q.' pending projects</a>';
            $rs .= '</div>';
        }
        return $rs;
    }
    
    function donation_alert()
    {
        $this->db->like('donation_status', 'pending');
        $this->db->from('ch_donations');
        $q=$this->db->count_all_results();
        if($q==null)
        {
            $rs = null;
        } else {
            $rs = '<div class="pending grid_24">';
            $rs .= '<img src="assets/images/info.png"> You have <a href="#"> '.$q.' pending donations</a>';
            $rs .= '</div>';
        }
        return $rs;
    }
    
    function project_list()
    {
        $rs = '<div class="title grid_24">
			<p class="grid_3 add-margin"><b>PROJECTS</b></p>
			<a href="adminchordeo/project" class="grid_2 push_2">View all</a>
		</div>
		<div class="clear"></div>
		<div class="break"></div>';
        
        $this->db->select('*');
        $this->db->from('ch_project');
        $this->db->join('ch_user', 'ch_user.user_id = ch_project.project_user_id');
        $q = $this->db->get();
        foreach($q->result_array() as $row)
        {
            if($row["project_status"]=="pending")
            {
                $button = '<ul>
                                <li><a href="adminchordeo/verification_project/'.$row["project_id"].'/1">Accept</a></li>
                                <li><img src="assets/images/list.png"></li>
                                <li><a href="adminchordeo/verification_project/'.$row["project_id"].'/2">Decline</a></li>
                            </ul>';
                $disk = 'gray_disk.png';
                $class = 'grid_4 push_20 omega';
            }elseif($row["project_status"]=="true")
            {
                $button = '<a href="adminchordeo/verification_project/'.$row["project_id"].'/0">Cancel</a>';
                $disk = 'true.png';
                $class ='grid_2 push_22 cancel';
            }elseif($row["project_status"]=="false")
            {
                $button = '<a href="adminchordeo/verification_project/'.$row["project_id"].'/0">Cancel</a>';
                $disk = 'false.png';
                $class = 'grid_2 push_22 cancel';
            }elseif($row["project_status"]=="completed")
            {
                $button = null;
                $disk = 'pig_blue.png';
                $class = 'grid_2 push_22 cancel';
            }
            $rs .= '<div class="content_donation grid_24">
			<div class="grid_9 name">
			<img src="assets/images/project/'.$row["project_image"].'" class="grid_3">
			<a href="#">'.$row["project_name"].'</a><br>
			 by '.$row["name"].'
			</div>
			<div class="grid_5 push_1 name">
                            <ul>
                                    <li>'.$row["funding_duration"].' Days Left</li>
                                    <li>'.$row["amount_funding"].' Needed</li>
                                    <li>- Funded</li>
                            </ul>
			</div>
			<div class="grid_2 push_7"><img src="assets/images/'.$disk.'"/></div>
                    </div>
                    <div class="clear"></div>
                    <div class="action '.$class.'">';
            $rs .= $button;
            $rs .= '</div>
                    <div class="clear"></div>
                    <div class="space"></div>';
        }
        return $rs;
    }
    
    function donation_list()
    {
        $rs = '<div class="title grid_24">
                    <p class="grid_3"><b>DONATIONS</b></p>
                    <a href="adminchordeo/donation" class="grid_2 push_2">View all</a>
		</div>
		<div class="clear"></div>
		<div class="break"></div>';
        $this->db->select('*');
        $this->db->from('ch_donations');
        $this->db->join('ch_project', 'ch_project.project_id = ch_donations.project_id');
        $q = $this->db->get();
        foreach($q->result_array() as $row)
        {
            if($row["donation_status"]=="pending")
            {
                $disk = "gray_disk.png";
                $button = '<ul>
                                <li><a href="adminchordeo/verification/'.$row["donation_id"].'/1">Accept</a></li>
                                <li><img src="assets/images/list.png"></li>
                                <li><a href="adminchordeo/verification/'.$row["donation_id"].'/2">Decline</a></li>
                            </ul>';
                $class = 'grid_4 push_20 omega';
            } elseif ($row["donation_status"]=="true"){
                $disk = "true.png";
                $button = '<a href="adminchordeo/verification/'.$row["donation_id"].'/0">Cancel</a>';
                $class = 'grid_2 push_22 cancel';
            } elseif ($row["donation_status"]=="false"){
                $disk = "false.png";
                $button = '<a href="adminchordeo/verification/'.$row["donation_id"].'/0">Cancel</a>';
                $class = 'grid_2 push_22 cancel';
            }
            $s=$this->db->get_where("ch_user",array("user_id"=>$row['user_id']));
            $user=$s->row();
            $s=$this->db->get_where("ch_user",array("user_id"=>$row['project_user_id']));
            $project_user=$s->row();
            $rs .= '<div class="content_donation grid_24">';
            $rs .='<div class="grid_7 name">
                        <p><a href="profile/'.$user->user_id.'">'.$user->name.'</a></p>
                        <p>Bank Transfer: '.$row["bank_transfer"].'</p>
                        <p>Rp '.$row["amount"].' (Rp 500.000 reward)</p>
                        </div>
                        <div class="grid_9 push_1 name">
                        <img src="assets/images/'.$row["project_image"].'" class="grid_3">
                        <a href="project/projectdetail/'.$row["project_id"].'">'.$row["project_name"].'</a>
                        ('.$row["funding_duration"].' Days Left) <br>
                         by '.$project_user->name.' 
                        </div>
                        <div class="grid_2 push_5"><img src="assets/images/'.$disk.'"/></div>
                    </div>';
            $rs .= '<div class="clear"></div>';
            $rs .= '<div class="action '.$class.'">';
            $rs .= $button;
            $rs .= '</div>';
            $rs .= '<div class="clear"></div><div class="space"></div>';
        }
        $rs .= '<div class="clear"></div>
		<div class="space"></div>';
        return $rs;
    }
    
    function donation()
    {
        $rs = '<div class="title grid_24">
                    <p class="grid_3"><b>DONATIONS</b></p>
                    <div class="action grid_10 push_11">
                        <ul>
                            <li>Recently changed</li>
                            <li><img src="assets/images/list.png"></li>
                            <a href="#"><li>Pending</li></a>
                            <li><img src="assets/images/list.png"></li>
                            <a href="#"><li>Successful</li></a>
                            <li><img src="assets/images/list.png"></li>
                            <a href="#"><li>Failed</li></a>
                        </ul>
                    </div>
		</div>
		<div class="clear"></div>
		<div class="break"></div>
                <div class="clear"></div>
		<div class="break"></div>';
        $this->db->select('*');
        $this->db->from('ch_donations');
        $this->db->join('ch_project', 'ch_project.project_id = ch_donations.project_id');
        $q = $this->db->get();
        foreach($q->result_array() as $row)
        {
            if($row["donation_status"]=="pending")
            {
                $disk = "gray_disk.png";
                $button = '<ul>
                                <li><a href="adminchordeo/verification/'.$row["donation_id"].'/1">Accept</a></li>
                                <li><img src="assets/images/list.png"></li>
                                <li><a href="adminchordeo/verification/'.$row["donation_id"].'/2">Decline</a></li>
                            </ul>';
                $class = 'grid_4 push_20 omega';
            } elseif ($row["donation_status"]=="true"){
                $disk = "true.png";
                $button = '<a href="adminchordeo/verification/'.$row["donation_id"].'/0">Cancel</a>';
                $class = 'grid_2 push_22 cancel';
            } elseif ($row["donation_status"]=="false"){
                $disk = "false.png";
                $button = '<a href="adminchordeo/verification/'.$row["donation_id"].'/0">Cancel</a>';
                $class = 'grid_2 push_22 cancel';
            }
            $s=$this->db->get_where("ch_user",array("user_id"=>$row['user_id']));
            $user=$s->row();
            $s=$this->db->get_where("ch_user",array("user_id"=>$row['project_user_id']));
            $project_user=$s->row();
            $rs .= '<div class="content_donation grid_24">';
            $rs .='<div class="grid_7 name">
                        <p><a href="#">'.$user->name.'</a></p>
                        <p>Bank Transfer: '.$row["bank_transfer"].'</p>
                        <p>Rp '.$row["amount"].' (Rp 500.000 reward)</p>
                        </div>
                        <div class="grid_9 push_1 name">
                        <img src="assets/images/'.$row["project_image"].'" class="grid_3">
                        <a href="#">'.$row["project_name"].'</a>
                        ('.$row["funding_duration"].' Days Left) <br>
                         by '.$project_user->name.' 
                        </div>
                        <div class="grid_2 push_5"><img src="assets/images/'.$disk.'"/></div>
                    </div>';
            $rs .= '<div class="clear"></div>';
            $rs .= '<div class="action '.$class.'">';
            $rs .= $button;
            $rs .= '</div>';
            $rs .= '<div class="clear"></div><div class="space"></div>';
        }
        $rs .= '<div class="clear"></div>
		<div class="space"></div>';
        return $rs;
    }
    
    function project()
    {
        $rs = '<div class="title grid_24">
                    <p class="grid_3"><b>PROJECT</b></p>
                    <div class="action grid_10 push_11">
                        <ul>
                            <li>Recently changed</li>
                            <li><img src="assets/images/list.png"></li>
                            <a href="#"><li>Pending</li></a>
                            <li><img src="assets/images/list.png"></li>
                            <a href="#"><li>Successful</li></a>
                            <li><img src="assets/images/list.png"></li>
                            <a href="#"><li>Failed</li></a>
                        </ul>
                    </div>
		</div>
		<div class="clear"></div>
		<div class="break"></div>
                <div class="clear"></div>
		<div class="break"></div>';
        
        $this->db->select('*');
        $this->db->from('ch_project');
        $this->db->join('ch_user', 'ch_user.user_id = ch_project.project_user_id');
        $q = $this->db->get();
        foreach($q->result_array() as $row)
        {
            if($row["project_status"]=="pending")
            {
                $button = '<ul>
                                <li><a href="adminchordeo/verification_project/'.$row["project_id"].'/1">Accept</a></li>
                                <li><img src="assets/images/list.png"></li>
                                <li><a href="adminchordeo/verification_project/'.$row["project_id"].'/2">Decline</a></li>
                            </ul>';
                $disk = 'gray_disk.png';
                $class = 'grid_4 push_20 omega';
            }elseif($row["project_status"]=="true")
            {
                $button = '<a href="adminchordeo/verification_project/'.$row["project_id"].'/0">Cancel</a>';
                $disk = 'true.png';
                $class ='grid_2 push_22 cancel';
            }elseif($row["project_status"]=="false")
            {
                $button = '<a href="adminchordeo/verification_project/'.$row["project_id"].'/0">Cancel</a>';
                $disk = 'false.png';
                $class = 'grid_2 push_22 cancel';
            }elseif($row["project_status"]=="completed")
            {
                $button = null;
                $disk = 'pig_blue.png';
                $class = 'grid_2 push_22 cancel';
            }
            $rs .= '<div class="content_donation grid_24">
			<div class="grid_9 name">
			<img src="assets/images/project/'.$row["project_image"].'" class="grid_3">
			<a href="#">'.$row["project_name"].'</a><br>
			 by '.$row["name"].'
			</div>
			<div class="grid_5 push_1 name">
                            <ul>
                                    <li>'.$row["funding_duration"].' Days Left</li>
                                    <li>'.$row["amount_funding"].' Needed</li>
                                    <li>- Funded</li>
                            </ul>
			</div>
			<div class="grid_2 push_7"><img src="assets/images/'.$disk.'"/></div>
                    </div>
                    <div class="clear"></div>
                    <div class="action '.$class.'">';
            $rs .= $button;
            $rs .= '</div>
                    <div class="clear"></div>
                    <div class="space"></div>';
        }
        return $rs;
    }
}

/* End of file admindataloader.php */
/* Location: ./application/models/admindataloader.php */