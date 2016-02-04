<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title ?></title>
<base href="<?php echo base_url();?>" />
<link rel="shortcut icon" href="favicon.ico">
<link type="text/css" href="assets/css/style.css" rel="stylesheet" />
<script type="text/javascript" src="assets/behaviour/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="assets/behaviour/jquery-ui-1.8.15.custom.min.js"></script>
<script type="text/javascript" src="assets/behaviour/basic.js"></script>
<script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>

</head>
<body onload="MM_preloadImages('assets/images/submit_hover.png','assets/images/browse_bg.png','assets/images/blog_footer_hover.png','assets/images/fb_hover.png','assets/images/tw_hover.png')">
<?php $url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>

<!-- Header pre login-->
<div id="top">
<?php if(!$this->session->userdata("LOGGED_IN")){?>

    <div id="header">
        <a href="<?php echo base_url();?>" id="logo"><img src="assets/images/logo.png" /></a>
        <form id="searchform">
            <div>
                <input id="s" type="text" onblur="if(this.value==''){this.value='Search'};" onfocus="if(this.value=='Search'){this.value=''};" name="s" value="Search" />
                <input id="searchsubmit" type="submit" value="Search" />
            </div>
        </form>
        <ul id="top-left" class="hor-menu">
                <li><a href="project/submit">POST A PROJECT</a></li>
            <li><a href="project/browse">BROWSE</a></li>
        </ul>
        <ul id="top-right" class="hor-menu">
            <li><a href="misc/faq">HELP</a></li>
            <li><a href="<?echo $url;?>#top" id="signup-link">SIGN UP</a></li>
            <li><a href="<?echo $url;?>#top" id="login-link">LOG IN</a></li>
        </ul>
        <script type="text/javascript">
        $(document).ready(function(){
            $("#login-link").click(function(){
                $("#login").slideToggle(200);
                $("#signup").hide(0);
            })

            $("#signup-link").click(function(){
                $("#signup").slideToggle(200);
                $("#login").hide(0);
            })

        })
        $(document).keydown(function(e) {
            if (e.keyCode == 27) {
                $("#login").hide(0);
            }
            if (e.keyCode == 27) {
                $("#signup").hide(0);
            }
        });

        </script>
        <!-- Login pitch box -->
        <div id="login" class="dialog">
            <div class="content">
                    <div class="title">LOG IN</div>
                    <hr />
                    <form method="post" action="<?php echo site_url();?>/auth">
                    <table width="100%">
                            <tbody>			
                                <tr>
                                        <td width="35%"><label for="email">EMAIL</label></td>
                                        <td width="65%"><input type="text" id="email" name="username" size="40"/></td>
                                </tr>
                                <tr>
                                        <td><label for="password">PASSWORD</label></td>
                                        <td><input type="password" id="password" name="password" size="40"/></td>
                                </tr>
                                <tr>
                                        <td><a href="#">Forgot password?</a></td>
                                        <td class="rem"><input type="checkbox" id="remember" name="" /><label for="remember">Remember me</label></td>
                                </tr>
                                <tr>
                                        <td></td>
                                        <td>
                                            <input type="submit" name="Submit" value="LOG ME IN!" class="button_submit" />
                                            <!--
                                            <input type="image" src="assets/images/login.png"  onmouseover="javascript:this.src='assets/images/login_hover.png';" onmouseout="javascript:this.src='assets/images/login.png';">
                                            -->
                                        </td>
                                </tr>
                                <tr>
                                    <td>Press ESC to close</td>
                                </tr>
                            </tbody>
                    </table>		
                    </form>
            </div>
        </div>
        <!-- Signup pitch box -->
        <div id="signup" class="dialog">
            <div class="content">
                    <div class="title">SIGN UP</div>
                    <hr />
                    <form method="post" action="#">
                    <table width="100%">
                            <tbody>
                                <tr>
                                        <td width="35%"><label for="name">NAME</label></td>
                                        <td width="65%"><input type="text" id="name" name="name" size="30"/></td>
                                </tr>
                                <tr>
                                        <td><label for="email">EMAIL</label></td>
                                        <td><input type="text" id="email" name="email" size="30"/></td>
                                </tr>
                                <tr>
                                        <td><label for="password">PASSWORD</label></td>
                                        <td><input type="password" id="password" name="" size="30"/></td>
                                </tr>
                                <tr>
                                        <td><label for="password">REPEAT PASSWORD</label></td>
                                        <td><input type="password" id="password" name="" size="30"/></td>
                                </tr>
                                <tr>
                                        <td colspan="2">By signing up you agree to our <a href="misc/term" target="_blank">Terms of use</a> and <a href="misc/policy" target="_blank">Privacy policy</a></td>
                                </tr>
                                <tr>
                                        <td>Press ESC to close</td>
                                        <td>
                                            <input type="submit" name="Submit" value="CREATE ACCOUNT" class="button_submit" />
                                        </td>
                                </tr>
                            </tbody>
                    </table>		
                    </form>
            </div>
        </div>
    </div>

<?php } else { ?>
<div id="header">
    <a href="<?php echo base_url();?>" id="logo"><img src="assets/images/logo.png" /></a>
    <form id="searchform">
    <div>
        <input id="s" type="text" name="s" value="Search" />
        <input id="searchsubmit" type="submit" value="Search" />
    </div>
    </form>
    
    <ul id="top-left" class="hor-menu">
        <li><a href="project/submit">POST A PROJECT</a></li>
        <li><a href="project/browse">BROWSE</a></li>
    </ul>
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