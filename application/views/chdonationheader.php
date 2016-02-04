<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title ?></title>
<base href="<?php echo base_url();?>" />
<link rel="shortcut icon" href="favicon.ico" />
<link rel="stylesheet" type="text/css" href="assets/960gs/960.css" />
<link rel="stylesheet" type="text/css" href="assets/960gs/960_24_col.css" />
<link rel="stylesheet" type="text/css" href="assets/960gs/reset.css" />
<link rel="stylesheet" type="text/css" href="assets/style/style.css" />
<script type="text/javascript" src="assets/behaviour/jquery-1.6.min.js"></script>
<script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
</head>
<body>
<!-- Header pre login-->
<div id="top">
<?php if($this->session->userdata("LOGGED_IN")){?>

    <div id="header">
        <a href="<?php echo base_url();?>" id="logo"><img src="assets/images/logo.png" /></a>
        
    </div>

<?php } else { ?>
<div id="header">
    <a href="<?php echo base_url();?>" id="logo"><img src="assets/images/logo.png" /></a>
    <ul id="top-right" class="hor-menu">
        <li><a href="#">HELP</a></li>
    </ul>
    <div id="top-navi">
        <a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('message','','assets/images/message_hover.png',1)"><img src="assets/images/message.png" name="message" width="30" height="30" border="0" id="message" /></a>     
        <a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('notification','','assets/images/notification_hover.png',1)"><img src="assets/images/notification.png" name="notification" width="30" height="30" border="0" id="notification" /></a>
        <a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('profile','','assets/images/profile_hover.png',1)"><img src="assets/images/profile.png" name="profile" width="30" height="30" border="0" id="profile" /></a>
    </div>
</div>
<?php }?>
</div>
<!-- To Main -->