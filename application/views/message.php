<?php if($this->session->has_userdata('success')) { ?> 
    <div class="alert  alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        <?= $this->session->flashdata('success'); ?>
    </div>    
<?php } ?>
