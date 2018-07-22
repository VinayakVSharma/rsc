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
  <title>WCE ACM Student Chapter | Settings</title>

  <!-- Define Charset -->
  <meta charset="utf-8">

  <!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Page Description and Author -->
  <meta name="description" content="WCE ACM Student Chapter is a recently formed ACM student chapter in Walchand College of Engineering, Sangli. The chapter aims to conduct various technical & non-technical activities for overall development of the students of the institute. The chapter has received official authorization from the WCE India Council to operate at a local level." />
  <meta name="keywords" content="WCE ACM Student Chapter, ACM Student Chapter, Walchand College of Engineering Sangli, CSE Department, WCE Sangli, WCE ACM, Student Activity" />

  <meta name="author" content="Harshal Khairnar - CBA Solutions" />

  <!-- Bootstrap CSS  -->
  <link rel="stylesheet" href="../asset/css/bootstrap.min.css" type="text/css" media="screen">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css" media="screen">

  <!-- Slicknav -->
  <link rel="stylesheet" type="text/css" href="../css/slicknav.css" media="screen">

  <!-- Margo CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen">

  <!-- Responsive CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="../css/responsive.css" media="screen">

  <!-- Css3 Transitions Styles  -->
  <link rel="stylesheet" type="text/css" href="../css/animate.css" media="screen">

  <!-- Color CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="../css/colors/beige.css" title="beige" media="screen" />


  <!-- Margo JS  -->
  <script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="../js/jquery.migrate.js"></script>
  <script type="text/javascript" src="../js/modernizrr.js"></script>
  <script type="text/javascript" src="../asset/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/jquery.fitvids.js"></script>
  <script type="text/javascript" src="../js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="../js/nivo-lightbox.min.js"></script>
  <script type="text/javascript" src="../js/jquery.isotope.min.js"></script>
  <script type="text/javascript" src="../js/jquery.appear.js"></script>
  <script type="text/javascript" src="../js/count-to.js"></script>
  <script type="text/javascript" src="../js/jquery.textillate.js"></script>
  <script type="text/javascript" src="../js/jquery.lettering.js"></script>
  <script type="text/javascript" src="../js/jquery.easypiechart.min.js"></script>
  <script type="text/javascript" src="../js/jquery.nicescroll.min.js"></script>
  <script type="text/javascript" src="../js/jquery.parallax.js"></script>
  <script type="text/javascript" src="../js/jquery.slicknav.js"></script>

  <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>

<body onload="setActiveStyleSheet('beige'); return false;">

  <!-- Full Body Container -->
  <div id="container">


    <!-- Start Header Section -->
    <div class="hidden-header"></div>
    <header class="clearfix">

      <!-- Start Top Bar -->
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <!-- Start Contact Info -->
              <ul class="contact-details">
                <li><a href="#"><i class="fa fa-map-marker"></i> Walchand College of Engineering, Sangli, MH-IN</a>
                </li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> info@wce.acm.org</a>
                </li>
                <li><a href="#"><i class="fa fa-phone"></i> +91 94 03 575 065</a>
                </li>
              </ul>
              <!-- End Contact Info -->
            </div>
            <!-- .col-md-6 -->
            <div class="col-md-6">
              <!-- Start Social Links -->
              <ul class="social-list">
                <li>
                  <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a class="google itl-tooltip" data-placement="bottom" title="Google Plus" href="#"><i class="fa fa-google-plus"></i></a>
                </li>
                <li>
                  <a class="linkdin itl-tooltip" data-placement="bottom" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                </li>
                <li>
                  <a class="instgram itl-tooltip" data-placement="bottom" title="Instagram" href="#"><i class="fa fa-instagram"></i></a>
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
          <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            <a class="navbar-brand" href="../index.php">
              <img alt="WCE ACM Student Chapter" src="../images/acm.png" style="margin-top:-12px;">
            </a>
          </div>
          <div class="navbar-collapse collapse">
            <!-- Stat Search -->
            <div class="search-side">
              <a class="show-search"><i class="fa fa-search"></i></a>
              <div class="search-form">
                <form autocomplete="off" role="search" method="get" class="searchform" action="#">
                  <input type="text" value="" name="s" id="s" placeholder="Search the site...">
                </form>
              </div>
            </div>
            <!-- End Search -->
            <!-- Start Navigation List -->
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a href="../index.php"><span class="pull-left"><i class="fa fa-home"></i></span>&nbsp;&nbsp;Home</a>
                <ul class="dropdown">
                  <li><a href="../index.php">Home<span class="pull-right"><i class="fa fa-home"></i></span></a>
                  </li>
                  <li><a href="../index.php#vision">Our Vision<span class="pull-right"><i class="fa fa-eye"></i></span></a>
                  </li>
                  <li><a href="../index.php#whowe">Who We Are?<span class="pull-right"><i class="fa fa-question"></i></span></a>
                  </li>
                  <li><a href="../index.php#news">Latest News<span class="pull-right"><i class="fa fa-clock-o"></i></span></a>
                  </li>
                  <li><a href="../index.php#news">Testimonials<span class="pull-right"><i class="fa fa-comment"></i></span></a>
                  </li>
                  <li><a href="../index.php#clubs">Supporting Clubs<span class="pull-right"><i class="fa fa-group"></i></span></a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="../about.php"><span class="pull-left"><i class="fa fa-info-circle"></i></span>&nbsp;&nbsp;About Us</a>
                <ul class="dropdown">
                  <li><a href="../about.php">About <span class="pull-right"><i class="fa fa-info-circle"></i></span></a>
                  </li>
                  <li><a href="../board.php?ref_id=4">Main Board <span class="pull-right"><i class="fa fa-group"></i></span></a>
                  </li>
                  <li><a href="../board.php?ref_id=3">Third Year Members <span class="pull-right"><i class="fa fa-group"></i></span></a>
                  </li>
                  <li><a href="../board.php?ref_id=2">Second Year Members <span class="pull-right"><i class="fa fa-group"></i></span></a>
                  </li>
                  <li><a href="../alumni.php">Alumni <span class="pull-right"><i class="fa fa-group"></i></span></a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="../activity.php"><span class="pull-left"><i class="fa fa-pencil"></i></span>&nbsp;&nbsp;Activities</a>
               
                <ul class="dropdown">
                  <?PHP
        $sql = "select * from activity where status='1' order by activity_date desc limit 0,5";
        $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result))
               { ?>
             <li><a href="../activity_details.php?ref_id=<?php echo $row['activity_id']; ?>"><?php echo $row['activity_title']; ?><span class="pull-right"><i class="fa fa-pencil"></i></span></a>
                  </li>
             <?PHP } } ?>
                  <li><a href="../activity.php">View All Acitivities<span class="pull-right"><i class="fa fa-pencil"></i></span></a>
                  </li>


                </ul>
              </li>

              <li>
                <a href="../blog.php"><span class="pull-left"><i class="fa fa-edit"></i></span>&nbsp;&nbsp;Blog</a>
                <ul class="dropdown">
                 <?PHP
        $sql = "select * from post where status='1' order by post_date desc limit 0,5";
        $result = mysqli_query($conn, $sql);
              if(mysqli_num_rows($result)>0){
              while($row = mysqli_fetch_assoc($result))
           { ?>

           <li><a href="../post.php?ref_id=<?php echo $row['post_id']; ?>"><?php echo $row['post_title']; ?><span class="pull-right"><i class="fa fa-pencil"></i></span></a>
                  </li>
         
             <?PHP } } ?>
                  <li><a href="../blog.php">View All Posts<span class="pull-right"><i class="fa fa-pencil"></i></span></a>
                  </li>
                  
                </ul>
              </li>
              
              <li><a href="../gallery.php"><span class="pull-left"><i class="fa fa-picture-o"></i></span>&nbsp;&nbsp;Gallery</a>
              </li>
              <li><a href="../contact.php"><span class="pull-left"><i class="fa fa-envelope"></i></span>&nbsp;&nbsp;Contact</a>
              </li>
              <?php if($acm->CheckLogin()){ 
              
                ?>
              <li><a class="active" href="#"><span class="pull-left"><i class="fa fa-user"></i></span>&nbsp;&nbsp;<?php echo $acm->UserFullName(); ?></a>
                <ul class="dropdown">
                  <li><a  class="active" href="index.php">Dashboard <span class="pull-right"><i class="fa fa-dashboard"></i></span></a>
                  </li>
                  <li><a href="settings.php">Settings <span class="pull-right"><i class="fa fa-gears"></i></span></a>
                  </li>
                  <li><a href="../login.php?logout=true">Logout <span class="pull-right"><i class="fa fa-sign-out"></i></span></a>
                  </li>
                  </ul>
              </li>
              <?php } else{ ?>
              <li><a href="../login.php"><span class="pull-left"><i class="fa fa-sign-in"></i></span>&nbsp;&nbsp;Login</a>
              </li>
              <?php } ?>
            </ul>
            <!-- End Navigation List -->
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="wpb-mobile-menu">
              <li>
                <a href="../index.php"><span class="pull-left"><i class="fa fa-home"></i></span>&nbsp;&nbsp;Home</a>
                <ul class="dropdown">
                  <li><a href="../index.php">Home<span class="pull-right"><i class="fa fa-home"></i></span></a>
                  </li>
                  <li><a href="../index.php#vision">Our Vision<span class="pull-right"><i class="fa fa-eye"></i></span></a>
                  </li>
                  <li><a href="../index.php#whowe">Who We Are?<span class="pull-right"><i class="fa fa-question"></i></span></a>
                  </li>
                  <li><a href="../index.php#news">Latest News<span class="pull-right"><i class="fa fa-clock-o"></i></span></a>
                  </li>
                  <li><a href="../index.php#news">Testimonials<span class="pull-right"><i class="fa fa-comment"></i></span></a>
                  </li>
                  <li><a href="../index.php#clubs">Supporting Clubs<span class="pull-right"><i class="fa fa-group"></i></span></a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="../about.php"><span class="pull-left"><i class="fa fa-info-circle"></i></span>&nbsp;&nbsp;About Us</a>
                <ul class="dropdown">
                  <li><a href="../about.php">About <span class="pull-right"><i class="fa fa-info-circle"></i></span></a>
                  </li>
                  <li><a href="../board.php?ref_id=4">Main Board <span class="pull-right"><i class="fa fa-group"></i></span></a>
                  </li>
                  <li><a href="../board.php?ref_id=3">Third Year Members <span class="pull-right"><i class="fa fa-group"></i></span></a>
                  </li>
                  <li><a href="../board.php?ref_id=2">Second Year Members <span class="pull-right"><i class="fa fa-group"></i></span></a>
                  </li>
                  <li><a href="../alumni.php">Alumni <span class="pull-right"><i class="fa fa-group"></i></span></a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="../activity.php"><span class="pull-left"><i class="fa fa-pencil"></i></span>&nbsp;&nbsp;Activities</a>
               
                <ul class="dropdown">
                  <?PHP
        $sql = "select * from activity where status='1' order by activity_date desc limit 0,5";
        $result = mysqli_query($conn, $sql);
              if(mysqli_num_rows($result)>0){
                       while($row = mysqli_fetch_assoc($result))
            { ?>
             <li><a href="../activity_details.php?ref_id=<?php echo $row['activity_id']; ?>"><?php echo $row['activity_title']; ?><span class="pull-right"><i class="fa fa-pencil"></i></span></a>
                  </li>
              <?PHP } } ?>
                  <li><a href="../activity.php">View All Acitivities<span class="pull-right"><i class="fa fa-pencil"></i></span></a>
                  </li>


                </ul>
              </li>

              <li>
                <a href="../blog.php"><span class="pull-left"><i class="fa fa-edit"></i></span>&nbsp;&nbsp;Blog</a>
                <ul class="dropdown">
                 <?PHP
        $sql = "select * from post where status='1' order by post_date desc limit 0,5";
        $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0){
              while($row = mysqli_fetch_assoc($result))
          { ?>

           <li><a href="../post.php?ref_id=<?php echo $row['post_id']; ?>"><?php echo $row['post_title']; ?><span class="pull-right"><i class="fa fa-pencil"></i></span></a>
                  </li>
         
             <?PHP } } ?>
                  <li><a href="../blog.php">View All Posts<span class="pull-right"><i class="fa fa-pencil"></i></span></a>
                  </li>
                  
                </ul>
              </li>
              
              <li><a href="../gallery.php"><span class="pull-left"><i class="fa fa-picture-o"></i></span>&nbsp;&nbsp;Gallery</a>
              </li>
              <li><a href="../contact.php"><span class="pull-left"><i class="fa fa-envelope"></i></span>&nbsp;&nbsp;Contact</a>
              </li>
              <?php if($acm->CheckLogin()){ 
              
                ?>
              <li><a class="active" href="index.php"><span class="pull-left"><i class="fa fa-user"></i></span>&nbsp;&nbsp;<?php echo $acm->UserFullName(); ?></a>
                <ul class="dropdown">
                  <li><a class="active" href="index.php">Dashboard <span class="pull-right"><i class="fa fa-dashboard"></i></span></a>
                  </li>
                  <li><a href="settings.php">Settings <span class="pull-right"><i class="fa fa-gears"></i></span></a>
                  </li>
                  <li><a href="login.php?logout=true">Logout <span class="pull-right"><i class="fa fa-sign-out"></i></span></a>
                  </li>
                  </ul>
              </li>
              <?php } else{ ?>
              <li><a href="../login.php"><span class="pull-left"><i class="fa fa-sign-in"></i></span>&nbsp;&nbsp;Login</a>
              </li>
              <?php } ?>
        </ul>
        <!-- Mobile Menu End -->

      </div>
      <!-- End Header Logo & Naviagtion -->

    </header>
    <!-- End Header Section -->

    <!-- End Header -->


    <!-- Start Page Banner -->
     <div class="page-banner" style="padding:40px 0; background: url(../images/slide-02-bg.jpg) center #f9f9f9;">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>My Account</h2>
            <p>Manage Your Account Settings</p>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="../index.php">Home</a></li>
              <li><a href="index.php">My Account</a></li>
              <li>Settings</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->


    <!-- Start Content -->
   <div id="content">
      <div class="container">
        <div class="row blog-page">


          <!--Sidebar-->
          <div class="col-md-3 sidebar left-sidebar">
          <!-- Categories Widget -->
            <div class="widget widget-categories">
              <h4 class="classic-title"><span>Control Panel</span></h4>

              <ul>
                <li  class="active">
                  <a href="index.php">Dashboard<span class="pull-right"><i class="fa fa-dashboard"></i> </span></a>
                </li>
                <li>
                  <a href="addPost.php">Add New Post<span class="pull-right"><i class="fa fa-edit"></i> </span></a>
                </li>
                <li>
                  <a href="myPost.php">My Posts<span class="pull-right"><i class="fa fa-list-alt"></i> </span></a>
                </li>
                <li>
                  <a href="settings.php">Settings<span class="pull-right"><i class="fa fa-gears"></i> </span></a>
                </li>
              </ul>
            </div>

          </div>
          <!--End sidebar-->
          <div class="col-md-9 page-content">
           <h4 class="classic-title"><span>Account Settings</span></h4>
 <p>THis is random text</p>
            <!-- Divider -->
            <div class="hr5" style="margin-top:30px; margin-bottom:45px;"></div>

          </div>
        </div>
      </div>
    </div>
    <!-- End content -->



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
              <p>Subscribe to our Newsletter to stay up to date about technology and get latest news about WCE ACM Student !</p>
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
                  <a href="activity.php">Our Activities </a>
                </li>

                <li>
                  <a href="blog.php">Our Blog </a>
                </li>

                <li>
                  <a href="contact.php">Contact Us </a>
                </li>
                <li>
                <a href="login.php">Login</a>
                </li>
                <li>
                <a href="faq.php">FAQs</a>
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
              <h4><img src="../images/footer-acm.png" class="img-responsive" alt="WCE ACM Student Chapter" /></h4>
              <p>At WCE ACM Student Chapter we are dedicated for the overall development of our members and devlopment of the Computing Community and Society.</p>
              <ul>
                <li><span>Phone Number:</span> +91 94 03 575 065</li>
                <li><span>Email:</span> info@wce.acm.org</li>
                <li><span>Website:</span> wce.acm.org</li>
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
              <p>&copy; 2016 WCE ACM - All Rights Reserved <a href="http://cbainc.in">CBA Solutions</a> </p>
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

  <!-- Style Switcher -->
  <div class="switcher-box">
    <a class="open-switcher show-switcher"><i class="fa fa-share-alt fa-2x"></i></a>
    <h4>Share</h4>
    <span>Share on Facebook</span>
   
    <span>Share on Twitter</span>
    <span>Share on Google+</span>
    <span>Share on LinkedIn</span>
    <span>Share on Instagram</span>

  </div>

  <script type="text/javascript" src="../js/script.js"></script>
  <script>
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
  xmlhttp.open("GET","../subscribe.php?email="+email,true);
  xmlhttp.send();
  }
  }
  </script>
</body>

</html>