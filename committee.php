<?php
require_once("./include/db_config.php");
require_once("./include/acm_membership_config.php");

if(isset($_GET['ref_id']))
{ 
  $ref_id = $_GET['ref_id'];
  if($ref_id>2)
  {
    header("Location: error.php");
  }

}

if($ref_id==1)
{
  $ref_name = "Organising Committee";
}
if($ref_id==2)
{
  $ref_name = "Advisory Committee";
}

?>


<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>

  <!-- Basic -->
  <title>WCE Research Symposium on Computing | <?php echo $ref_name ?> </title>

  <!-- Define Charset -->
  <meta charset="utf-8">

  <!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Page Description and Author -->
  <meta name="description" content="National Research Symposium is a two day national level research symposium organized by Department of Computer Science &amp; Engineering, Walchand College of Engineering, Sangli during 19-20 December 2018." />
  <meta name="keywords" content="National Research Symposium on Computing, RSC 2018, Research Symposium,Walchand College of Engineering, WCE Sangli, Computing, Department of Computer Science &amp; Engineering, TEQIP-II, WCE ACM Student Chapter" />

  <meta name="author" content="Harshal Khairnar - CBA Solutions" />

  <!-- Bootstrap CSS  -->
  <link rel="stylesheet" href="asset/css/bootstrap.min.css" type="text/css" media="screen">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">

  <!-- Slicknav -->
  <link rel="stylesheet" type="text/css" href="css/slicknav.css" media="screen">

  <!-- Margo CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

  <!-- Responsive CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">

  <!-- Css3 Transitions Styles  -->
  <link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">

  <!-- Color CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="css/colors/blue.css" title="blue" media="screen" />

  <!-- Margo JS  -->
  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="js/jquery.migrate.js"></script>
  <script type="text/javascript" src="js/modernizrr.js"></script>
  <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.fitvids.js"></script>
  <script type="text/javascript" src="js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="js/nivo-lightbox.min.js"></script>
  <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
  <script type="text/javascript" src="js/jquery.appear.js"></script>
  <script type="text/javascript" src="js/count-to.js"></script>
  <script type="text/javascript" src="js/jquery.textillate.js"></script>
  <script type="text/javascript" src="js/jquery.lettering.js"></script>
  <script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
  <script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
  <script type="text/javascript" src="js/jquery.parallax.js"></script>
  <script type="text/javascript" src="js/jquery.slicknav.js"></script>

  <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png"> 
  <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
  <link rel="manifest" href="favicon/manifest.json">  
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-85671004-1', 'auto');
    ga('send', 'pageview');

  </script>
</head>

<body style="background: url(images/patterns/5.png) repeat;">

  <!-- Full Body Container -->
  <div id="container">


    <!-- Start Header Section -->
    <div class="hidden-header"></div>
    <header class="clearfix">

      <!-- Start Top Bar -->
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-md-9">
              <!-- Start Contact Info -->
              <ul class="contact-details">
                <li><a href="#"><i class="fa fa-map-marker"></i> Walchand College of Engineering, Sangli, MH-IN</a>
                </li>
                <li><a href="mailto:<?php echo $acm->SiteEmail(); ?>"><i class="fa fa-envelope-o"></i> <?php echo $acm->SiteEmail(); ?></a>
                </li>
                <li><a href="#"><i class="fa fa-phone"></i> <?php echo $acm->SiteContact(); ?></a>
                </li>
              </ul>
              <!-- End Contact Info -->
            </div>
            <!-- .col-md-6 -->
            <div class="col-md-3">
              <!-- Start Social Links -->
              <ul class="social-list">
                <li>
                  <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="<?php echo $acm->SiteFB(); ?>"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="<?php echo $acm->SiteTwitter(); ?>"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a class="google itl-tooltip" data-placement="bottom" title="Google Plus" href="<?php echo $acm->SiteLinkedIn(); ?>"><i class="fa fa-google-plus"></i></a>
                </li>
                <li>
                  <a class="linkdin itl-tooltip" data-placement="bottom" title="Linkedin" href="<?php echo $acm->SiteGplus(); ?>"><i class="fa fa-linkedin"></i></a>
                </li>
              </ul>
              <!-- End Social Links -->
            </div>
            <!-- .col-md-6 -->
          </div>
          <!-- .row -->
        </div>
        <!-- .container -->
      </div>
      <!-- .top-bar -->
      <!-- End Top Bar -->


      <!-- Start  Logo & Naviagtion  -->
      <div class="navbar navbar-default navbar-top">
        <div class="container">
          <div class="navbar-header" style="margin-bottom:2%;">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            <a class="navbar-brand" href="index.php">
              <h1><?php echo $acm->SiteName(); ?></h1>
              <small><?php echo $acm->AdminEmail(); ?></small>
            </a>
          </div>
          <div class="navbar-collapse collapse">
            <!-- Stat Search -->
            <div class="search-side">
              <a class="show-search"><i class="fa fa-search"></i></a>
              <div class="search-form">
                <form autocomplete="on" role="search" method="get" class="searchform" action="#">
                  <input type="text" class="input-lg" name="s" id="s" placeholder="Search the site..." onkeyup="showResult(this.value)"/>
                  <div id="livesearch"></div>
                </form>
              </div>
            </div>
            <!-- End Search -->
            <!-- Start Navigation List -->
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="margin-top:2%;" >

              <ul class="nav navbar-nav" >
                <li>
                  <a href="index.php"><span class="pull-left"><i class="fa fa-home"></i></span>&nbsp;&nbsp;Home</a>
                </li>
                <li>
                  <a href="#" ><span class="pull-left"><i class="fa fa-group"></i></span>&nbsp;&nbsp;Authors</a>
                  <ul class="dropdown">
                    <li><a href="call_for.php" class="active">Call for Contributions <span class="pull-right"><i class="fa fa-bullhorn"></i></span></a>
                    </li>
                    <li><a href="instructions.php">Presentation <br/> Instructions <span class="pull-right"><i class="fa fa-info-circle"></i></span></a>
                    </li>
                    <li><a href="submission.php">Paper Submission <span class="pull-right"><i class="fa fa-upload"></i></span></a>
                    </li>
                    <li><a href="dates.php">Important Dates<span class="pull-right"><i class="fa fa-calendar"></i></span></a>
                    </li>
                  </ul>
                </li>
                <li><a href="#" ><span class="pull-left"><i class="fa fa-calendar-check-o"></i></span>&nbsp;&nbsp;Programs</a>
                  <ul class="dropdown">
                    <li><a href="keynotes.php">Keynotes &amp; Awards Presentation<span class="pull-right"><i class="fa fa-microphone"></i></span></a>
                    </li>
                    <li><a href="paper_presentation.php">Paper Presentation<span class="pull-right"><i class="fa fa-newspaper-o"></i></span></a>
                    </li> 
                    <li><a href="poster_presentation.php">Poster Presentation<span class="pull-right"><i class="fa fa-image"></i></span></a>
                    </li>
                    <li><a href="schedule.php">Event Schedule<span class="pull-right"><i class="fa fa-calendar"></i></span></a>
                    </li>
                    <li><a href="register.php">Event Registration<span class="pull-right"><i class="fa fa-edit"></i></span></a>
                    </li>
                  </ul>
                </li>
                <li><a href="#" class="active"><span class="pull-left"><i class="fa fa-sitemap"></i></span>&nbsp;&nbsp;Organisation</a>
                  <ul class="dropdown">
                    <li><a href="committee.php?ref_id=1" <?php if($ref_id == 1) { ?> class="active" <?php } ?>>Organising Committee<span class="pull-right"><i class="fa fa-group"></i></span></a>
                    </li>

                    <li><a href="committee.php?ref_id=2" <?php if($ref_id == 2) { ?> class="active" <?php } ?>>Advisory Committee<span class="pull-right"><i class="fa fa-group"></i></span></a>
                    </li>

                  </ul>
                </li>
                <li><a href="#"><span class="pull-left"><i class="fa fa-info-circle"></i></span>&nbsp;&nbsp;Local Information</a>
                  <ul class="dropdown">
                    <li><a href="venue.php">Conference Venue<span class="pull-right"><i class="fa fa-location-arrow"></i></span></a>
                    </li>

                    <li><a href="location.php">Conference Location<span class="pull-right"><i class="fa fa-map-marker"></i></span></a>
                    </li>


                    <li><a href="accessing.php">Accessing Sangli<span class="pull-right"><i class="fa fa-plane"></i></span></a>
                    </li>
                  </ul>
                </li>

                <li><a href="gallery.php"><span class="pull-left"><i class="fa fa-image"></i></span>&nbsp;&nbsp;Gallery</a>
                </li>
                <li><a href="about.php"><span class="pull-left"><i class="fa fa-info-circle"></i></span>&nbsp;&nbsp;About</a>
                </li>
                <li><a href="contact.php"><span class="pull-left"><i class="fa fa-envelope"></i></span>&nbsp;&nbsp;Contact</a>
                </li>
                <?php if($acm->CheckLogin()){ 

                  ?>
                  <li><a href="#"><span class="pull-left"><i class="fa fa-user"></i></span>&nbsp;&nbsp;<?php echo $acm->UserFullName(); ?></a>
                    <ul class="dropdown">
                      <li><a href="<?php echo $acm->UserRole();?>/index.php">Dashboard <span class="pull-right"><i class="fa fa-dashboard"></i></span></a>
                      </li>
                      <li><a href="<?php echo $acm->UserRole();?>/settings.php">Settings <span class="pull-right"><i class="fa fa-gears"></i></span></a>
                      </li>
                      <li><a href="login.php?logout=true">Logout <span class="pull-right"><i class="fa fa-sign-out"></i></span></a>
                      </li>
                    </ul>
                  </li>
                <?php } else{ ?>
                  <li><a href="login.php"><span class="pull-left"><i class="fa fa-sign-in"></i></span>&nbsp;&nbsp;Login</a>
                  </li>
                <?php } ?>
              </ul>
            </div>
            <!-- End Navigation List -->
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="wpb-mobile-menu">
          <li>
            <a href="index.php"><span class="pull-left"><i class="fa fa-home"></i></span>&nbsp;&nbsp;Home</a>
          </li>
          <li>
            <a href="#" ><span class="pull-left"><i class="fa fa-group"></i></span>&nbsp;&nbsp;Authors</a>
            <ul class="dropdown">
              <li><a href="call_for.php" class="active">Call for Contributions <span class="pull-right"><i class="fa fa-bullhorn"></i></span></a>
              </li>
              <li><a href="instructions.php">Presentation <br/> Instructions <span class="pull-right"><i class="fa fa-info-circle"></i></span></a>
              </li>
              <li><a href="submission.php">Paper Submission <span class="pull-right"><i class="fa fa-upload"></i></span></a>
              </li>
              <li><a href="dates.php">Important Dates<span class="pull-right"><i class="fa fa-calendar"></i></span></a>
              </li>
            </ul>
          </li>
          <li><a href="#" ><span class="pull-left"><i class="fa fa-calendar-check-o"></i></span>&nbsp;&nbsp;Programs</a>
            <ul class="dropdown">
              <li><a href="keynotes.php">Keynotes &amp; Awards Presentation<span class="pull-right"><i class="fa fa-microphone"></i></span></a>
              </li>
              <li><a href="paper_presentation.php">Paper Presentation<span class="pull-right"><i class="fa fa-newspaper-o"></i></span></a>
              </li> 
              <li><a href="poster_presentation.php">Poster Presentation<span class="pull-right"><i class="fa fa-image"></i></span></a>
              </li>
              <li><a href="schedule.php">Event Schedule<span class="pull-right"><i class="fa fa-calendar"></i></span></a>
              </li>
              <li><a href="register.php">Event Registration<span class="pull-right"><i class="fa fa-edit"></i></span></a>
              </li>
            </ul>
          </li>
          <li><a href="#" class="active"><span class="pull-left"><i class="fa fa-sitemap"></i></span>&nbsp;&nbsp;Organisation</a>
            <ul class="dropdown">
              <li><a href="committee.php?ref_id=1" <?php if($ref_id == 1) { ?> class="active" <?php } ?>>Organising Committee<span class="pull-right"><i class="fa fa-group"></i></span></a>
              </li>

              <li><a href="committee.php?ref_id=2" <?php if($ref_id == 2) { ?> class="active" <?php } ?>>Advisory Committee Committee<span class="pull-right"><i class="fa fa-group"></i></span></a>
              </li>

            </ul>
          </li>
          <li><a href="#"><span class="pull-left"><i class="fa fa-info-circle"></i></span>&nbsp;&nbsp;Local Information</a>
            <ul class="dropdown">
              <li><a href="venue.php">Conference Venue<span class="pull-right"><i class="fa fa-location-arrow"></i></span></a>
              </li>

              <li><a href="location.php">Conference Location<span class="pull-right"><i class="fa fa-map-marker"></i></span></a>
              </li>


              <li><a href="accessing.php">Accessing Sangli<span class="pull-right"><i class="fa fa-plane"></i></span></a>
              </li>
            </ul>
          </li>

          <li><a href="gallery.php"><span class="pull-left"><i class="fa fa-image"></i></span>&nbsp;&nbsp;Gallery</a>
          </li>
          <li><a href="about.php"><span class="pull-left"><i class="fa fa-info-circle"></i></span>&nbsp;&nbsp;About</a>
          </li>
          <li><a href="contact.php"><span class="pull-left"><i class="fa fa-envelope"></i></span>&nbsp;&nbsp;Contact</a>
          </li>
          <?php if($acm->CheckLogin()){ 

            ?>
            <li><a href="#"><span class="pull-left"><i class="fa fa-user"></i></span>&nbsp;&nbsp;<?php echo $acm->UserFullName(); ?></a>
              <ul class="dropdown">
                <li><a href="<?php echo $acm->UserRole();?>/index.php">Dashboard <span class="pull-right"><i class="fa fa-dashboard"></i></span></a>
                </li>
                <li><a href="<?php echo $acm->UserRole();?>/settings.php">Settings <span class="pull-right"><i class="fa fa-gears"></i></span></a>
                </li>
                <li><a href="login.php?logout=true">Logout <span class="pull-right"><i class="fa fa-sign-out"></i></span></a>
                </li>
              </ul>
            </li>
          <?php } else{ ?>
            <li><a href="login.php"><span class="pull-left"><i class="fa fa-sign-in"></i></span>&nbsp;&nbsp;Login</a>
            </li>
          <?php } ?>

        </ul>
        <!-- Mobile Menu End -->

      </div>
      <!-- End Header Logo & Naviagtion -->

    </header>
    <!-- End Header Section -->


    <!-- Start Page Banner -->
    <div class="page-banner" style="padding:40px 0; background: url(images/slide-02-bg.jpg) center #f9f9f9;">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2><?php echo $ref_name; ?></h2>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="index.php">Home</a></li>
              <li><b>Organisation</b></li> 
              <li><?php echo $ref_name; ?></li>          
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->
    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <?php if($ref_id ==1)
        { 

          ?>
          <table class="table table-responsive table-condensed table-bordered">
            <thead>
              <th>Sr.No.</th>
              <th>Role</th>
              <th>Name</th>
              <th>Designation</th>
            </thead>
            <tr>
              <td>1</td>
              <td>Symposium Patron</td>
              <td>Prof. G.V. Parishwad<br>Prof. S.S. Thakur</td>
              <td>Director Walchand College of Engineering, Sangli.<br> Principal Jabalpur College of Engineering, Jabalpur</td>
            </tr>

            <tr>
              <td>2</td>
              <td>Chair of the Symposium</td>
              <td>Dr. P.J. Kulkarni</td>
              <td>Department of Computer Science and Engineering, WCE</td>
            </tr>

            <tr>
              <td>3</td>
              <td>Convener</td>
              <td>M.A. Shah</td>
              <td>Department of Computer Science and Engineering, WCE</td>
            </tr>

            <tr>
              <td>4</td>
              <td>Local Organizing Committee</td>
              <td>Dr. B F Momin<br>
                Dr. S P Sonavane<br>
                Dr. D B Kulkarni<br>
                Dr. A.J. Umbarkar<br>
                Dr. R.R. Rathod<br>
                Mr. A R Surve<br>
                Mr. M K Chavan<br>
                Mr. N L Gavankar<br>
                Mr. U.B. Chavan<br>
                Mrs. B.S. Shetty<br>
                Mr. N.B. Narnaware<br>
              </td>
              <td>
                H.O.D, Department of Computer Science and Engineering, WCE<br>
                H.O.D, Department of Information Technology, WCE<br>
                Department of Information Technology, WCE<br>
                Department of Information Technology, WCE<br>
                Department of Information Technology, WCE<br>
                Department of Computer Science and Engineering, WCE<br>
                Department of Computer Science and Engineering, WCE<br>
                Department of Computer Science and Engineering, WCE<br>
                Department of Information Technology, WCE<br>
                Department of Information Technology, WCE<br>
                Department of Information Technology, WCE<br>
              </td>
            </tr>

          </table>
        <?php  } ?>
        <?php if($ref_id == 2)
        {
          ?>
          <div class="row">
            <div class="col-sm-12">
              <table class="table table-responsive table-condensed table-bordered">

                <th>Sr.No.</th>
                <th>Name</th>
                <tr>
                  <td>
                    1
                  </td>
                  <td>
                    Dr. Brijesh Iyer (BATU), Lonere
                  </td>
                </tr>
                <tr>
                  <td>
                    2
                  </td>
                  <td>
                    Dr. Aditya Abhyankar (SPPU), Pune
                  </td>
                </tr>
                <tr>
                  <td>
                    3
                  </td>
                  <td>
                    Dr. Rajesh Ingle (PICT), Pune
                  </td>
                </tr>
                <tr>
                  <td>
                    4
                  </td>
                  <td>
                    Dr. Venkateswaran (Persistent), Pune
                  </td>
                </tr>
                <tr>
                  <td>
                    5
                  </td>
                  <td>
                    Dr. R. B. Kulkarni (COE), Karad
                  </td>
                </tr>
                <tr>
                  <td>
                    6
                  </td>
                  <td>
                    Dr. S G Bhirud (VJTI), Mumbai
                  </td>
                </tr>
                <tr>
                  <td>
                    7
                  </td>
                  <td>
                    Dr. Meghshyam Prasad (Videoken), Banglore
                  </td>
                </tr>
                <tr>
                  <td>
                    8
                  </td>
                  <td>
                    Dr. Shailja Shukla (JEC), Jabalpur
                  </td>
                </tr>
               <tr>
                  <td>
                    9
                  </td>
                  <td>
                    Dr. U P Kulkarni (SDM), Dharwad
                  </td>
                </tr>
                <tr>
                  <td>
                    10
                  </td>
                  <td>
                    Dr. R K Kamat (SUK), Kolhapur
                  </td>
                </tr>
                <tr>
                  <td>
                    11
                  </td>
                  <td>
                    Dr. V B Dharmadhikari (WCE), Sangli
                  </td>
                </tr>
              </table>
            </div>
          </div>

          <?php 
        } ?>
      </div>
    </div>
    <!-- End content -->

    <!-- Start Footer -->
    <footer>
      <div class="container">
        <div class="row footer-widgets">

          <!-- Start Subscribe & Social Links Widget -->
          <div class="col-md-3">
            <div class="footer-widget mail-subscribe-widget">
              <h4>Get in touch<span class="head-line"></span></h4>
              <p>Subscribe to our forum to stay tuned for the latest updates related to <b>WCE Research Symposium on Computing!</b></p>
              <form class="subscribe">
                <input type="email" class="email" id="txtEmail" placeholder="mail@example.com">
                <a href="#subscribe" class="btn btn-lg btn-system" onclick="subscribe()">Subscribe</a>
              </form>
              <div id="subscribeResponse"></div>
            </div>
            <div class="footer-widget social-widget">
              <h4>Follow Us<span class="head-line"></span></h4>
              <ul class="social-icons">
                <li>
                  <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a class="google" href="#"><i class="fa fa-google-plus"></i></a>
                </li>
                <li>
                  <a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
                </li>
                <li>
                  <a class="instgram" href="#"><i class="fa fa-instagram"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Subscribe & Social Links Widget -->


          <!-- Start Twitter Widget -->
          <div class="col-md-3">
            <div class="footer-widget twitter-widget">
              <h4>Quick Links<span class="head-line"></span></h4>
              <ul>
                <li>
                  <a href="about.php">About Us </a>
                </li>

                <li>
                  <a href="contact.php">Contact Us </a>
                </li>
                <li>
                  <a href="terms.php">Terms of Use</a>
                </li>
              </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Twitter Widget -->


          <!-- Start Flickr Widget -->
          <div class="col-md-3">
            <div class="footer-widget flickr-widget">
              <h4>External Links<span class="head-line"></span></h4>
              <ul class="flickr-list">
               <?PHP
               $sql = "select * from external_links where status='1' limit 0,9";
               $result = mysqli_query($conn, $sql);
               if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result))
                  { ?>
                    <li>
                      <a href="<?php echo $row['ext_link'];?>" class="lightbox">
                        <img alt="<?php echo $row['link_name'];?>" src="<?php echo $row['image_link'];?>">
                      </a>
                    </li>
                  <?php } } ?>
                </ul>
              </div>
            </div>
            <!-- .col-md-3 -->
            <!-- End Flickr Widget -->


            <!-- Start Contact Widget -->
            <div class="col-md-3">
              <div class="footer-widget contact-widget">
                <h4><img src="images/acm.png" class="img-responsive" alt="WCE Research Symposium on Computing" /></h4>
                <p>WCE Research Symposium on Computing 2018 is the 3rd National Level event organized by Department of Computer Science &amp; Engineering, Walchand College of Engineering, Sangli.</p>
                <ul>
                  <li><span>Phone Number:</span> <?php echo $acm->SiteContact(); ?></li>
                  <li><span>Email:</span> <?php echo $acm->SiteEmail(); ?></li>
                  <li><span>Website:</span> http://rsc.wce.ac.in</li>
                </ul>
              </div>
            </div>
            <!-- .col-md-3 -->
            <!-- End Contact Widget -->


          </div>
          <!-- row -->

          <!-- Start Copyright -->
          <div class="copyright-section">
            <div class="row">
              <div class="col-md-6">
                <p>&copy; 2018 WCE Research Symposium on Computing - All Rights Reserved <br/>
                  Developed By: <a href="http://cbainc.in" target="_blank">CBA Solutions</a> </p>
                </div>
                <div class="col-md-6">
                  <ul class="footer-nav">
                    <li><a href="sitemap.php">Sitemap</a></li>
                    <li><a href="privacy.php">Privacy Policy</a></li>
                    <li><a href="contact.php">Contact</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- End Copyright -->

          </div>
        </footer>
        <!-- End Footer -->

      </div>
      <!-- End Container -->

      <!-- Go To Top Link -->
      <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

      <script type="text/javascript" src="js/script.js"></script>
      <script>
        function showResult(str) {
          if (str.length==0) {
            document.getElementById("livesearch").innerHTML="";
            document.getElementById("livesearch").style.border="0px";

            return;
          }
          if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("livesearch").innerHTML= "<ul class='dropdown'>"+xmlhttp.responseText+"</ul>";
      document.getElementById("livesearch").style.background="#fff";
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
      document.getElementById("livesearch").style.padding="3%";

    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}


function subscribe()
{
 if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } 
  else 
  {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {  

      document.getElementById("subscribeResponse").innerHTML = xmlhttp.responseText;
    }
  }
  var email = document.getElementById("txtEmail").value;
  if(email =="")
  {
   document.getElementById("subscribeResponse").innerHTML = "Email Cannot Be Empty!"; 
 }
 else
 {
  xmlhttp.open("GET","subscribe.php?email="+email,true);
  xmlhttp.send();
}
}
</script>
</body>

</html>