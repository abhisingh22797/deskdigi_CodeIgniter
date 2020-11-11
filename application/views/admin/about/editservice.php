<script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-users"></i> Services page
            <small>Edit Service</small>
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
                    $attributes = array('id' => 'editserv', 'method' => 'post', 'class' => 'form_horizontal');
                    echo form_open_multipart('admin/about/editserv', $attributes);
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Description Title</label>
                                 
									
									                                    <input type="text" class="form-control required" value="<?php echo $allData->title; ?>" id="title" name="title">

                                </div>
                            </div>
                       
                      
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="stitle">Description </label>

                                    <textarea rows="10" col="8" id="stitle" class="form-control" name="stitle"><?php echo $allData->stitle; ?></textarea>
                                </div>

                            </div>
							 </div>
  <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="description1">sec 2 sec1title</label>

                              
									
									    <input type="text" class="form-control required" value="<?php echo $allData->description1; ?>" id="description1" name="description1">
                                </div>

                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="name"> sec 2 sec1Description</label>

                                    <textarea rows="10" col="8" id="description2" class="form-control" name="description2"><?php echo $allData->description2; ?></textarea>
                                </div>

                            </div>
                       
                           

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="name">sec2 sec2Title</label>
                                    <input type="text" class="form-control required" value="<?php echo $allData->sec2title; ?>" id="sec2title" name="sec2title">
                                </div>

                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="name">sec2 sec2Description</label>

                                    <textarea rows="10" col="8" id="sec2description" class="form-control" name="sec2description"><?php echo $allData->sec2description; ?></textarea>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="name">sec2 sec3Title</label>

									
									 <input type="text" class="form-control required" value="<?php echo $allData->support; ?>" id="support" name="support">
                                </div>

                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="name">sec2 sec3Description</label>

                                    <textarea rows="10" col="8" id="Awesome" class="form-control" name="Awesome"><?php echo $allData->Awesome; ?></textarea>
                                </div>


                            </div>
							
							<div class="col-md-3">
                                <div class="form-group">
                                    <label for="name">sec2 sec4Title  </label>
                                    <input type="text" class="form-control required" value="<?php echo $allData->vision_title; ?>" id="vision_title" name="vision_title">
                                </div>



                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="name">sec2 sec4Description</label>

                                    <textarea rows="10" col="8" id="Performance" class="form-control" name="Performance"><?php echo $allData->Performance; ?></textarea>
                                </div>


                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="name">sec2 sec5Title</label>
<input type="text" class="form-control required" value="<?php echo $allData->vision_description; ?>" id="vision_description" name="vision_description">
                                   
                                </div>



                            </div>
                      
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="name">sec2 sec5Description</label>

                                    <textarea rows="10" col="8" id="clint_title" class="form-control" name="clint_title"><?php echo $allData->clint_title; ?></textarea>
                                </div>



                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="name">sec2 sec6Title</label>
<input type="text" class="form-control required" value="<?php echo $allData->client_descriptionq; ?>" id="client_descriptionq" name="client_descriptionq">
                                 
                                </div>



                            </div>
                      




                         <div class="col-md-3">
                                <div class="form-group">
                                    <label for="name">sec2 sec6description</label>

                                    <textarea rows="10" col="8" id="client_description" class="form-control" name="client_description"><?php echo $allData->client_description; ?></textarea>
                                </div>



                            </div>
							  </div>

 <div class="row">
<div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">sec3 title</label>

                                  
									
									<input type="text" class="form-control required" value="<?php echo $allData->titlesec3; ?>" id="titlesec3" name="titlesec3">
									
									
                                </div>



                            </div>
							<div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">sec3 description</label>

                                    <textarea rows="10" col="8" id="descriptionsec3" class="form-control" name="descriptionsec3"><?php echo $allData->descriptionsec3; ?></textarea>
                                </div>



                            </div>
						<!--	<div class="col-md-3">
                                <div class="form-group">
                                    <label for="name">sec3 subdescription1</label>

                                    <textarea rows="10" col="8" id="client_subdescriptions1" class="form-control" name="client_subdescriptions1"><?php echo $allData->client_subdescriptions1; ?></textarea>
                                </div>



                            </div>

<div class="col-md-3">
                                <div class="form-group">
                                    <label for="name">sec3 subdescription2</label>

                                    <textarea rows="10" col="8" id="client_subdescription2" class="form-control" name="client_subdescription2"><?php echo $allData->client_subdescription2; ?></textarea>
                                </div>  -->



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