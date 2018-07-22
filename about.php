<?php
require_once("./include/db_config.php");
require_once("./include/acm_membership_config.php");

?>

<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>

  <!-- Basic -->
  <title>WCE Research Symposium on Computing | About</title>

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
                  <a href="#"><span class="pull-left"><i class="fa fa-group"></i></span>&nbsp;&nbsp;Authors</a>
                  <ul class="dropdown">
                    <li><a href="call_for.php">Call for Contributions <span class="pull-right"><i class="fa fa-bullhorn"></i></span></a>
                    </li>
                    <li><a href="instructions.php">Presentation <br/> Instructions <span class="pull-right"><i class="fa fa-info-circle"></i></span></a>
                    </li>
                    <li><a href="submission.php">Paper Submission <span class="pull-right"><i class="fa fa-upload"></i></span></a>
                    </li>
                    <li><a href="dates.php">Important Dates<span class="pull-right"><i class="fa fa-calendar"></i></span></a>
                    </li>
                  </ul>
                </li>
                <li><a href="#"><span class="pull-left"><i class="fa fa-calendar-check-o"></i></span>&nbsp;&nbsp;Programs</a>
                  <ul class="dropdown">
                    <li><a href="keynotes.php">Keynotes &amp; Awards Presentation<span class="pull-right"><i class="fa fa-microphone"></i></span></a>
                    </li>
                    <li><a href="paper_presentation.php">Paper Presentation<span class="pull-right"><i class="fa fa-newspaper-o"></i></span></a>
                    </li> 
                    <li><a href="poster_presentation.php">Poster Presentation<span class="pull-right"><i class="fa fa-image"></i></span></a>
                    </li>
                    <li><a href="schedule.php">Event Schedule<span class="pull-right"><i class="fa fa-calendar"></i></span></a>
                    </li>
                  </ul>
                </li>
                <li><a href="#"><span class="pull-left"><i class="fa fa-sitemap"></i></span>&nbsp;&nbsp;Organisation</a>
                  <ul class="dropdown">
                    <li><a href="committee.php?ref_id=1"> Organising Committee<span class="pull-right"><i class="fa fa-group"></i></span></a>
                    </li>
                    
                    <li><a href="committee.php?ref_id=2"> Technical Program Committee<span class="pull-right"><i class="fa fa-group"></i></span></a>
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
                <li><a href="about.php" class="active"><span class="pull-left"><i class="fa fa-info-circle"></i></span>&nbsp;&nbsp;About</a>
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
            <a href="#"><span class="pull-left"><i class="fa fa-group"></i></span>&nbsp;&nbsp;Authors</a>
            <ul class="dropdown">
              <li><a href="call_for.php">Call for Contributions <span class="pull-right"><i class="fa fa-bullhorn"></i></span></a>
              </li>
              <li><a href="instructions.php">Presentation <br/> Instructions <span class="pull-right"><i class="fa fa-info-circle"></i></span></a>
              </li>
              <li><a href="submission.php">Paper Submission <span class="pull-right"><i class="fa fa-upload"></i></span></a>
              </li>
              <li><a href="dates.php">Important Dates<span class="pull-right"><i class="fa fa-calendar"></i></span></a>
              </li>
            </ul>
          </li>
          <li><a href="#"><span class="pull-left"><i class="fa fa-calendar-check-o"></i></span>&nbsp;&nbsp;Programs</a>
            <ul class="dropdown">
              <li><a href="keynotes.php">Keynotes &amp; Awards Presentation<span class="pull-right"><i class="fa fa-microphone"></i></span></a>
              </li>
              <li><a href="paper_presentation.php">Paper Presentation<span class="pull-right"><i class="fa fa-newspaper-o"></i></span></a>
              </li> 
              <li><a href="poster_presentation.php">Poster Presentation<span class="pull-right"><i class="fa fa-image"></i></span></a>
              </li>
              <li><a href="schedule.php">Event Schedule<span class="pull-right"><i class="fa fa-calendar"></i></span></a>
              </li>
            </ul>
          </li>
          <li><a href="#"><span class="pull-left"><i class="fa fa-sitemap"></i></span>&nbsp;&nbsp;Organisation</a>
            <ul class="dropdown">
              <li><a href="committee.php?ref_id=1"> Organising Committee<span class="pull-right"><i class="fa fa-group"></i></span></a>
              </li>
              
              <li><a href="committee.php?ref_id=2"> Technical Program Committee<span class="pull-right"><i class="fa fa-group"></i></span></a>
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
          <li><a href="about.php" class="active"><span class="pull-left"><i class="fa fa-info-circle"></i></span>&nbsp;&nbsp;About</a>
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
            <h2>About Us</h2>
            <p>We Are WCE Research Symposium</p>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="index.php">Home</a></li>
              <li>About Us</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->
    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="page-content">
          <div class="row" style="text-align:justify;">

            <div class="col-md-12">

              <!-- Classic Heading -->
              <h4 class="classic-title"><span>Welcome To WCE Research Symposium on Comoputing 2018</span></h4>

              <!-- Some Text -->
              
              <!-- Nav Tabs -->
              <ul class="nav nav-tabs">
                <li class="active"><a href="#tab1" data-toggle="tab"><i class="icon-award-1"></i>About Research Symposium</a></li>
                <li><a href="#tab2" data-toggle="tab"><i class="icon-beaker"></i>About Walchand College of Engineering, Sangli</a></li>
                <li><a href="#tab3" data-toggle="tab"><i class="icon-droplet"></i>About the Departments</a></li>
              </ul>

              <!-- Tab Panels -->
              <div class="tab-content">
                <!-- Tab Content 1 -->
                <div class="tab-pane fade in active" id="tab1">
                  <p><p>At Walchand College of Engineering (WCE) Sangli, Computer Science and Engineering (CSE) Department as well as Information Technology (IT) Department are active in promoting research in advances in CSE/ IT under Association for Computing Machinery (ACM) India. This has resulted into instituting WCE-ACM chapter. First and second National Research Symposium was organized during Dec 19-20, 2016 and Dec 15-16, 2017 respectively at WCE and it received excellent response from researchers.</p><br>
                  <p> In this series, the WCE-ACM chapter is delighted to announce its third National Research Symposium on Computing (RSC 2018) in December 2018 under the technical support from ACM. This symposium has been considered as a co-located activity of International Conference on Computing in Engineering and Technology (ICCET 2019). The WCE-ACM chapter welcomes research paper submissions from faculty, doctoral students, research scholars and industry experts who are actively working in the area of Computer Science and Engineering and allied branches.</p><br>
                  <p>The RSC 2018 will provide a unique opportunity to the researchers to present their research work and will enable them to interact with renowned and experienced researchers in all areas of Computer Science and Engineering as well as Information Technology. The symposium will also provide to its participants, independent and constructive feedback about their completed/planned research work for its further improvements. The research symposium aims at establishing and promoting social and intellectual interactions among students and researchers from academia and industry. The symposium will be accompanied by prominent experts who will deliver the keynote address and will actively participate in critical discussions at the symposium. The selected papers will be forwarded for its publication either in Springer's AISC series or IJCSE.</p><br>
                </p>
              </div>
              <!-- Tab Content 2 -->
              <div class="tab-pane fade" id="tab2">
                <p> The college is situated midway of Sangli Miraj road. Initially, college made a modest beginning with the name as "New Engineering College" in the year 1947. As a part of the arrangements, mainly funded by Seth Walchand Hirachand Memorial Trust (WHMT) and the Government, the College has been renamed as Walchand College of Engineering (WCE) since year 1955. The College became autonomous in the year 2007. As a part of strategic planning, research and development activities are being further strengthened. The college has been recognized for running Ph.D. programme under Quality Improvement Program (QIP) scheme by AICTE. Presently it has more than 2,800 students for six UG branches and ten PG branches together. WCE aims to produce capable graduate engineers with aptitude for research and qualities of leadership. The has been selected and funded for implementation of Technical Education Quality Improvement Programme (TEQIP). Jabalpur Engineering College (JEC), Jabalpur is a government institute, and is participating in the organization of RSC-2018. </p>
              </div>
              <!-- Tab Content 1 -->
              <div class="tab-pane fade" id="tab3">
              The CSE and IT Departments have been established in the year 1986 and 2001 respectively. Course contents of these programmes are up-to-date and are in-line with the current trends of the Computer and IT Industry. These programmes attract meritorious students every year at the entry level for both UG and PG level. Ph.D. programme under (QIP) in the department has boosted the research culture further. These departments also provide research guidance to Ph.D. students of Shivaji University. At present, around 20 Ph.D. (CSE) students are successfully progressing their research assignments. WCE Association for Computing Machinery (ACM) Student Chapter has been chartered to promote research in CSE/IT and related fields. </p>
            </div>
          </div>


        </div>

        

      </div>

      <!-- Divider -->
      <div class="hr1" style="margin-bottom:50px;"></div>

    </div>
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