<script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-users"></i> Experts
            <small>Edit </small>
        </h1>
    </section>

    <section class="content">

        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->



                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Edit Experts </h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <?php
                    $attributes = array('id' => 'editbrand', 'method' => 'post', 'class' => 'form_horizontal');
                    echo form_open_multipart('admin/brands/editexpert/', $attributes);
                    ?>


                    <div class="box-body">
                        <div class="row">



                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="bimage">Add image</label>
                                    <input type="file" class="form-control required " id="bimage" name="bimage">
                                    <img src="<?php echo base_url() . 'uploads/brands/' . $user["image"]; ?>" width="100" height="80">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="title">title</label>
                                <input type="text" class="form-control" id="title" value="<?php echo $user["title"]; ?>" name="title">

                            </div>

                            <div class="col-md-6">
                                <label for="tech">Technology</label>
                                <input type="text" class="form-control" id="tech" value="<?php echo $user["tech"]; ?>" name="tech">

                            </div>

                        </div>



                    </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                    <input type="submit" class="btn btn-primary" value="Submit" name="submit" />
                    <input type="reset" class="btn btn-default" value="Reset" />
                    <input type="hidden" name="id" value="<?= $user['id'] ?>" />
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <?php
            $this->load->helper('form');
            $error = $this->session->flashdata('error');
            if ($error) {
            ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>
                </div>
            <?php } ?>
            <?php
            $success = $this->session->flashdata('success');
            if ($success) {
            ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php } ?>

            <div class="row">
                <div class="col-md-12">
                    <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                </div>
            </div>
        </div>
</div>
</section>

</div>