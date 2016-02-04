<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Editor extends CI_Model {
    function Editor()
    {
        parent::__construct();
    }
    
    /*Editor Tools*/
    public function form($name,$value=null)
    {
        $rs = '<script type="text/javascript">
                    tinyMCE.init({
                        // General options
                        mode : "textareas",
                        theme : "advanced",
                        skin : "o2k7",
                        skin_variant : "silver",
                        //file_browser_callback : "myFileBrowser",
                        plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave",
                        // Theme options
                        theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,insertdate,inserttime,preview,|,forecolor,backcolor",
                        theme_advanced_buttons2 : "styleselect,formatselect,fontselect,fontsizeselect",
                        theme_advanced_buttons3 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code",
                        theme_advanced_buttons4 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr",
                        theme_advanced_buttons5 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,|,print,|,ltr,rtl,|,fullscreen",
                        theme_advanced_toolbar_location : "top",
                        theme_advanced_toolbar_align : "left",
                        theme_advanced_statusbar_location : "bottom",
                        theme_advanced_resizing : false,
                        // Example word content CSS (should be your site CSS) this one removes paragraph margins
                        content_css : "'.base_url().'assets/tm/css/content.css",
                        // Drop lists for link/image/media/template dialogs
                        template_external_list_url : "'.base_url().'assets/tm/lists/template_list.js",
                        external_link_list_url : "'.base_url().'assets/tm/lists/link_list.js",
                        external_image_list_url : "'.base_url().'assets/tm/lists/image_list.js",
                        media_external_list_url : "'.base_url().'assets/tm/lists/media_list.js",
                        // Replace values for the template plugin
                        template_replace_values : {
                                username : "Some User",
                                staffid : "991234"
                        }
                    });
                </script>';
		$rs .= '<textarea id="'.$name.'" name="'.$name.'" rows="25" cols="80" style="width: 100%">'.$value.'</textarea><br />';
        return $rs;
    }
}

/* End of file editor.php */
/* Location: ./application/models/editor.php */