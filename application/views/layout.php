<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>






<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title><?= $title; ?></title>

  <?php if ($layout == "seo") { ?>

    <link rel='stylesheet' id='main-css' href='<?php echo  base_url(); ?>assets/frontend/css/main.css?ver=4.7.3' type='text/css' media='all' />
    <link rel='stylesheet' href="<?php echo  base_url(); ?>assets/frontend/css/style.css" />
    <link rel='stylesheet' href="<?php echo  base_url(); ?>assets/frontend/css/mainn.css" />
    <link rel='stylesheet' href="<?php echo  base_url(); ?>assets/frontend/css/bootstrap.min.css" />
    <link rel='stylesheet' href="<?php echo  base_url(); ?>assets/frontend/css/font-awesome.css" />
    <link rel="stylesheet" href="<?php echo  base_url(); ?>assets/frontend/css/flaticon.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/crumina-fonts.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/grid.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/base.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/blocks.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/layouts.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/modules.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/widgets-styles.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/ion.rangeSlider.css">

    <script type='text/javascript' src='<?php echo  base_url(); ?>assets/frontend/js/jquery.min.js'></script>
    <script type='text/javascript' src='<?php echo  base_url(); ?>assets/frontend/js/bootstrap.min.js'></script>

  <?php } ?>





  <?php if ($layout == "services") { ?>


    <link rel='stylesheet' id='main-css' href='<?php echo  base_url(); ?>assets/frontend/css/main.css?ver=4.7.3' type='text/css' media='all' />
    <link rel='stylesheet' href="<?php echo  base_url(); ?>assets/frontend/css/style.css" />
    <link rel='stylesheet' href="<?php echo  base_url(); ?>assets/frontend/css/bootstrap.min.css" />
    <link rel='stylesheet' href="<?php echo  base_url(); ?>assets/frontend/css/font-awesome.css" />
    <link rel="stylesheet" href="<?php echo  base_url(); ?>assets/frontend/css/flaticon.css">
    <link rel='stylesheet' href="<?php echo  base_url(); ?>assets/frontend/css/mainn.css" />

    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/base.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/blocks.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/layouts.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/modules.css">
    <script type='text/javascript' src='<?php echo  base_url(); ?>assets/frontend/js/jquery.min.js'></script>
    <script type='text/javascript' src='<?php echo  base_url(); ?>assets/frontend/s/bootstrap.min.js'></script>


  <?php } ?>

  <?php if ($layout == "Social_Media_Marketing") { ?>

    <link rel='stylesheet' id='main-css' href='<?php echo  base_url(); ?>assets/frontend/css/main.css?ver=4.7.3' type='text/css' media='all' />
    <link rel='stylesheet' href="<?php echo  base_url(); ?>assets/frontend/css/style.css" />
    <link rel='stylesheet' href="<?php echo  base_url(); ?>assets/frontend/css/bootstrap.min.css" />
    <link rel='stylesheet' href="<?php echo  base_url(); ?>assets/frontend/css/font-awesome.css" />
    <link rel="stylesheet" href="<?php echo  base_url(); ?>assets/frontend/css/flaticon.css">
    <link rel='stylesheet' href="<?php echo  base_url(); ?>assets/frontend/css/mainn.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/crumina-fonts.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/grid.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/base.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/blocks.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/layouts.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/modules.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/widgets-styles.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/ion.rangeSlider.css">

    <script type='text/javascript' src='<?php echo  base_url(); ?>assets/frontend/js/jquery.min.js'></script>
    <script type='text/javascript' src='<?php echo  base_url(); ?>assets/frontend/js/bootstrap.min.js'></script>

  <?php } ?>




  <?php if ($layout == "Conversation") { ?>
    <link rel='stylesheet' id='main-css' href='<?php echo  base_url(); ?>assets/frontend/css/main.css?ver=4.7.3' type='text/css' media='all' />
    <link rel='stylesheet' href="<?php echo  base_url(); ?>assets/frontend/css/style.css" />
    <link rel='stylesheet' href="<?php echo  base_url(); ?>assets/frontend/css/bootstrap.min.css" />
    <link rel='stylesheet' href="<?php echo  base_url(); ?>assets/frontend/css/font-awesome.css" />
    <link rel="stylesheet" href="<?php echo  base_url(); ?>assets/frontend/css/flaticon.css">
    <link rel='stylesheet' href="<?php echo  base_url(); ?>assets/frontend/css/mainn.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/grid.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/base.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/blocks.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/layouts.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/modules.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/widgets-styles.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/ion.rangeSlider.css">


    <script type='text/javascript' src='<?php echo  base_url(); ?>assets/frontend/js/jquery.min.js'></script>
    <script type='text/javascript' src='<?php echo  base_url(); ?>assets/frontend/js/bootstrap.min.js'></script>

  <?php } ?>






  <?php if ($layout == "home") { ?>
    <link rel='stylesheet' id='main-css' href='<?php echo  base_url(); ?>assets/frontend/css/main.css?ver=4.7.3' type='text/css' media='all' />
    <link rel='stylesheet' href="<?php echo  base_url(); ?>assets/frontend/css/style.css" />
    <link rel='stylesheet' href="<?php echo  base_url(); ?>assets/frontend/css/mainn.css" />
    <link rel='stylesheet' href="<?php echo  base_url(); ?>assets/frontend/css/bootstrap.min.css" />
    <link rel='stylesheet' href="<?php echo  base_url(); ?>assets/frontend/css/font-awesome.css" />
    <link rel="stylesheet" href="<?php echo  base_url(); ?>assets/frontend/css/flaticon.css">
    <script type='text/javascript' src='<?php echo  base_url(); ?>assets/frontend/js/jquery.min.js'></script>
    <script type='text/javascript' src='<?php echo  base_url(); ?>assets/frontend/js/bootstrap.min.js'></script>

  <?php } ?>


  <?php if ($layout == "contact") { ?>

    <link rel='stylesheet' id='main-css' href='<?php echo  base_url(); ?>assets/frontend/css/main.css?ver=4.7.3' type='text/css' media='all' />
    <link rel='stylesheet' href="<?php echo  base_url(); ?>assets/frontend/css/style.css" />
    <link rel='stylesheet' href="<?php echo  base_url(); ?>assets/frontend/css/bootstrap.min.css" />
    <link rel='stylesheet' href="<?php echo  base_url(); ?>assets/frontend/css/font-awesome.css" />
    <link rel="stylesheet" href="<?php echo  base_url(); ?>assets/frontend/css/flaticon.css">
    <link rel='stylesheet' href="<?php echo  base_url(); ?>assets/frontend/css/mainn.css" />
    <script type='text/javascript' src='<?php echo  base_url(); ?>assets/frontend/js/jquery.min.js'></script>
    <script type='text/javascript' src='<?php echo  base_url(); ?>assets/frontend/js/bootstrap.min.js'></script>

    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/grid.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/base.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/blocks.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/layouts.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/modules.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/widgets-styles.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/ion.rangeSlider.css">

  <?php } ?>





  <?php if ($layout == "Case_studies") { ?>

    <link rel='stylesheet' id='main-css' href='<?php echo  base_url(); ?>assets/frontend/css/main.css?ver=4.7.3' type='text/css' media='all' />
    <link rel='stylesheet' href="<?php echo  base_url(); ?>assets/frontend/css/style.css" />
    <link rel='stylesheet' href="<?php echo  base_url(); ?>assets/frontend/css/bootstrap.min.css" />
    <link rel='stylesheet' href="<?php echo  base_url(); ?>assets/frontend/css/font-awesome.css" />
    <link rel="stylesheet" href="<?php echo  base_url(); ?>assets/frontend/css/flaticon.css">
    <link rel='stylesheet' href="<?php echo  base_url(); ?>assets/frontend/css/mainn.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/crumina-fonts.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/grid.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/base.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/blocks.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/layouts.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/modules.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/widgets-styles.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/ion.rangeSlider.css">


    <script type='text/javascript' src='<?php echo  base_url(); ?>assets/frontend/js/jquery.min.js'></script>
    <script type='text/javascript' src='<?php echo  base_url(); ?>assets/frontend/js/bootstrap.min.js'></script>





  <?php } ?>







  <?php if ($layout == "about") { ?>

    <link rel='stylesheet' href="<?php echo  base_url(); ?>assets/frontend/css/style.css" />
    <link rel='stylesheet' href="<?php echo  base_url(); ?>assets/frontend/css/bootstrap.min.css" />
    <link rel='stylesheet' href="<?php echo  base_url(); ?>assets/frontend/css/font-awesome.css" />
    <link rel="stylesheet" href="<?php echo  base_url(); ?>assets/frontend/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo  base_url(); ?>assets/frontend/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/crumina-fonts.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/grid.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/base.css">
    <link rel='stylesheet' href="<?php echo  base_url(); ?>assets/frontend/css/mainn.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/blocks.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/layouts.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/modules.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/widgets-styles.css">
    <link rel="stylesheet" type="text/css" href="<?php echo  base_url(); ?>assets/frontend/css/ion.rangeSlider.css">

    <script type='text/javascript' src='<?php echo  base_url(); ?>assets/frontend/js/jquery.min.js'></script>
    <script type='text/javascript' src='<?php echo  base_url(); ?>assets/frontend/js/bootstrap.min.js'></script>
  <?php } ?>



</head>
<!-- Header-->

<?php
include('header.php');
$this->load->view($layout);
include('footer.php'); ?>




<?php if ($layout == "services") { ?>

  <script src="<?php echo  base_url(); ?>assets/frontend/js/jquery.min.js"></script>





  <script src="<?php echo  base_url(); ?>assets/frontend/jss/jquery.meanmenu.js"></script>
  <!-- Appear Min JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/jquery.appear.min.js"></script>
  <!-- Odometer Min JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/odometer.min.js"></script>
  <!-- Owl Carousel Min JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/owl.carousel.min.js"></script>
  <!-- Magnific Popup Min JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/jquery.magnific-popup.min.js"></script>
  <!-- Parallax Min JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/parallax.min.js"></script>
  <!-- Nice Select Min JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/jquery.nice-select.min.js"></script>
  <!-- WOW Min JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/wow.min.js"></script>
  <!-- AjaxChimp Min JS -->

  <!-- Form Validator Min JS -->

  <!-- Contact Form Min JS -->

  <!-- Main JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/main.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/js/plugins.js"></script>
  <script type="text/javascript" src="<?php echo  base_url(); ?>assets/frontend/js/jquery-3.2.1.min.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/js/parallax.min.js"></script>
  <script type="text/javascript" src="<?php echo  base_url(); ?>assets/frontend/js/slick.min.js"></script>
  <script type="text/javascript" src="<?php echo  base_url(); ?>assets/frontend/js/custom.js"></script>
  <script type="text/javascript" src="<?php echo  base_url(); ?>assets/frontend/js/lazyload.js"></script>
  <script>
    $('.full-nav-main-menu > li > a').click(function() {
      $('.full-nav-main-menu > li > a').removeClass('active');
      $(this).addClass('active');
      $('.full-nav-right').hide();
      $($(this).data('show')).fadeIn();
    });
    $('.menu-icon').click(function() {
      $('.menu-icon').css('display', 'none');
      $('.menu-area').css('transform', 'translateX(0%)');
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(1) > a').css('opacity', '1');
        $('.full-nav-main-menu > li:nth-child(1) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      }, 300);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(2) > a').css('opacity', '1');
        $('.full-nav-main-menu > li:nth-child(2) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      }, 400);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(3) > a').css('opacity', '1');
        $('.full-nav-main-menu > li:nth-child(3) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      }, 500);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(4) > a').css('opacity', '1');
        $('.full-nav-main-menu > li:nth-child(4) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      }, 600);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(5) > a').css('opacity', '1');
        $('.full-nav-main-menu > li:nth-child(5) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      }, 700);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(6) > a').css('opacity', '1');
        $('.full-nav-main-menu > li:nth-child(6) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      }, 800);
    });
    $('.btn-menu-cancel').click(function() {
      $('.full-nav-main-menu > li:nth-child(6) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      $('.full-nav-main-menu > li:nth-child(6) > a').css('opacity', '0');
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(5) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
        $('.full-nav-main-menu > li:nth-child(5) > a').css('opacity', '0');
      }, 10);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(4) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
        $('.full-nav-main-menu > li:nth-child(4) > a').css('opacity', '0');
      }, 20);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(3) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
        $('.full-nav-main-menu > li:nth-child(3) > a').css('opacity', '0');
      }, 30);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(2) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
        $('.full-nav-main-menu > li:nth-child(2) > a').css('opacity', '0');
      }, 40);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(1) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
        $('.full-nav-main-menu > li:nth-child(1) > a').css('opacity', '0');
      }, 50);
      setTimeout(function() {
        $('.menu-area').css('transform', 'translateX(100%)');
        $('.menu-icon').removeClass('cancel');
        $('.menu-icon').css('display', 'block');
      }, 100);
    });
    $('.btn-back').click(function() {
      $('.full-nav-right').fadeOut();
    });
  </script>
  <script>
    $(document).ready(function() {
      if ($('.for-remove').length && ($(window).width() < 768)) {
        $('.for-remove').remove();
      }
    });


    /* Home Page Main Slider start */
    $.fn.accordion = function() {
      var a = $(this);
      var c = 5;
      var e = null;
      a.children(".home_page .accordion li").each(function(f) {
        $(this).css("left", f * 2 + "%")
      });

      function b(f) {
        a.children(".home_page .accordion li").eq(f).stop().animate({
          left: f * 2 + "%",
          width: '96%'
        }, 700);
        a.children(".home_page .accordion li").eq(f).nextAll().each(function(g) {
          $(this).stop().animate({
            left: 96 + f * 2 + g * 2 + "%",
            width: '96%'
          }, 700);
        });
        a.children(".home_page .accordion li").eq(f).prevAll().each(function(g) {
          $(this).stop().animate({
            left: (f - g - 1) * 2 + "%"
          }, 980)
        })
      }

      a.children(".home_page .accordion li").mouseenter(function() {
        var f = a.children(".home_page .accordion li").index(this);
        c = f;
        b(f);
        clearTimeout(e);
        d()
      });

      function d() {
        e = setTimeout(function() {
          if (c >= 5) {
            c = 0
          } else {
            c++
          }
          b(c);
          d()
        }, 5000)
      }

      d()
    };
    /* Home Page Main Slider End */

    $('.collapse').on('show.bs.collapse', function(e) {
      $('.collapse').not(e.target).removeClass('in');
    });

    $('.learn-more').click(function(event) {
      var att = $(this).attr('id');
      //console.log(att);
      $(att).slideToggle(500);
      $(att).siblings('.collapse').slideUp(500);
      $(this).find("span").text($(this).find("span").text() == 'Read Less' ? "Read More" : "Read Less");
      $(this).parents(".icon-sec").siblings().find(".learn-more span").text("Read More");
      $(this).prev("h3").toggleClass("active");
      $(this).parent(".box").find(".icon").toggleClass("active");
      $(this).parents(".icon-sec").siblings().find("h3").removeClass("active");
      $(this).parents(".icon-sec").siblings().find(".icon").removeClass("active");
    });
    // Mobile Home Page Slider Touchable Start
    $("#mobileSlider.carousel").swipe({
      swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
        if (direction == 'left') $(this).carousel('next');
        if (direction == 'right') $(this).carousel('prev');
      },
      allowPageScroll: "vertical"
    });
    // Mobile Home Page Slider Touchable End

    document.querySelectorAll('.box-tab-sec a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });
  </script>



<?php } ?>



<?php if ($layout == "services") { ?>

  <script type='text/javascript' src='<?php echo  base_url(); ?>assets/frontend/js/script.minfe9d.js?ver=4.7.3'></script>
  <script type='text/javascript' src='<?php echo  base_url(); ?>assets/frontend/js/wp-embed.minfe9d.js?ver=4.7.3'></script>

  <script src="<?php echo  base_url(); ?>assets/frontend/js/jquery.min.js"></script>





  <script src="<?php echo  base_url(); ?>assets/frontend/jss/jquery.meanmenu.js"></script>
  <!-- Appear Min JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/jquery.appear.min.js"></script>
  <!-- Odometer Min JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/odometer.min.js"></script>
  <!-- Owl Carousel Min JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/owl.carousel.min.js"></script>
  <!-- Magnific Popup Min JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/jquery.magnific-popup.min.js"></script>
  <!-- Parallax Min JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/parallax.min.js"></script>
  <!-- Nice Select Min JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/jquery.nice-select.min.js"></script>
  <!-- WOW Min JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/wow.min.js"></script>
  <!-- AjaxChimp Min JS -->

  <!-- Form Validator Min JS -->

  <!-- Contact Form Min JS -->

  <!-- Main JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/main.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/js/plugins.js"></script>

  <script type="text/javascript" src="<?php echo  base_url(); ?>assets/frontend/js/jquery-3.2.1.min.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/js/parallax.min.js"></script>
  <script type="text/javascript" src="<?php echo  base_url(); ?>assets/frontend/js/slick.min.js"></script>
  <script type="text/javascript" src="<?php echo  base_url(); ?>assets/frontend/js/custom.js"></script>
  <script type="text/javascript" src="<?php echo  base_url(); ?>assets/frontend/js/lazyload.js"></script>
  <script>
    $('.full-nav-main-menu > li > a').click(function() {
      $('.full-nav-main-menu > li > a').removeClass('active');
      $(this).addClass('active');
      $('.full-nav-right').hide();
      $($(this).data('show')).fadeIn();
    });
    $('.menu-icon').click(function() {
      $('.menu-icon').css('display', 'none');
      $('.menu-area').css('transform', 'translateX(0%)');
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(1) > a').css('opacity', '1');
        $('.full-nav-main-menu > li:nth-child(1) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      }, 300);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(2) > a').css('opacity', '1');
        $('.full-nav-main-menu > li:nth-child(2) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      }, 400);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(3) > a').css('opacity', '1');
        $('.full-nav-main-menu > li:nth-child(3) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      }, 500);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(4) > a').css('opacity', '1');
        $('.full-nav-main-menu > li:nth-child(4) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      }, 600);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(5) > a').css('opacity', '1');
        $('.full-nav-main-menu > li:nth-child(5) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      }, 700);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(6) > a').css('opacity', '1');
        $('.full-nav-main-menu > li:nth-child(6) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      }, 800);
    });
    $('.btn-menu-cancel').click(function() {
      $('.full-nav-main-menu > li:nth-child(6) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      $('.full-nav-main-menu > li:nth-child(6) > a').css('opacity', '0');
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(5) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
        $('.full-nav-main-menu > li:nth-child(5) > a').css('opacity', '0');
      }, 10);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(4) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
        $('.full-nav-main-menu > li:nth-child(4) > a').css('opacity', '0');
      }, 20);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(3) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
        $('.full-nav-main-menu > li:nth-child(3) > a').css('opacity', '0');
      }, 30);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(2) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
        $('.full-nav-main-menu > li:nth-child(2) > a').css('opacity', '0');
      }, 40);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(1) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
        $('.full-nav-main-menu > li:nth-child(1) > a').css('opacity', '0');
      }, 50);
      setTimeout(function() {
        $('.menu-area').css('transform', 'translateX(100%)');
        $('.menu-icon').removeClass('cancel');
        $('.menu-icon').css('display', 'block');
      }, 100);
    });
    $('.btn-back').click(function() {
      $('.full-nav-right').fadeOut();
    });
  </script>
  <script>
    $(document).ready(function() {
      if ($('.for-remove').length && ($(window).width() < 768)) {
        $('.for-remove').remove();
      }
    });


    /* Home Page Main Slider start */
    $.fn.accordion = function() {
      var a = $(this);
      var c = 5;
      var e = null;
      a.children(".home_page .accordion li").each(function(f) {
        $(this).css("left", f * 2 + "%")
      });

      function b(f) {
        a.children(".home_page .accordion li").eq(f).stop().animate({
          left: f * 2 + "%",
          width: '96%'
        }, 700);
        a.children(".home_page .accordion li").eq(f).nextAll().each(function(g) {
          $(this).stop().animate({
            left: 96 + f * 2 + g * 2 + "%",
            width: '96%'
          }, 700);
        });
        a.children(".home_page .accordion li").eq(f).prevAll().each(function(g) {
          $(this).stop().animate({
            left: (f - g - 1) * 2 + "%"
          }, 980)
        })
      }

      a.children(".home_page .accordion li").mouseenter(function() {
        var f = a.children(".home_page .accordion li").index(this);
        c = f;
        b(f);
        clearTimeout(e);
        d()
      });

      function d() {
        e = setTimeout(function() {
          if (c >= 5) {
            c = 0
          } else {
            c++
          }
          b(c);
          d()
        }, 5000)
      }

      d()
    };
    /* Home Page Main Slider End */

    $('.collapse').on('show.bs.collapse', function(e) {
      $('.collapse').not(e.target).removeClass('in');
    });

    $('.learn-more').click(function(event) {
      var att = $(this).attr('id');
      //console.log(att);
      $(att).slideToggle(500);
      $(att).siblings('.collapse').slideUp(500);
      $(this).find("span").text($(this).find("span").text() == 'Read Less' ? "Read More" : "Read Less");
      $(this).parents(".icon-sec").siblings().find(".learn-more span").text("Read More");
      $(this).prev("h3").toggleClass("active");
      $(this).parent(".box").find(".icon").toggleClass("active");
      $(this).parents(".icon-sec").siblings().find("h3").removeClass("active");
      $(this).parents(".icon-sec").siblings().find(".icon").removeClass("active");
    });
    // Mobile Home Page Slider Touchable Start
    $("#mobileSlider.carousel").swipe({
      swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
        if (direction == 'left') $(this).carousel('next');
        if (direction == 'right') $(this).carousel('prev');
      },
      allowPageScroll: "vertical"
    });
    // Mobile Home Page Slider Touchable End

    document.querySelectorAll('.box-tab-sec a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });
  </script>



<?php } ?>


<?php if ($layout == "Social_Media_Marketing") { ?>


  <script type='text/javascript' src='<?php echo  base_url(); ?>assets/frontend/js/script.minfe9d.js?ver=4.7.3'></script>
  <script type='text/javascript' src='<?php echo  base_url(); ?>assets/frontend/js/wp-embed.minfe9d.js?ver=4.7.3'></script>

  <script src="<?php echo  base_url(); ?>assets/frontend/js/jquery.min.js"></script>





  <script src="<?php echo  base_url(); ?>assets/frontend/jss/jquery.meanmenu.js"></script>
  <!-- Appear Min JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/jquery.appear.min.js"></script>
  <!-- Odometer Min JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/odometer.min.js"></script>
  <!-- Owl Carousel Min JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/owl.carousel.min.js"></script>
  <!-- Magnific Popup Min JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/jquery.magnific-popup.min.js"></script>
  <!-- Parallax Min JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/parallax.min.js"></script>
  <!-- Nice Select Min JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/jquery.nice-select.min.js"></script>
  <!-- WOW Min JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/wow.min.js"></script>
  <!-- AjaxChimp Min JS -->

  <!-- Form Validator Min JS -->

  <!-- Contact Form Min JS -->

  <!-- Main JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/main.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/js/plugins.js"></script>


  <script type="text/javascript" src="<?php echo  base_url(); ?>assets/frontend/js/jquery-3.2.1.min.js"></script>
  <script src="js/parallax.min.js"></script>
  <script type="text/javascript" src="<?php echo  base_url(); ?>assets/frontend/js/slick.min.js"></script>
  <script type="text/javascript" src="<?php echo  base_url(); ?>assets/frontend/js/custom.js"></script>
  <script type="text/javascript" src="<?php echo  base_url(); ?>assets/frontend/js/lazyload.js"></script>
  <script>
    $('.full-nav-main-menu > li > a').click(function() {
      $('.full-nav-main-menu > li > a').removeClass('active');
      $(this).addClass('active');
      $('.full-nav-right').hide();
      $($(this).data('show')).fadeIn();
    });
    $('.menu-icon').click(function() {
      $('.menu-icon').css('display', 'none');
      $('.menu-area').css('transform', 'translateX(0%)');
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(1) > a').css('opacity', '1');
        $('.full-nav-main-menu > li:nth-child(1) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      }, 300);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(2) > a').css('opacity', '1');
        $('.full-nav-main-menu > li:nth-child(2) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      }, 400);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(3) > a').css('opacity', '1');
        $('.full-nav-main-menu > li:nth-child(3) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      }, 500);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(4) > a').css('opacity', '1');
        $('.full-nav-main-menu > li:nth-child(4) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      }, 600);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(5) > a').css('opacity', '1');
        $('.full-nav-main-menu > li:nth-child(5) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      }, 700);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(6) > a').css('opacity', '1');
        $('.full-nav-main-menu > li:nth-child(6) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      }, 800);
    });
    $('.btn-menu-cancel').click(function() {
      $('.full-nav-main-menu > li:nth-child(6) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      $('.full-nav-main-menu > li:nth-child(6) > a').css('opacity', '0');
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(5) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
        $('.full-nav-main-menu > li:nth-child(5) > a').css('opacity', '0');
      }, 10);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(4) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
        $('.full-nav-main-menu > li:nth-child(4) > a').css('opacity', '0');
      }, 20);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(3) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
        $('.full-nav-main-menu > li:nth-child(3) > a').css('opacity', '0');
      }, 30);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(2) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
        $('.full-nav-main-menu > li:nth-child(2) > a').css('opacity', '0');
      }, 40);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(1) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
        $('.full-nav-main-menu > li:nth-child(1) > a').css('opacity', '0');
      }, 50);
      setTimeout(function() {
        $('.menu-area').css('transform', 'translateX(100%)');
        $('.menu-icon').removeClass('cancel');
        $('.menu-icon').css('display', 'block');
      }, 100);
    });
    $('.btn-back').click(function() {
      $('.full-nav-right').fadeOut();
    });
  </script>
  <script>
    $(document).ready(function() {
      if ($('.for-remove').length && ($(window).width() < 768)) {
        $('.for-remove').remove();
      }
    });


    /* Home Page Main Slider start */
    $.fn.accordion = function() {
      var a = $(this);
      var c = 5;
      var e = null;
      a.children(".home_page .accordion li").each(function(f) {
        $(this).css("left", f * 2 + "%")
      });

      function b(f) {
        a.children(".home_page .accordion li").eq(f).stop().animate({
          left: f * 2 + "%",
          width: '96%'
        }, 700);
        a.children(".home_page .accordion li").eq(f).nextAll().each(function(g) {
          $(this).stop().animate({
            left: 96 + f * 2 + g * 2 + "%",
            width: '96%'
          }, 700);
        });
        a.children(".home_page .accordion li").eq(f).prevAll().each(function(g) {
          $(this).stop().animate({
            left: (f - g - 1) * 2 + "%"
          }, 980)
        })
      }

      a.children(".home_page .accordion li").mouseenter(function() {
        var f = a.children(".home_page .accordion li").index(this);
        c = f;
        b(f);
        clearTimeout(e);
        d()
      });

      function d() {
        e = setTimeout(function() {
          if (c >= 5) {
            c = 0
          } else {
            c++
          }
          b(c);
          d()
        }, 5000)
      }

      d()
    };
    /* Home Page Main Slider End */

    $('.collapse').on('show.bs.collapse', function(e) {
      $('.collapse').not(e.target).removeClass('in');
    });

    $('.learn-more').click(function(event) {
      var att = $(this).attr('id');
      //console.log(att);
      $(att).slideToggle(500);
      $(att).siblings('.collapse').slideUp(500);
      $(this).find("span").text($(this).find("span").text() == 'Read Less' ? "Read More" : "Read Less");
      $(this).parents(".icon-sec").siblings().find(".learn-more span").text("Read More");
      $(this).prev("h3").toggleClass("active");
      $(this).parent(".box").find(".icon").toggleClass("active");
      $(this).parents(".icon-sec").siblings().find("h3").removeClass("active");
      $(this).parents(".icon-sec").siblings().find(".icon").removeClass("active");
    });
    // Mobile Home Page Slider Touchable Start
    $("#mobileSlider.carousel").swipe({
      swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
        if (direction == 'left') $(this).carousel('next');
        if (direction == 'right') $(this).carousel('prev');
      },
      allowPageScroll: "vertical"
    });
    // Mobile Home Page Slider Touchable End

    document.querySelectorAll('.box-tab-sec a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });
  </script>



<?php } ?>


<?php if ($layout == "Conversation") { ?>


  <script type='text/javascript' src='<?php echo  base_url(); ?>assets/frontend/js/script.minfe9d.js?ver=4.7.3'></script>
  <script type='text/javascript' src='<?php echo  base_url(); ?>assets/frontend/js/wp-embed.minfe9d.js?ver=4.7.3'></script>

  <script src="<?php echo  base_url(); ?>assets/frontend/js/jquery.min.js"></script>





  <script src="<?php echo  base_url(); ?>assets/frontend/jss/jquery.meanmenu.js"></script>
  <!-- Appear Min JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/jquery.appear.min.js"></script>
  <!-- Odometer Min JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/odometer.min.js"></script>
  <!-- Owl Carousel Min JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/owl.carousel.min.js"></script>
  <!-- Magnific Popup Min JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/jquery.magnific-popup.min.js"></script>
  <!-- Parallax Min JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/parallax.min.js"></script>
  <!-- Nice Select Min JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/jquery.nice-select.min.js"></script>
  <!-- WOW Min JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/wow.min.js"></script>
  <!-- AjaxChimp Min JS -->

  <!-- Form Validator Min JS -->

  <!-- Contact Form Min JS -->

  <!-- Main JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/main.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/js/plugins.js"></script>

  <script type="text/javascript" src="<?php echo  base_url(); ?>assets/frontend/js/jquery-3.2.1.min.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/js/parallax.min.js"></script>
  <script type="text/javascript" src="<?php echo  base_url(); ?>assets/frontend/js/slick.min.js"></script>
  <script type="text/javascript" src="<?php echo  base_url(); ?>assets/frontend/js/custom.js"></script>
  <script type="text/javascript" src="<?php echo  base_url(); ?>assets/frontend/js/lazyload.js"></script>
  <script>
    $('.full-nav-main-menu > li > a').click(function() {
      $('.full-nav-main-menu > li > a').removeClass('active');
      $(this).addClass('active');
      $('.full-nav-right').hide();
      $($(this).data('show')).fadeIn();
    });
    $('.menu-icon').click(function() {
      $('.menu-icon').css('display', 'none');
      $('.menu-area').css('transform', 'translateX(0%)');
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(1) > a').css('opacity', '1');
        $('.full-nav-main-menu > li:nth-child(1) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      }, 300);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(2) > a').css('opacity', '1');
        $('.full-nav-main-menu > li:nth-child(2) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      }, 400);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(3) > a').css('opacity', '1');
        $('.full-nav-main-menu > li:nth-child(3) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      }, 500);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(4) > a').css('opacity', '1');
        $('.full-nav-main-menu > li:nth-child(4) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      }, 600);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(5) > a').css('opacity', '1');
        $('.full-nav-main-menu > li:nth-child(5) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      }, 700);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(6) > a').css('opacity', '1');
        $('.full-nav-main-menu > li:nth-child(6) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      }, 800);
    });
    $('.btn-menu-cancel').click(function() {
      $('.full-nav-main-menu > li:nth-child(6) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      $('.full-nav-main-menu > li:nth-child(6) > a').css('opacity', '0');
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(5) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
        $('.full-nav-main-menu > li:nth-child(5) > a').css('opacity', '0');
      }, 10);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(4) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
        $('.full-nav-main-menu > li:nth-child(4) > a').css('opacity', '0');
      }, 20);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(3) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
        $('.full-nav-main-menu > li:nth-child(3) > a').css('opacity', '0');
      }, 30);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(2) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
        $('.full-nav-main-menu > li:nth-child(2) > a').css('opacity', '0');
      }, 40);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(1) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
        $('.full-nav-main-menu > li:nth-child(1) > a').css('opacity', '0');
      }, 50);
      setTimeout(function() {
        $('.menu-area').css('transform', 'translateX(100%)');
        $('.menu-icon').removeClass('cancel');
        $('.menu-icon').css('display', 'block');
      }, 100);
    });
    $('.btn-back').click(function() {
      $('.full-nav-right').fadeOut();
    });
  </script>
  <script>
    $(document).ready(function() {
      if ($('.for-remove').length && ($(window).width() < 768)) {
        $('.for-remove').remove();
      }
    });


    /* Home Page Main Slider start */
    $.fn.accordion = function() {
      var a = $(this);
      var c = 5;
      var e = null;
      a.children(".home_page .accordion li").each(function(f) {
        $(this).css("left", f * 2 + "%")
      });

      function b(f) {
        a.children(".home_page .accordion li").eq(f).stop().animate({
          left: f * 2 + "%",
          width: '96%'
        }, 700);
        a.children(".home_page .accordion li").eq(f).nextAll().each(function(g) {
          $(this).stop().animate({
            left: 96 + f * 2 + g * 2 + "%",
            width: '96%'
          }, 700);
        });
        a.children(".home_page .accordion li").eq(f).prevAll().each(function(g) {
          $(this).stop().animate({
            left: (f - g - 1) * 2 + "%"
          }, 980)
        })
      }

      a.children(".home_page .accordion li").mouseenter(function() {
        var f = a.children(".home_page .accordion li").index(this);
        c = f;
        b(f);
        clearTimeout(e);
        d()
      });

      function d() {
        e = setTimeout(function() {
          if (c >= 5) {
            c = 0
          } else {
            c++
          }
          b(c);
          d()
        }, 5000)
      }

      d()
    };
    /* Home Page Main Slider End */

    $('.collapse').on('show.bs.collapse', function(e) {
      $('.collapse').not(e.target).removeClass('in');
    });

    $('.learn-more').click(function(event) {
      var att = $(this).attr('id');
      //console.log(att);
      $(att).slideToggle(500);
      $(att).siblings('.collapse').slideUp(500);
      $(this).find("span").text($(this).find("span").text() == 'Read Less' ? "Read More" : "Read Less");
      $(this).parents(".icon-sec").siblings().find(".learn-more span").text("Read More");
      $(this).prev("h3").toggleClass("active");
      $(this).parent(".box").find(".icon").toggleClass("active");
      $(this).parents(".icon-sec").siblings().find("h3").removeClass("active");
      $(this).parents(".icon-sec").siblings().find(".icon").removeClass("active");
    });
    // Mobile Home Page Slider Touchable Start
    $("#mobileSlider.carousel").swipe({
      swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
        if (direction == 'left') $(this).carousel('next');
        if (direction == 'right') $(this).carousel('prev');
      },
      allowPageScroll: "vertical"
    });
    // Mobile Home Page Slider Touchable End

    document.querySelectorAll('.box-tab-sec a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });
  </script>












<?php } ?>





<?php if ($layout == "contact") { ?>


  <script type='text/javascript' src='<?php echo  base_url(); ?>assets/frontend/js/script.minfe9d.js?ver=4.7.3'></script>
  <script type='text/javascript' src='<?php echo  base_url(); ?>assets/frontend/js/wp-embed.minfe9d.js?ver=4.7.3'></script>

  <script src="js/jquery.min.js"></script>





  <script src="j<?php echo  base_url(); ?>assets/frontend/ss/jquery.meanmenu.js"></script>
  <!-- Appear Min JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/jquery.appear.min.js"></script>
  <!-- Odometer Min JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/odometer.min.js"></script>
  <!-- Owl Carousel Min JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/owl.carousel.min.js"></script>
  <!-- Magnific Popup Min JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/jquery.magnific-popup.min.js"></script>
  <!-- Parallax Min JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/parallax.min.js"></script>
  <!-- Nice Select Min JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/jquery.nice-select.min.js"></script>
  <!-- WOW Min JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/wow.min.js"></script>
  <!-- AjaxChimp Min JS -->

  <!-- Form Validator Min JS -->

  <!-- Contact Form Min JS -->

  <!-- Main JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/main.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/js/plugins.js"></script>

  <script type="text/javascript" src="<?php echo  base_url(); ?>assets/frontend/js/jquery-3.2.1.min.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/js/parallax.min.js"></script>
  <script type="text/javascript" src="<?php echo  base_url(); ?>assets/frontend/js/slick.min.js"></script>
  <script type="text/javascript" src="<?php echo  base_url(); ?>assets/frontend/js/custom.js"></script>
  <script type="text/javascript" src="<?php echo  base_url(); ?>assets/frontend/js/lazyload.js"></script>
  <script>
    $('.full-nav-main-menu > li > a').click(function() {
      $('.full-nav-main-menu > li > a').removeClass('active');
      $(this).addClass('active');
      $('.full-nav-right').hide();
      $($(this).data('show')).fadeIn();
    });
    $('.menu-icon').click(function() {
      $('.menu-icon').css('display', 'none');
      $('.menu-area').css('transform', 'translateX(0%)');
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(1) > a').css('opacity', '1');
        $('.full-nav-main-menu > li:nth-child(1) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      }, 300);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(2) > a').css('opacity', '1');
        $('.full-nav-main-menu > li:nth-child(2) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      }, 400);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(3) > a').css('opacity', '1');
        $('.full-nav-main-menu > li:nth-child(3) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      }, 500);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(4) > a').css('opacity', '1');
        $('.full-nav-main-menu > li:nth-child(4) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      }, 600);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(5) > a').css('opacity', '1');
        $('.full-nav-main-menu > li:nth-child(5) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      }, 700);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(6) > a').css('opacity', '1');
        $('.full-nav-main-menu > li:nth-child(6) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      }, 800);
    });
    $('.btn-menu-cancel').click(function() {
      $('.full-nav-main-menu > li:nth-child(6) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      $('.full-nav-main-menu > li:nth-child(6) > a').css('opacity', '0');
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(5) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
        $('.full-nav-main-menu > li:nth-child(5) > a').css('opacity', '0');
      }, 10);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(4) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
        $('.full-nav-main-menu > li:nth-child(4) > a').css('opacity', '0');
      }, 20);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(3) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
        $('.full-nav-main-menu > li:nth-child(3) > a').css('opacity', '0');
      }, 30);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(2) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
        $('.full-nav-main-menu > li:nth-child(2) > a').css('opacity', '0');
      }, 40);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(1) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
        $('.full-nav-main-menu > li:nth-child(1) > a').css('opacity', '0');
      }, 50);
      setTimeout(function() {
        $('.menu-area').css('transform', 'translateX(100%)');
        $('.menu-icon').removeClass('cancel');
        $('.menu-icon').css('display', 'block');
      }, 100);
    });
    $('.btn-back').click(function() {
      $('.full-nav-right').fadeOut();
    });
  </script>
  <script>
    $(document).ready(function() {
      if ($('.for-remove').length && ($(window).width() < 768)) {
        $('.for-remove').remove();
      }
    });


    /* Home Page Main Slider start */
    $.fn.accordion = function() {
      var a = $(this);
      var c = 5;
      var e = null;
      a.children(".home_page .accordion li").each(function(f) {
        $(this).css("left", f * 2 + "%")
      });

      function b(f) {
        a.children(".home_page .accordion li").eq(f).stop().animate({
          left: f * 2 + "%",
          width: '96%'
        }, 700);
        a.children(".home_page .accordion li").eq(f).nextAll().each(function(g) {
          $(this).stop().animate({
            left: 96 + f * 2 + g * 2 + "%",
            width: '96%'
          }, 700);
        });
        a.children(".home_page .accordion li").eq(f).prevAll().each(function(g) {
          $(this).stop().animate({
            left: (f - g - 1) * 2 + "%"
          }, 980)
        })
      }

      a.children(".home_page .accordion li").mouseenter(function() {
        var f = a.children(".home_page .accordion li").index(this);
        c = f;
        b(f);
        clearTimeout(e);
        d()
      });

      function d() {
        e = setTimeout(function() {
          if (c >= 5) {
            c = 0
          } else {
            c++
          }
          b(c);
          d()
        }, 5000)
      }

      d()
    };
    /* Home Page Main Slider End */

    $('.collapse').on('show.bs.collapse', function(e) {
      $('.collapse').not(e.target).removeClass('in');
    });

    $('.learn-more').click(function(event) {
      var att = $(this).attr('id');
      //console.log(att);
      $(att).slideToggle(500);
      $(att).siblings('.collapse').slideUp(500);
      $(this).find("span").text($(this).find("span").text() == 'Read Less' ? "Read More" : "Read Less");
      $(this).parents(".icon-sec").siblings().find(".learn-more span").text("Read More");
      $(this).prev("h3").toggleClass("active");
      $(this).parent(".box").find(".icon").toggleClass("active");
      $(this).parents(".icon-sec").siblings().find("h3").removeClass("active");
      $(this).parents(".icon-sec").siblings().find(".icon").removeClass("active");
    });
    // Mobile Home Page Slider Touchable Start
    $("#mobileSlider.carousel").swipe({
      swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
        if (direction == 'left') $(this).carousel('next');
        if (direction == 'right') $(this).carousel('prev');
      },
      allowPageScroll: "vertical"
    });
    // Mobile Home Page Slider Touchable End

    document.querySelectorAll('.box-tab-sec a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });
  </script>

<?php } ?>







<?php if ($layout == "home") { ?>

  <script src="<?php echo  base_url(); ?>assets/frontend/jss/jquery.meanmenu.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/jquery.appear.min.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/odometer.min.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/owl.carousel.min.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/parallax.min.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/jquery.nice-select.min.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/wow.min.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/main.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/js/plugins.js"></script>
  <script type="text/javascript" src="<?php echo  base_url(); ?>assets/frontend/js/jquery-3.2.1.min.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/js/parallax.min.js"></script>
  <script type="text/javascript" src="<?php echo  base_url(); ?>assets/frontend/js/slick.min.js"></script>
  <script type="text/javascript" src="<?php echo  base_url(); ?>assets/frontend/js/custom.js"></script>
  <script type="text/javascript" src="<?php echo  base_url(); ?>assets/frontend/js/lazyload.js"></script>

<?php } ?>





<?php if ($layout == "about") { ?>

  <script type='text/javascript' src='<?php echo  base_url(); ?>assets/frontend/js/script.minfe9d.js?ver=4.7.3'></script>
  <script type='text/javascript' src='<?php echo  base_url(); ?>assets/frontend/js/wp-embed.minfe9d.js?ver=4.7.3'></script>

  <script src="<?php echo  base_url(); ?>assets/frontend/zs/crum-mega-menu.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/zs/swiper.jquery.min.js"></script>

  <script src="<?php echo  base_url(); ?>assets/frontend/s/jquery.mousewheel.js"></script>

  <script src="<?php echo  base_url(); ?>assets/frontend/zs/imagesLoaded.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/zs/jquery.magnific-popup.js"></script>


  <script src="<?php echo  base_url(); ?>assets/frontend/zs/jquery-circle-progress.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/zs/Headroom.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/zs/smooth-scroll.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/zs/jquery.nice-select.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/zs/fastClick.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/zs/form-actions.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/zs/velocity.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/zs/time-line.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/zs/ScrollMagic.min.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/zs/animation.velocity.min.js"></script>



  <script src="<?php echo  base_url(); ?>assets/frontend/zs/ion.rangeSlider.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/zs/leaflet.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/main.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/js/plugins.js"></script>
  <script type="text/javascript" src="<?php echo  base_url(); ?>assets/frontend/js/jquery-3.2.1.min.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/js/parallax.min.js"></script>
  <script type="text/javascript" src="<?php echo  base_url(); ?>assets/frontend/js/slick.min.js"></script>
  <script type="text/javascript" src="<?php echo  base_url(); ?>assets/frontend/js/custom.js"></script>
  <script type="text/javascript" src="<?php echo  base_url(); ?>assets/frontend/js/lazyload.js"></script>
  <script>
    $('.full-nav-main-menu > li > a').click(function() {
      $('.full-nav-main-menu > li > a').removeClass('active');
      $(this).addClass('active');
      $('.full-nav-right').hide();
      $($(this).data('show')).fadeIn();
    });
    $('.menu-icon').click(function() {
      $('.menu-icon').css('display', 'none');
      $('.menu-area').css('transform', 'translateX(0%)');
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(1) > a').css('opacity', '1');
        $('.full-nav-main-menu > li:nth-child(1) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      }, 300);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(2) > a').css('opacity', '1');
        $('.full-nav-main-menu > li:nth-child(2) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      }, 400);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(3) > a').css('opacity', '1');
        $('.full-nav-main-menu > li:nth-child(3) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      }, 500);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(4) > a').css('opacity', '1');
        $('.full-nav-main-menu > li:nth-child(4) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      }, 600);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(5) > a').css('opacity', '1');
        $('.full-nav-main-menu > li:nth-child(5) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      }, 700);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(6) > a').css('opacity', '1');
        $('.full-nav-main-menu > li:nth-child(6) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      }, 800);
    });
    $('.btn-menu-cancel').click(function() {
      $('.full-nav-main-menu > li:nth-child(6) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      $('.full-nav-main-menu > li:nth-child(6) > a').css('opacity', '0');
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(5) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
        $('.full-nav-main-menu > li:nth-child(5) > a').css('opacity', '0');
      }, 10);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(4) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
        $('.full-nav-main-menu > li:nth-child(4) > a').css('opacity', '0');
      }, 20);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(3) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
        $('.full-nav-main-menu > li:nth-child(3) > a').css('opacity', '0');
      }, 30);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(2) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
        $('.full-nav-main-menu > li:nth-child(2) > a').css('opacity', '0');
      }, 40);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(1) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
        $('.full-nav-main-menu > li:nth-child(1) > a').css('opacity', '0');
      }, 50);
      setTimeout(function() {
        $('.menu-area').css('transform', 'translateX(100%)');
        $('.menu-icon').removeClass('cancel');
        $('.menu-icon').css('display', 'block');
      }, 100);
    });
    $('.btn-back').click(function() {
      $('.full-nav-right').fadeOut();
    });
  </script>
  <script>
    $(document).ready(function() {
      if ($('.for-remove').length && ($(window).width() < 768)) {
        $('.for-remove').remove();
      }
    });


    /* Home Page Main Slider start */
    $.fn.accordion = function() {
      var a = $(this);
      var c = 5;
      var e = null;
      a.children(".home_page .accordion li").each(function(f) {
        $(this).css("left", f * 2 + "%")
      });

      function b(f) {
        a.children(".home_page .accordion li").eq(f).stop().animate({
          left: f * 2 + "%",
          width: '96%'
        }, 700);
        a.children(".home_page .accordion li").eq(f).nextAll().each(function(g) {
          $(this).stop().animate({
            left: 96 + f * 2 + g * 2 + "%",
            width: '96%'
          }, 700);
        });
        a.children(".home_page .accordion li").eq(f).prevAll().each(function(g) {
          $(this).stop().animate({
            left: (f - g - 1) * 2 + "%"
          }, 980)
        })
      }

      a.children(".home_page .accordion li").mouseenter(function() {
        var f = a.children(".home_page .accordion li").index(this);
        c = f;
        b(f);
        clearTimeout(e);
        d()
      });

      function d() {
        e = setTimeout(function() {
          if (c >= 5) {
            c = 0
          } else {
            c++
          }
          b(c);
          d()
        }, 5000)
      }

      d()
    };
    /* Home Page Main Slider End */

    $('.collapse').on('show.bs.collapse', function(e) {
      $('.collapse').not(e.target).removeClass('in');
    });

    $('.learn-more').click(function(event) {
      var att = $(this).attr('id');
      //console.log(att);
      $(att).slideToggle(500);
      $(att).siblings('.collapse').slideUp(500);
      $(this).find("span").text($(this).find("span").text() == 'Read Less' ? "Read More" : "Read Less");
      $(this).parents(".icon-sec").siblings().find(".learn-more span").text("Read More");
      $(this).prev("h3").toggleClass("active");
      $(this).parent(".box").find(".icon").toggleClass("active");
      $(this).parents(".icon-sec").siblings().find("h3").removeClass("active");
      $(this).parents(".icon-sec").siblings().find(".icon").removeClass("active");
    });
    // Mobile Home Page Slider Touchable Start
    $("#mobileSlider.carousel").swipe({
      swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
        if (direction == 'left') $(this).carousel('next');
        if (direction == 'right') $(this).carousel('prev');
      },
      allowPageScroll: "vertical"
    });
    // Mobile Home Page Slider Touchable End

    document.querySelectorAll('.box-tab-sec a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });
  </script>

<?php } ?>














<script>
  $('.full-nav-main-menu > li > a').click(function() {
    $('.full-nav-main-menu > li > a').removeClass('active');
    $(this).addClass('active');
    $('.full-nav-right').hide();
    $($(this).data('show')).fadeIn();
  });
  $('.menu-icon').click(function() {
    $('.menu-icon').css('display', 'none');
    $('.menu-area').css('transform', 'translateX(0%)');
    setTimeout(function() {
      $('.full-nav-main-menu > li:nth-child(1) > a').css('opacity', '1');
      $('.full-nav-main-menu > li:nth-child(1) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
    }, 300);
    setTimeout(function() {
      $('.full-nav-main-menu > li:nth-child(2) > a').css('opacity', '1');
      $('.full-nav-main-menu > li:nth-child(2) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
    }, 400);
    setTimeout(function() {
      $('.full-nav-main-menu > li:nth-child(3) > a').css('opacity', '1');
      $('.full-nav-main-menu > li:nth-child(3) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
    }, 500);
    setTimeout(function() {
      $('.full-nav-main-menu > li:nth-child(4) > a').css('opacity', '1');
      $('.full-nav-main-menu > li:nth-child(4) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
    }, 600);
    setTimeout(function() {
      $('.full-nav-main-menu > li:nth-child(5) > a').css('opacity', '1');
      $('.full-nav-main-menu > li:nth-child(5) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
    }, 700);
    setTimeout(function() {
      $('.full-nav-main-menu > li:nth-child(6) > a').css('opacity', '1');
      $('.full-nav-main-menu > li:nth-child(6) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
    }, 800);
  });
  $('.btn-menu-cancel').click(function() {
    $('.full-nav-main-menu > li:nth-child(6) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
    $('.full-nav-main-menu > li:nth-child(6) > a').css('opacity', '0');
    setTimeout(function() {
      $('.full-nav-main-menu > li:nth-child(5) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      $('.full-nav-main-menu > li:nth-child(5) > a').css('opacity', '0');
    }, 10);
    setTimeout(function() {
      $('.full-nav-main-menu > li:nth-child(4) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      $('.full-nav-main-menu > li:nth-child(4) > a').css('opacity', '0');
    }, 20);
    setTimeout(function() {
      $('.full-nav-main-menu > li:nth-child(3) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      $('.full-nav-main-menu > li:nth-child(3) > a').css('opacity', '0');
    }, 30);
    setTimeout(function() {
      $('.full-nav-main-menu > li:nth-child(2) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      $('.full-nav-main-menu > li:nth-child(2) > a').css('opacity', '0');
    }, 40);
    setTimeout(function() {
      $('.full-nav-main-menu > li:nth-child(1) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      $('.full-nav-main-menu > li:nth-child(1) > a').css('opacity', '0');
    }, 50);
    setTimeout(function() {
      $('.menu-area').css('transform', 'translateX(100%)');
      $('.menu-icon').removeClass('cancel');
      $('.menu-icon').css('display', 'block');
    }, 100);
  });
  $('.btn-back').click(function() {
    $('.full-nav-right').fadeOut();
  });
</script>
<script>
  $(document).ready(function() {
    if ($('.for-remove').length && ($(window).width() < 768)) {
      $('.for-remove').remove();
    }
  });


  /* Home Page Main Slider start */
  $.fn.accordion = function() {
    var a = $(this);
    var c = 5;
    var e = null;
    a.children(".home_page .accordion li").each(function(f) {
      $(this).css("left", f * 2 + "%")
    });

    function b(f) {
      a.children(".home_page .accordion li").eq(f).stop().animate({
        left: f * 2 + "%",
        width: '96%'
      }, 700);
      a.children(".home_page .accordion li").eq(f).nextAll().each(function(g) {
        $(this).stop().animate({
          left: 96 + f * 2 + g * 2 + "%",
          width: '96%'
        }, 700);
      });
      a.children(".home_page .accordion li").eq(f).prevAll().each(function(g) {
        $(this).stop().animate({
          left: (f - g - 1) * 2 + "%"
        }, 980)
      })
    }

    a.children(".home_page .accordion li").mouseenter(function() {
      var f = a.children(".home_page .accordion li").index(this);
      c = f;
      b(f);
      clearTimeout(e);
      d()
    });

    function d() {
      e = setTimeout(function() {
        if (c >= 5) {
          c = 0
        } else {
          c++
        }
        b(c);
        d()
      }, 5000)
    }

    d()
  };
  /* Home Page Main Slider End */

  $('.collapse').on('show.bs.collapse', function(e) {
    $('.collapse').not(e.target).removeClass('in');
  });

  $('.learn-more').click(function(event) {
    var att = $(this).attr('id');
    //console.log(att);
    $(att).slideToggle(500);
    $(att).siblings('.collapse').slideUp(500);
    $(this).find("span").text($(this).find("span").text() == 'Read Less' ? "Read More" : "Read Less");
    $(this).parents(".icon-sec").siblings().find(".learn-more span").text("Read More");
    $(this).prev("h3").toggleClass("active");
    $(this).parent(".box").find(".icon").toggleClass("active");
    $(this).parents(".icon-sec").siblings().find("h3").removeClass("active");
    $(this).parents(".icon-sec").siblings().find(".icon").removeClass("active");
  });
  // Mobile Home Page Slider Touchable Start
  $("#mobileSlider.carousel").swipe({
    swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
      if (direction == 'left') $(this).carousel('next');
      if (direction == 'right') $(this).carousel('prev');
    },
    allowPageScroll: "vertical"
  });
  // Mobile Home Page Slider Touchable End

  document.querySelectorAll('.box-tab-sec a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();

      document.querySelector(this.getAttribute('href')).scrollIntoView({
        behavior: 'smooth'
      });
    });
  });
</script>




<?php if ($layout == "Case_studies") { ?>


  <script type='text/javascript' src='<?php echo  base_url(); ?>assets/frontend/js/script.minfe9d.js?ver=4.7.3'></script>
  <script type='text/javascript' src='<?php echo  base_url(); ?>assets/frontend/js/wp-embed.minfe9d.js?ver=4.7.3'></script>
  <script>
    $('.full-nav-main-menu > li > a').click(function() {
      $('.full-nav-main-menu > li > a').removeClass('active');
      $(this).addClass('active');
      $('.full-nav-right').hide();
      $($(this).data('show')).fadeIn();
    });
    $('.menu-icon').click(function() {
      $('.menu-icon').css('display', 'none');
      $('.menu-area').css('transform', 'translateX(0%)');
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(1) > a').css('opacity', '1');
        $('.full-nav-main-menu > li:nth-child(1) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      }, 300);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(2) > a').css('opacity', '1');
        $('.full-nav-main-menu > li:nth-child(2) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      }, 400);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(3) > a').css('opacity', '1');
        $('.full-nav-main-menu > li:nth-child(3) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      }, 500);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(4) > a').css('opacity', '1');
        $('.full-nav-main-menu > li:nth-child(4) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      }, 600);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(5) > a').css('opacity', '1');
        $('.full-nav-main-menu > li:nth-child(5) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      }, 700);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(6) > a').css('opacity', '1');
        $('.full-nav-main-menu > li:nth-child(6) > a').css('transform', 'translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      }, 800);
    });
    $('.btn-menu-cancel').click(function() {
      $('.full-nav-main-menu > li:nth-child(6) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
      $('.full-nav-main-menu > li:nth-child(6) > a').css('opacity', '0');
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(5) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
        $('.full-nav-main-menu > li:nth-child(5) > a').css('opacity', '0');
      }, 10);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(4) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
        $('.full-nav-main-menu > li:nth-child(4) > a').css('opacity', '0');
      }, 20);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(3) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
        $('.full-nav-main-menu > li:nth-child(3) > a').css('opacity', '0');
      }, 30);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(2) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
        $('.full-nav-main-menu > li:nth-child(2) > a').css('opacity', '0');
      }, 40);
      setTimeout(function() {
        $('.full-nav-main-menu > li:nth-child(1) > a').css('transform', 'translate3d(15px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)');
        $('.full-nav-main-menu > li:nth-child(1) > a').css('opacity', '0');
      }, 50);
      setTimeout(function() {
        $('.menu-area').css('transform', 'translateX(100%)');
        $('.menu-icon').removeClass('cancel');
        $('.menu-icon').css('display', 'block');
      }, 100);
    });
    $('.btn-back').click(function() {
      $('.full-nav-right').fadeOut();
    });
  </script>
  <script>
    $(document).ready(function() {
      if ($('.for-remove').length && ($(window).width() < 768)) {
        $('.for-remove').remove();
      }
    });


    /* Home Page Main Slider start */
    $.fn.accordion = function() {
      var a = $(this);
      var c = 5;
      var e = null;
      a.children(".home_page .accordion li").each(function(f) {
        $(this).css("left", f * 2 + "%")
      });

      function b(f) {
        a.children(".home_page .accordion li").eq(f).stop().animate({
          left: f * 2 + "%",
          width: '96%'
        }, 700);
        a.children(".home_page .accordion li").eq(f).nextAll().each(function(g) {
          $(this).stop().animate({
            left: 96 + f * 2 + g * 2 + "%",
            width: '96%'
          }, 700);
        });
        a.children(".home_page .accordion li").eq(f).prevAll().each(function(g) {
          $(this).stop().animate({
            left: (f - g - 1) * 2 + "%"
          }, 980)
        })
      }

      a.children(".home_page .accordion li").mouseenter(function() {
        var f = a.children(".home_page .accordion li").index(this);
        c = f;
        b(f);
        clearTimeout(e);
        d()
      });

      function d() {
        e = setTimeout(function() {
          if (c >= 5) {
            c = 0
          } else {
            c++
          }
          b(c);
          d()
        }, 5000)
      }

      d()
    };
    /* Home Page Main Slider End */

    $('.collapse').on('show.bs.collapse', function(e) {
      $('.collapse').not(e.target).removeClass('in');
    });

    $('.learn-more').click(function(event) {
      var att = $(this).attr('id');
      //console.log(att);
      $(att).slideToggle(500);
      $(att).siblings('.collapse').slideUp(500);
      $(this).find("span").text($(this).find("span").text() == 'Read Less' ? "Read More" : "Read Less");
      $(this).parents(".icon-sec").siblings().find(".learn-more span").text("Read More");
      $(this).prev("h3").toggleClass("active");
      $(this).parent(".box").find(".icon").toggleClass("active");
      $(this).parents(".icon-sec").siblings().find("h3").removeClass("active");
      $(this).parents(".icon-sec").siblings().find(".icon").removeClass("active");
    });
    // Mobile Home Page Slider Touchable Start
    $("#mobileSlider.carousel").swipe({
      swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
        if (direction == 'left') $(this).carousel('next');
        if (direction == 'right') $(this).carousel('prev');
      },
      allowPageScroll: "vertical"
    });
    // Mobile Home Page Slider Touchable End

    document.querySelectorAll('.box-tab-sec a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });
  </script>
  <script src="<?php echo  base_url(); ?>assets/frontend/js/jquery.min.js"></script>

  <script src="<?php echo  base_url(); ?>assets/frontend/jss/jquery.meanmenu.js"></script>
  <!-- Appear Min JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/jquery.appear.min.js"></script>
  <!-- Odometer Min JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/odometer.min.js"></script>
  <!-- Owl Carousel Min JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/owl.carousel.min.js"></script>
  <!-- Magnific Popup Min JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/jquery.magnific-popup.min.js"></script>
  <!-- Parallax Min JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/parallax.min.js"></script>
  <!-- Nice Select Min JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/jquery.nice-select.min.js"></script>
  <!-- WOW Min JS -->
  <script src="<?php echo  base_url(); ?>assets/frontend/jss/wow.min.js"></script>

  <script src="<?php echo  base_url(); ?>assets/frontend/jss/main.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/js/plugins.js"></script>
  <script type="text/javascript" src="<?php echo  base_url(); ?>assets/frontend/js/jquery-3.2.1.min.js"></script>
  <script src="<?php echo  base_url(); ?>assets/frontend/js/parallax.min.js"></script>
  <script type="text/javascript" src="<?php echo  base_url(); ?>assets/frontend/js/slick.min.js"></script>
  <script type="text/javascript" src="<?php echo  base_url(); ?>assets/frontend/js/custom.js"></script>

<?php } ?>


</body>

</html>