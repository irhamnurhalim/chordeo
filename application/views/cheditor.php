<div id="center">
    <div id="titlehead">
        <div id="titletext">
            <strong><?php echo $title;?></strong>
        </div>
    </div>
    <div class="misc">
        <?php echo $this->session->flashdata('success_post'); ?>
        <?php echo $this->session->flashdata('error_post'); ?>

        <div id="alerts">
                <noscript>
                        <p>
                                <strong>CKEditor requires JavaScript to run</strong>. In a browser with no JavaScript
                                support, like yours, you should still see the contents (HTML data) and you should
                                be able to edit it normally, without a rich editor interface.
                        </p>
                </noscript>
        </div>
        <form action="<?php echo site_url();?>/misc/to_editor" method="post">
            <p>
                <label>Title</label>
                <input type="text" name="title" id="title" class="text-form"/>
            </p>    
            <p>
                <label for="editor1">Editor 1:</label>
                <textarea class="ckeditor" cols="80" id="editor1" name="content" rows="10"></textarea>
            </p>
            <p>
                <input type="image" src="assets/images/project_submit.png" onmouseover="javascript:this.src='assets/images/project_submit_hover.png';" onmouseout="javascript:this.src='assets/images/project_submit.png';" />
            </p>
        </form>
        <div>
            <?php echo $content;?>
        </div>
    </div>
</div>