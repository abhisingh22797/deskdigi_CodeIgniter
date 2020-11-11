<script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-users"></i> About Page Management
            <small>Edit About</small>
        </h1>
    </section>

    <section class="content">

        <div class="row">
            <!-- left column -->
            <div class="col-md-4 pull-right">
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
            <div class="col-md-12">
                <!-- general form elements -->



                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter About Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php
                    $attributes = array('id' => 'editAbout', 'method' => 'post', 'class' => 'form_horizontal');
                    echo form_open_multipart('admin/about/editAbout', $attributes);
                    ?>

                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Page Title</label>
                                    <input type="text" class="form-control required" value="<?php echo $allData->ptitle; ?>" id="ptitle" name="ptitle">
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">Description Title</label>
                                    <textarea rows="10" col="8" id="title" class="form-control" name="title"><?php echo $allData->title; ?></textarea>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="stitle">Description SubTitle</label>

                                    <textarea rows="10" col="8" id="stitle" class="form-control" name="stitle"><?php echo $allData->stitle; ?></textarea>
                                </div>

                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="description1">Description_1</label>

                                    <textarea rows="10" col="8" id="description1" class="form-control" name="description1"><?php echo $allData->description1; ?></textarea>
                                </div>

                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Description_2</label>

                                    <textarea rows="10" col="8" id="description2" class="form-control" name="description2"><?php echo $allData->description2; ?></textarea>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <h3 class="box-title">Sec2 Details</h3>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">sec2 Title</label>
                                    <input type="text" class="form-control required" value="<?php echo $allData->sec2title; ?>" id="sec2title" name="sec2title">
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">sec2 Description</label>

                                    <textarea rows="10" col="8" id="sec2description" class="form-control" name="sec2description"><?php echo $allData->sec2description; ?></textarea>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Excellent Support</label>

                                    <textarea rows="10" col="8" id="support" class="form-control" name="support"><?php echo $allData->support; ?></textarea>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Awesome Team</label>

                                    <textarea rows="10" col="8" id="Awesome" class="form-control" name="Awesome"><?php echo $allData->Awesome; ?></textarea>
                                </div>


                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Faster Performance</label>

                                    <textarea rows="10" col="8" id="Performance" class="form-control" name="Performance"><?php echo $allData->Performance; ?></textarea>
                                </div>


                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Vision Title</label>
                                    <input type="text" class="form-control required" value="<?php echo $allData->vision_title; ?>" id="vision_title" name="vision_title">
                                </div>



                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Vision Description</label>

                                    <textarea rows="10" col="8" id="vision_description" class="form-control" name="vision_description"><?php echo $allData->vision_description; ?></textarea>
                                </div>



                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Our Valuable Clients</label>

                                    <textarea rows="10" col="8" id="clint_title" class="form-control" name="clint_title"><?php echo $allData->clint_title; ?></textarea>
                                </div>



                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Our Clients Description</label>

                                    <textarea rows="10" col="8" id="client_description" class="form-control" name="client_description"><?php echo $allData->client_description; ?></textarea>
                                </div>



                            </div>
                        </div>
                    </div>


                    <div class="row">


                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="client1">client1 photo</label>
                                <input type="file" class="form-control required" id="banner_image" name="client1">
                                <img src="<?php echo  base_url(); ?>uploads/client/<?php echo $allData->client1; ?>" height="100px" width="200px">
                                <input type="hidden" name="oldimage1" value="<?php echo $allData->client1; ?>">
                            </div>
                        </div>



                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="client2">client2 photo</label>
                                <input type="file" class="form-control required" id="banner_image" name="client2">
                                <img src="<?php echo  base_url(); ?>uploads/client/<?php echo $allData->client2; ?>" height="100px" width="200px">
                                <input type="hidden" name="oldimage2" value="<?php echo $allData->client2; ?>">
                            </div>
                        </div>



                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="client3">client3 photo</label>
                                <input type="file" class="form-control required" id="banner_image" name="client3">
                                <img src="<?php echo  base_url(); ?>uploads/client/<?php echo $allData->client3; ?>" height="100px" width="200px">
                                <input type="hidden" name="oldimage3" value="<?php echo $allData->client3; ?>">
                            </div>
                        </div>



                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="client4">client4 photo</label>
                                <input type="file" class="form-control required" id="banner_image" name="client4">
                                <img src="<?php echo  base_url(); ?>uploads/client/<?php echo $allData->client4; ?>" height="100px" width="200px">
                                <input type="hidden" name="oldimage4" value="<?php echo $allData->client4; ?>">
                            </div>
                        </div>
                    </div>












                </div><!-- /.box-body -->

                <div class="box-footer">
                    <input type="submit" class="btn btn-primary" value="Submit" />

                    <input type="hidden" name="id" value="<?php echo $allData->id; ?>" />
                </div>
                </form>
            </div>
        </div>

</div>
</section>
</div>
<!--<script type="text/javascript">
    CKEDITOR.replace('description');
</script>-->