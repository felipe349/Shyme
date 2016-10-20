<div class="container-fluid">
    <div class="form-container">
        <form id="upload_form" enctype="multipart/form-data" method="post">
            
            <div class="input-group">
                <label class="form-control" for="image_file">Escolha um arquivo de imagem</label>
                <input class="form-control" type="file" name="image_file" id="image_file" onchange="fileSelected();" />
                <input class=" btn-default btn-shyme-default" type="button" value="Upload" onclick="startUploading()" />
            </div>
            
            <div id="fileinfo">
                <div id="filename"></div>
                <div id="filesize"></div>
                <div id="filetype"></div>
                <div id="filedim"></div>
            </div>
    
            <div id="progress_info">
                <div id="progress"></div>
                <div id="progress_percent">&nbsp;</div>
                <div class="clear_both"></div>
                <div>
                    <div id="speed">&nbsp;</div>
                    <div id="remaining">&nbsp;</div>
                    <div id="b_transfered">&nbsp;</div>
                    <div class="clear_both"></div>
                </div>
                <div id="upload_response"></div>
            </div>
        </form>
        
        <div id="error" class="alert alert-danger" role="alert" style="display: none;">You should select valid image files only!</div>
        <div id="error2" class="alert alert-danger" role="alert" style="display: none;">An error occurred while uploading the file</div>
        <div id="abort" class="alert alert-warning" role="alert" style="display: none;">The upload has been canceled by the user or the browser dropped the connection</div>
        <div id="warnsize" class="alert alert-warning" role="alert" style="display: none;">Your file is very big. We can't accept it. Please select more small file</div>
        
        <img id="preview" />
    </div>
    <script language="text/javascript" src="<?php echo base_url(); ?>js/jquery.form.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
</div>