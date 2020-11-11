<script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-users"></i>Social-Media-Marketing
            <small>Edit</small>
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
                        <h3 class="box-title">Enter Social-Media-Marketing Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php
                    $attributes = array('id' => 'editstudentplacement', 'method' => 'post', 'class' => 'form_horizontal');
                    echo form_open_multipart('admin/Advisor/editstudentplacement', $attributes);
                    ?>

                    <div class="box-body">


                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="slid_title1">Page title</label>
                                    <input type="text" class="form-control required" value="<?php echo $allData->slid_title1; ?>" id="slid_title1" name="slid_title1" maxlength="128">

                                </div>
                            </div>

                        </div>
                        <div class="row">

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="slid_subtitle1">Sec 1 Title</label>
                                    <input type="text" class="form-control required" value="<?php echo $allData->slid_subtitle1; ?>" id="slid_subtitle1" name="slid_subtitle1" maxlength="128">

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="pdes">Sec 1 Description</label>

                                    <textarea rows="10" col="8" id="pdes" class="form-control" name="pdes"><?php echo $allData->pdes; ?></textarea>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="slid_img1">Sec 1 image</label>
                                    <input type="file" class="form-control required" id="banner_image" name="slid_img1">
                                    <img src="<?php echo  base_url(); ?>uploads/advisor/<?php echo $allData->slid_img1; ?>" height="100px" width="200px">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="slid_title2">Sec2 title</label>
                                    <input type="text" class="form-control required" value="<?php echo $allData->slid_title2; ?>" id="slid_title2" name="slid_title2" maxlength="128">

                                </div>
                            </div>
                        </div>

                        <div class="row">


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="slid_title2">subsec 1 title</label>
                                    <input type="text" class="form-control required" value="<?php echo $allData->slid_subtitle2; ?>" id="slid_subtitle2" name="slid_subtitle2" maxlength="128">

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="p1">subsec 1 Description</label>
                                    <textarea rows="10" col="8" id="p1" class="form-control" name="p1"><?php echo $allData->p1; ?> </textarea>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="p1">subsec 1 %</label>

                                    <input type="text" class="form-control required" value="<?php echo $allData->p2; ?>" id="p2" name="p2" maxlength="128">
                                </div>
                            </div>


                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="p3">subsec 2 title</label>

                                    <input type="text" class="form-control required" value="<?php echo $allData->p3; ?>" id="p3" name="p3" maxlength="128">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="p4">subsec 2 description</label>
                                    <textarea rows="10" col="8" id="p4" class="form-control" name="p4"><?php echo $allData->p4; ?></textarea>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="p5">subsec 2 %</label>

                                    <input type="text" class="form-control required" value="<?php echo $allData->p5; ?>" id="p5" name="p5" maxlength="128">
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="p6">subsec 3 title</label>

                                    <input type="text" class="form-control required" value="<?php echo $allData->p6; ?>" id="p6" name="p6" maxlength="128">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="p7">subsec 3 Description</label>
                                    <textarea rows="10" col="8" id="p6" class="form-control" name="p7"><?php echo $allData->p7; ?></textarea>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="p5">subsec 3 %</label>

                                    <input type="text" class="form-control required" value="<?php echo $allData->p5pr; ?>" id="p5pr" name="p5pr" maxlength="128">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="p6">subsec 4 title</label>

                                    <input type="text" class="form-control required" value="<?php echo $allData->pt6; ?>" id="pt6" name="pt6" maxlength="128">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="p7">subsec 4 Description</label>
                                    <textarea rows="10" col="8" id="pt7" class="form-control" name="pt7"><?php echo $allData->pt7; ?></textarea>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="p5">subsec 4 %</label>

                                    <input type="text" class="form-control required" value="<?php echo $allData->pt5pr; ?>" id="pt5pr" name="pt5pr" maxlength="128">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="p6">sec 3 title</label>

                                    <input type="text" class="form-control required" value="<?php echo $allData->sec3pt6; ?>" id="sec3pt6" name="sec3pt6" maxlength="128">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="p7">sec 3 description</label>
                                    <textarea rows="10" col="8" id="sec3pt7" class="form-control" name="sec3pt7"><?php echo $allData->sec3pt7; ?></textarea>

                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="p6">sec 4 title</label>

                                    <input type="text" class="form-control required" value="<?php echo $allData->sec4pt6; ?>" id="sec4pt6" name="sec4pt6" maxlength="128">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="p7">sec 4 description</label>
                                    <textarea rows="10" col="8" id="sec4pt7" class="form-control" name="sec4pt7"><?php echo $allData->sec4pt7; ?></textarea>

                                </div>
                            </div>
                        </div>


                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" name="submit" />

                            <input type="hidden" name="id" value="<?php echo $allData->id; ?>" />
                        </div>
                        </form>
                    </div>
                </div>

            </div>
    </section>
</div>
<script type="text/javascript">
    CKEDITOR.replace('description');
</script>