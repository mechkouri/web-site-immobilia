
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Estate sale - Real Estate Category Bootstrap Responsive Website Template - Contact : W3layouts</title>

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
  </head>
  <body>

<!--header-->
<header id="site-header" class="fixed-top">
  <div class="container">
      <nav class="navbar navbar-expand-lg stroke px-0">
          <h1> <a class="navbar-brand" href="index.php">
                  <span class="fa fa-home"></span> Estate sale
              </a></h1>
          <!-- if logo is image enable this   
  <a class="navbar-brand" href="#index.html">
      <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
  </a> -->
          <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
              data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
              <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav ml-lg-5 mr-auto">
                  <li class="nav-item @@home__active">
                      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item @@listing__active">
                      <a class="nav-link" href="index.php#locations">Listing</a>
                  </li>
                  <li class="nav-item @@listing__active">
                    <a class="nav-link" href="index.php#about">About us</a>
                </li>
                <li class="nav-item @@listing__active">
                    <a class="nav-link" href="contact.php">Contact us</a>
                </li>
              </ul>
              <div class="top-quote mt-lg-0">
                  <a href="connectez.php" class="btn btn-style btn-primary"><span class="fa fa-home"></span> Add
                      listiing</a>
              </div>
              <!--/search-right-->
              <div class="search mx-3">
                  <input class="search_box" type="checkbox" id="search_box">
                  <label class="fa fa-search" for="search_box"></label>
                  <div class="search_form">
                      <form action="error.html" method="GET">
                          <input type="text" placeholder="Search"><input type="submit" value="search">
                      </form>
                  </div>
              </div>
              <!--//search-right-->
          </div>

          <!-- toggle switch for light and dark theme -->
          <div class="mobile-position">
              <nav class="navigation">
                  <div class="theme-switch-wrapper">
                      <label class="theme-switch" for="checkbox">
                          <input type="checkbox" id="checkbox">
                          <div class="mode-container">
                              <i class="gg-sun"></i>
                              <i class="gg-moon"></i>
                          </div>
                      </label>
                  </div>
              </nav>
          </div>
          <!-- //toggle switch for light and dark theme -->
      </nav>
  </div>
</header>
<br>
<br><br><br>
<!-- contacts --><?php


if(isset($_POST['contact']))
{

    if(!empty($_POST['emailC'])  AND !empty($_POST['messageC']) AND !empty($_POST['name']) )
    {


        $header="MIME-Version: 1.0\r\n";
        $header.='Content-Type:text/html; charset="UTF-8"'."\n";
        $header.='Content-Transfer-Encoding: 8bit';
        $message='
        <html>
        <style type="text/css">
        td{padding-bottom: 10%;}
        .all{background-color: #303036;
            color:#d3d3d3;
            font-family: Verdana,Geneva,sans-serif;

        }
        </style>

        <body>

        <div align="center">
        <div border="0" style="margin:0;padding:0" >

        <table border="0" cellpadding="0" cellspacing="0" width="600" style="border:1px ;background-color:#303036;width:100%">
        <tr>
        <td style="margin:0;padding:10px 40px;background:#303036;">
        <center><strong style="color:#d3d3d3;text-transform:uppercase;font-family: cursive;letter-spacing: 9px;">
        <span style="color:#ff9b05">Immo</span>bilia</strong></center>
        </td>
        </tr>
        </table>
        </div>

        <div class="all">
        <br><br><br>
        <br>			
        <table>

        <tr>
        <td><strong style="color:#ff9b05;text-decoration:none;letter-spacing:3px">From:</strong></td>
        <td><strong><span style="font-size:13px;color:#d3d3d3">'.$_POST['emailC'].'</span></strong></td>
        </tr>
        </table>
        <br>
        <strong style="color:#ff9b05;text-decoration:none;letter-spacing:3px;max-width:50%;">Message:</strong><br><br>
        <div style="max-width: 50%;font-size:13px;">'.$_POST['messageC'].'</div>
        <br><br><br><strong style="color:#ff9b05;text-decoration:none;letter-spacing:3px;max-width:50%;">by:</strong><br><br>
        <div style="max-width: 50%;font-size:13px;">'.$_POST['name'].'</div>
        <br>
        </div></div>


        </body>
        </html>
        ';



        mail('Immobilia@gmail.com','CONTACT - Immobilia', $message, $header);
        $_SESSION['msg_contact']['success']="Votre message a été Envoyer";
    }
    else
    {
        $_SESSION['msg_contact']['danger']="Vous n'avez pas rempli le formulaire de contact correctement";

    }	    

}

?>
<!--Message flash pour l'email de contact-->

<?php if (isset($_SESSION['msg_contact'])): ?>
									<?php foreach ($_SESSION['msg_contact'] as $type => $message): ?>

										<div class="alert alert-<?=$type;?>" style="width:100%;"><li><?=$message; ?> </li></div>

									<?php endforeach; ?>
									<?php unset($_SESSION['msg_contact']); ?>
								<?php endif;?>
<section class="w3l-contact-7 pt-5" id="contact">
    <div class="contacts-9 pt-lg-5 pt-md-4">
        <div class="container">
            <div class="top-map">
                <div class="row map-content-9">
                    <div class="col-lg-8">
                        <div class="contact-form">
                            <h5 class="mb-2">Get in touch</h5>
                            <p class="mb-4">Your email address will not be published. Required fields are marked *</p>
                            <form action="" method="post" class="">
                                <div class="form-grid">
                                    <div class="input-field">
                                        <input type="text" name="name"  placeholder="Your Name"
                                            required="">
                                    </div>
                                    <div class="input-field">
                                        <input type="email" name="emailC"  placeholder="Email"
                                            required="">
                                    </div>
                                </div>
                                <div class="input-field mt-4">
                                    <textarea name="messageC"  placeholder="Message"></textarea>
                                </div>
                    
                                <button type="submit" name="contact" class="btn btn-primary btn-style mt-3">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 cont-details">
                        <address>
                            <h5 class="">Our Office Address</h5>
                            <p><span class="fa fa-map-marker"></span>Estate sale office, 32, My Street, Kingston,
                                New York 12401. </p>

                            <h5 class="mt-4 pt-lg-3">Phone informatiom</h5>
                            <p><span class="fa fa-mobile"></span> <strong>Phone :</strong>
                                <a href="tel:+1(12) 366 411 4999"> (+1) 366 411 499</a></p>

                            <p><span class="fa fa-phone"></span> <strong>Tel :</strong>
                                <a href="tel:+1(12) 366 411 4999"> (+1) 366 411 499</a></p>

                            <p> <span class="fa fa-envelope"></span> <strong>Email :</strong>
                                <a href="mailto:mail@example.com"> mail@example.com</a></p>
                        </address>
                    </div>
                </div>
            </div>
        </div>
        <div class="map mt-5">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13588.23184437269!2d-8.02169322984751!3d31.63226337116789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafee8d931f3209%3A0x96ce34d39325c762!2sGu%C3%A9liz%2C%20Marrakech%2040000!5e0!3m2!1sfr!2sma!4v1620604292281!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>
<!-- //contacts -->
 <!-- footers 20 -->
 <section class="w3l-footers-20">
  <div class="footers20">
    <div class="container">
      <div class="footers20-content">
        <div class="d-grid grid-col-4 grids-content">
          <div class="column">
            <a href="#url" class="link"><span class="fa fa-comments"></span></a>
            <a href="#url" class="title-small">Free consultation</a>
            <h4>Schedule a free consultation with our specialist.</h4>
            <a href="#buytheme" class="btn btn-style btn-primary"> Schedule now
              <span class="fa fa-long-arrow-right ml-2"></span> </a>
          </div>
          <div class="column">
            <a href="#url" class="link"><span class="fa fa-phone"></span></a>
            <a href="#url" class="title-small">help desk</a>
            <h4>Do you have questions or want more infomation? Call Now</h4>
            <a href="tel:+1-2345-678-11">
              <p class="contact-phone mt-2"><span class="lnr lnr-phone-handset"></span> +1-2345-678-11
              </p>
            </a>
          </div>
          <div class="column mt-lg-0 mt-md-5">
            <h4 class="mb-1">Signup for newsletter</h4>
            <p>and get latest news and updates</p>
            <form action="#" class="subscribe-form mt-4" method="post">
              <div class="form-group">
                <input type="email" name="subscribe" placeholder="Enter your email" required="">
                <button class="btn btn-style btn-primary">Subscribe</button>
              </div>
            </form>
            <ul class="footers-17_social">
              <h4 class="d-inline mr-4">Follow us</h4>
              <li><a href="#url" class="twitter"><span class="fa fa-twitter"></span></a></li>
              <li><a href="#url" class="facebook"><span class="fa fa-facebook"></span></a></li>
              <li><a href="#url" class="linkedin"><span class="fa fa-linkedin"></span></a></li>
              <li><a href="#url" class="instagram"><span class="fa fa-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="d-grid grid-col-3 grids-content1 bottom-border">
          <div class="columns copyright-grid align-self">
            <p class="copy-footer-29">© 2020 Estate sale. All rights reserved | Designed by <a
                href="https://w3layouts.com">W3layouts</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    &#10548;
  </button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- /move top -->
</section>

<!-- jQuery and Bootstrap JS -->
<script src="assets/js/jquery-3.3.1.min.js"></script>

<script src="assets/js/theme-change.js"></script><!-- theme switch js (light and dark)-->

<!-- stats number counter-->
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.countup.js"></script>
<script>
  $('.counter').countUp();
</script>
<!-- //stats number counter -->

<!-- owlcarousel -->
<script src="assets/js/owl.carousel.js"></script>
<!-- script for blog post slider -->
<script>
  $(document).ready(function () {
    $('.owl-blog').owlCarousel({
      loop: true,
      margin: 30,
      nav: false,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        480: {
          items: 1,
          nav: true
        },
        700: {
          items: 1,
          nav: true
        },
        1090: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script for blog post slider -->

<!-- script for tesimonials carousel slider -->
<script>
  $(document).ready(function () {
    $("#owl-demo1").owlCarousel({
      loop: true,
      nav: false,
      margin: 50,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        736: {
          items: 1,
          nav: false
        }
      }
    })
  })
</script>
<!-- //script for tesimonials carousel slider -->

<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

    $('.popup-with-move-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom'
    });
  });
</script>

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!-- MENU-JS -->
<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!-- //MENU-JS -->

<!-- bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>