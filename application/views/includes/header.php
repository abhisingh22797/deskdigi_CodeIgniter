<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $pageTitle; ?></title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <!-- Bootstrap 3.3.4 -->
  <link href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <!-- FontAwesome 4.3.0 -->
  <link href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <!-- Ionicons 2.0.0 -->
  <link href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css" />
  <!-- Theme style -->
  <link href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
  <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
  <link href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
  <style>
    .error {
      color: red;
      font-weight: normal;
    }
  </style>
  <script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript">
    var baseURL = "<?php echo base_url(); ?>";
  </script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">

  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="<?php echo base_url(); ?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">Deskdigi</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">Deskdigi</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown tasks-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                <i class="fa fa-history"></i>
              </a>
              <ul class="dropdown-menu">
                <li class="header"> Last Login : <i class="fa fa-clock-o"></i> <?= empty($last_login) ? "First Time Login" : $last_login; ?></li>
              </ul>
            </li>
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo base_url(); ?>assets/dist/img/avatar.png" class="user-image" alt="User Image" />
                <span class="hidden-xs"><?php echo $name; ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">

                  <img src="<?php echo base_url(); ?>assets/dist/img/avatar.png" class="img-circle" alt="User Image" />
                  <p>
                    <?php echo $name; ?>
                    <small><?php echo $role_text; ?></small>
                  </p>

                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="<?php echo base_url('admin/'); ?>profile" class="btn btn-warning btn-flat"><i class="fa fa-user-circle"></i> Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="<?php echo base_url('admin/'); ?>logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          <li>
            <a href="<?php echo base_url(); ?>admin/dashboard">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('admin/contact/editContactus'); ?>">
              <i class="fa fa-plane"></i>
              <span>Contact</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('admin/about/editAboutus'); ?>">
              <i class="fa fa-plane"></i>
              <span>About page</span>
            </a>
          </li>

          <li>
            <a href="<?php echo base_url('admin/about/editservice'); ?>">
              <i class="fa fa-plane"></i>
              <span>Service page</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('admin/home/edit'); ?>">
              <i class="fa fa-ticket"></i>
              <span>Home Page</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('admin/Conversation_Optimaization/edit'); ?>">
              <i class="fa fa-ticket"></i>
              <span>Conversation Optimaization</span>
            </a>
          </li>
          <li>
            <!--  <a href="<?php echo base_url('admin/Consulting/editstudentplacement'); ?>">
              <i class="fa fa-ticket"></i>
              <span>HR Consulting</span>
            </a>
          </li>-->
          <li>
            <a href="<?php echo base_url('admin/Advisor/editstudentplacement'); ?>">
              <i class="fa fa-ticket"></i>
              <span>Social-Media-Marketing</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('admin/Gyan/editstudentplacement'); ?>">
              <i class="fa fa-ticket"></i>
              <span>SEO Page</span>
            </a>
          </li>

          <!-- <li class="treeview">
            <a href="#">
              <i class="fa fa-share"></i> <span>Training program category
              </span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">

              <li><a href="<?php echo base_url('admin/course_category/viewcategory'); ?>"><i class="fa fa-circle-o"></i> View Category</a></li>
              <li><a href="<?php echo base_url('admin/course_subcategory/viewsubcategory'); ?>"><i class="fa fa-circle-o"></i> View SubCategory</a></li>
					  <li><a href="<?php echo base_url('admin/course_subcategory2/viewsubcategory2'); ?>"><i class="fa fa-circle-o"></i> View SubCategory2</a></li>

            </ul>
          </li>
        	<li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Course Content Manager 
				</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
              
                    <li><a href="<?php echo base_url('admin/course/courseListing'); ?>"><i class="fa fa-circle-o"></i> View Course</a></li>
					 
                  
              </ul>
            </li> 
          <li class="treeview">
            <a href="#">
              <i class="fa fa-share"></i> <span>Training Options
              </span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">

              <li><a href="<?php echo base_url('admin/trainingoptions/viewtrainingoptions'); ?>"><i class="fa fa-circle-o"></i> View Training options</a></li>


            </ul>
          </li>
               	<li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Benefits 
				</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
              
                    <li><a href="<?php echo base_url('admin/benefits/viewbenefits'); ?>"><i class="fa fa-circle-o"></i> View Benefits</a></li>
					 
                  
              </ul>
            </li>
			<li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Exam & Certification 
				</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
              
                    <li><a href="<?php echo base_url('admin/examcerti/viewexamcerti'); ?>"><i class="fa fa-circle-o"></i> View Exam & Certification</a></li>
					 
                  
              </ul>
            </li>-->

          <li class="treeview">
            <a href="#">
              <i class="fa fa-share"></i> <span>Services
              </span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">


              <li><a href="<?php echo base_url('admin/brands/viewexperts'); ?>"><i class="fa fa-circle-o"></i> View Services</a></li>


            </ul>
          </li>



          <li class="treeview">
            <a href="#">
              <i class="fa fa-share"></i> <span> Our Case Studies
              </span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">


              <li><a href="<?php echo base_url('admin/brands/viewbrands'); ?>"><i class="fa fa-circle-o"></i> view Case Studies</a></li>


            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-share"></i> <span> Our Experts
              </span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">


              <li><a href="<?php echo base_url('admin/brands/viewexpert'); ?>"><i class="fa fa-circle-o"></i> view Experts</a></li>


            </ul>
          </li>





          <!--<li class="treeview">
            <a href="#">
              <i class="fa fa-share"></i> <span> Syllabus
              </span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">


              <li><a href="<?php echo base_url('admin/Syllabus/viewtestimonials'); ?>"><i class="fa fa-circle-o"></i> View Syllabus</a></li>


            </ul>
          </li>-->
          <li class="treeview">
            <a href="#">
              <i class="fa fa-share"></i> <span> Google Reviews
              </span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">


              <li><a href="<?php echo base_url('admin/testimonials/viewtestimonials'); ?>"><i class="fa fa-circle-o"></i> View Testimonial</a></li>


            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-share"></i> <span> Testimonial
              </span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">


              <li><a href="<?php echo base_url('admin/testimonials/viewtestimonialss'); ?>"><i class="fa fa-circle-o"></i> View Testimonial</a></li>


            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-share"></i> <span> Sliders
              </span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">


              <li><a href="<?php echo base_url('admin/sliders/viewsliders'); ?>"><i class="fa fa-circle-o"></i> View Sliders</a></li>


            </ul>
          </li>
          <!-- <li class="treeview">
            <a href="#">
              <i class="fa fa-share"></i> <span> Blogs
              </span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">


              <li><a href="<?php echo base_url('admin/Blogs/viewtestimonials'); ?>"><i class="fa fa-circle-o"></i> View Blogs</a></li>


            </ul>
          </li>-->
          <!--  	<li class="treeview">
              <a href="#">
                <i class="fa fa-tag fa-lg"></i> <span> Coupons
				</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
              
              
                    <li><a href="<?php echo base_url('admin/coupons/viewcoupons'); ?>"><i class="fa fa-circle-o"></i> View Coupons</a></li>
                   
             
              </ul>
            </li> -->



          <?php
          if ($role == ROLE_ADMIN || $role == ROLE_MANAGER) {
          ?>
            <!-- <li>
              <a href="#" >
                <i class="fa fa-thumb-tack"></i>
                <span>Task Status</span>
              </a>
            </li>
            <li>
              <a href="#" >
                <i class="fa fa-upload"></i>
                <span>Task Uploads</span>
              </a>
            </li>-->
          <?php
          }
          if ($role == ROLE_ADMIN) {
          ?>
            <!--<li>
              <a href="<?php echo base_url('admin/'); ?>userListing">
                <i class="fa fa-users"></i>
                <span>Users</span>
              </a>
            </li>-->
            <li>
              <a href="<?php echo base_url('admin/reports'); ?>">
                <i class="fa fa-files-o"></i>
                <span>Reports</span>
              </a>
            </li>
          <?php
          }
          ?>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>