<?php 

require_once("../include/db_config.php");
require_once("../include/acm_membership_config.php");
if(!$acm->CheckLogin())
{
    header("Location: ../login.php?loginerror=true");
}

if(!$acm->isUserInRole("wceauthor"))
{
  $role = $acm->UserRole();
  header("Location: ../".$role."/index.php");
}

$status = $acm->UserStatus();
$userid = $acm->User_Id();
?>

<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>

  <!-- Basic -->
  <title>WCE Research Symposium on Computing | <?php echo $acm->UserFullName();?></title>

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

  <link rel="stylesheet" href="css/custom.css" type="text/css" media="screen">
  <link rel="stylesheet" href="css/nprogress.css" type="text/css" media="screen">
  <!-- Slicknav -->
  <link rel="stylesheet" type="text/css" href="../css/slicknav.css" media="screen">

  <!-- Margo CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen">

  <!-- Responsive CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="../css/responsive.css" media="screen">

  <!-- Css3 Transitions Styles  -->
  <link rel="stylesheet" type="text/css" href="../css/animate.css" media="screen">
    <link href="css/select2.min.css" rel="stylesheet">

  <!-- Color CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="../css/colors/blue.css" title="blue" media="screen" />

  <link href="css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link href="css/buttons.bootstrap.min.css" rel="stylesheet">
  <link href="css/fixedHeader.bootstrap.min.css" rel="stylesheet">
  <link href="css/responsive.bootstrap.min.css" rel="stylesheet">
  <link href="css/scroller.bootstrap.min.css" rel="stylesheet">


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
  <link rel="apple-touch-icon" sizes="57x57" href="../favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="../favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="../favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="../favicon/apple-icon-76x76.png"> 
  <link rel="apple-touch-icon" sizes="114x114" href="../favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="../favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="../favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="../favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="../favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="../favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
  <link rel="manifest" href="../favicon/manifest.json">  
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

<body style="background: url('../images/patterns/5.png') repeat;">

  <!-- Full Body Container -->
  <div id="container">


    <!-- Start Header Section -->
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
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" >
            <ul class="nav navbar-nav" >
              <li>
                <a href="../index.php"><span class="pull-left"><i class="fa fa-home"></i></span>&nbsp;&nbsp;Home</a>
              </li>
              <li>
                <a href="#"><span class="pull-left"><i class="fa fa-group"></i></span>&nbsp;&nbsp;Authors</a>
                <ul class="dropdown">
                  <li><a href="../call_for.php">Call for Contributions <span class="pull-right"><i class="fa fa-bullhorn"></i></span></a>
                  </li>
                  <li><a href="../instructions.php">Presentation <br/> Instructions <span class="pull-right"><i class="fa fa-info-circle"></i></span></a>
                  </li>
                  <li><a href="../submission.php">Paper Submission <span class="pull-right"><i class="fa fa-upload"></i></span></a>
                  </li>
                  <li><a href="../dates.php">Important Dates<span class="pull-right"><i class="fa fa-calendar"></i></span></a>
                  </li>
                </ul>
              </li>
              <li><a href="#"><span class="pull-left"><i class="fa fa-calendar-check-o"></i></span>&nbsp;&nbsp;Programs</a>
                <ul class="dropdown">
                  <li><a href="../keynotes.php">Keynotes &amp; Awards Presentation<span class="pull-right"><i class="fa fa-microphone"></i></span></a>
                  </li>
                   <li><a href="../paper_presentation.php">Paper Presentation<span class="pull-right"><i class="fa fa-newspaper-o"></i></span></a>
                  </li> 
                  <li><a href="../poster_presentation.php">Poster Presentation<span class="pull-right"><i class="fa fa-image"></i></span></a>
                  </li>
                  <li><a href="../schedule.php">Event Schedule<span class="pull-right"><i class="fa fa-calendar"></i></span></a>
                  </li>
                </ul>
             </li>
              <li><a href="#"><span class="pull-left"><i class="fa fa-sitemap"></i></span>&nbsp;&nbsp;Organisation</a>
                <ul class="dropdown">
                  <li><a href="../committee.php?ref_id=1"> Organising Committee<span class="pull-right"><i class="fa fa-group"></i></span></a>
                  </li>
             
                  <li><a href="../committee.php?ref_id=2"> Technical Program Committee<span class="pull-right"><i class="fa fa-group"></i></span></a>
                  </li>
             
                </ul>
             </li>
              <li><a href="#"><span class="pull-left"><i class="fa fa-info-circle"></i></span>&nbsp;&nbsp;Local Information</a>
                <ul class="dropdown">
                  <li><a href="../venue.php">Conference Venue<span class="pull-right"><i class="fa fa-location-arrow"></i></span></a>
                  </li>
             
                  <li><a href="../location.php">Conference Location<span class="pull-right"><i class="fa fa-map-marker"></i></span></a>
                  </li>
             

                  <li><a href="../accessing.php">Accessing Sangli<span class="pull-right"><i class="fa fa-plane"></i></span></a>
                  </li>
                </ul>
             </li>

             <li><a href="../gallery.php"><span class="pull-left"><i class="fa fa-image"></i></span>&nbsp;&nbsp;Gallery</a>
              </li>
             <li><a href="../about.php"><span class="pull-left"><i class="fa fa-info-circle"></i></span>&nbsp;&nbsp;About</a>
              </li>
              <li><a href="../contact.php"><span class="pull-left"><i class="fa fa-envelope"></i></span>&nbsp;&nbsp;Contact</a>
              </li>
                                   <?php if($acm->CheckLogin()){ 
              
                ?>
              <li><a href="#" class="active"><span class="pull-left"><i class="fa fa-user"></i></span>&nbsp;&nbsp;<?php echo $acm->UserFullName(); ?></a>
                <ul class="dropdown">
                  <li><a href="../<?php echo $acm->UserRole();?>/index.php">Dashboard <span class="pull-right"><i class="fa fa-dashboard"></i></span></a>
                  </li>
                  <li><a href="../<?php echo $acm->UserRole();?>/settings.php">Settings <span class="pull-right"><i class="fa fa-gears"></i></span></a>
                  </li>
                  <li><a href="../login.php?logout=true">Logout <span class="pull-right"><i class="fa fa-sign-out"></i></span></a>
                  </li>
                  </ul>
              </li>
              <?php } else{ ?>
              <li><a href="../login.php" class="active"><span class="pull-left"><i class="fa fa-sign-in"></i></span>&nbsp;&nbsp;Login</a>
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
                <a href="../index.php"><span class="pull-left"><i class="fa fa-home"></i></span>&nbsp;&nbsp;Home</a>
              </li>
              <li>
                <a href="#"><span class="pull-left"><i class="fa fa-group"></i></span>&nbsp;&nbsp;Authors</a>
                <ul class="dropdown">
                  <li><a href="../call_for.php">Call for Contributions <span class="pull-right"><i class="fa fa-bullhorn"></i></span></a>
                  </li>
                  <li><a href="../instructions.php">Presentation <br/> Instructions <span class="pull-right"><i class="fa fa-info-circle"></i></span></a>
                  </li>
                  <li><a href="../submission.php">Paper Submission <span class="pull-right"><i class="fa fa-upload"></i></span></a>
                  </li>
                  <li><a href="../dates.php">Important Dates<span class="pull-right"><i class="fa fa-calendar"></i></span></a>
                  </li>
                </ul>
              </li>
              <li><a href="#"><span class="pull-left"><i class="fa fa-calendar-check-o"></i></span>&nbsp;&nbsp;Programs</a>
                <ul class="dropdown">
                  <li><a href="../keynotes.php">Keynotes &amp; Awards Presentation<span class="pull-right"><i class="fa fa-microphone"></i></span></a>
                  </li>
                   <li><a href="../paper_presentation.php">Paper Presentation<span class="pull-right"><i class="fa fa-newspaper-o"></i></span></a>
                  </li> 
                  <li><a href="../poster_presentation.php">Poster Presentation<span class="pull-right"><i class="fa fa-image"></i></span></a>
                  </li>
                  <li><a href="../schedule.php">Event Schedule<span class="pull-right"><i class="fa fa-calendar"></i></span></a>
                  </li>
                </ul>
             </li>
              <li><a href="#"><span class="pull-left"><i class="fa fa-sitemap"></i></span>&nbsp;&nbsp;Organisation</a>
                <ul class="dropdown">
                  <li><a href="../committee.php?ref_id=1"> Organising Committee<span class="pull-right"><i class="fa fa-group"></i></span></a>
                  </li>
             
                  <li><a href="../committee.php?ref_id=2"> Technical Program Committee<span class="pull-right"><i class="fa fa-group"></i></span></a>
                  </li>
             
                </ul>
             </li>
              <li><a href="#"><span class="pull-left"><i class="fa fa-info-circle"></i></span>&nbsp;&nbsp;Local Information</a>
                <ul class="dropdown">
                  <li><a href="../venue.php">Conference Venue<span class="pull-right"><i class="fa fa-location-arrow"></i></span></a>
                  </li>
             
                  <li><a href="../location.php">Conference Location<span class="pull-right"><i class="fa fa-map-marker"></i></span></a>
                  </li>
             

                  <li><a href="../accessing.php">Accessing Sangli<span class="pull-right"><i class="fa fa-plane"></i></span></a>
                  </li>
                </ul>
             </li>

             <li><a href="../gallery.php"><span class="pull-left"><i class="fa fa-image"></i></span>&nbsp;&nbsp;Gallery</a>
              </li>
             <li><a href="../about.php" ><span class="pull-left"><i class="fa fa-info-circle"></i></span>&nbsp;&nbsp;About</a>
              </li>
              <li><a href="../contact.php"><span class="pull-left"><i class="fa fa-envelope"></i></span>&nbsp;&nbsp;Contact</a>
              </li>
                                   <?php if($acm->CheckLogin()){ 
              
                ?>
              <li><a href="#" class="active"><span class="pull-left"><i class="fa fa-user"></i></span>&nbsp;&nbsp;<?php echo $acm->UserFullName(); ?></a>
                <ul class="dropdown">
                  <li><a href="../<?php echo $acm->UserRole();?>/index.php">Dashboard <span class="pull-right"><i class="fa fa-dashboard"></i></span></a>
                  </li>
                  <li><a href="../<?php echo $acm->UserRole();?>/settings.php">Settings <span class="pull-right"><i class="fa fa-gears"></i></span></a>
                  </li>
                  <li><a href="../login.php?logout=true">Logout <span class="pull-right"><i class="fa fa-sign-out"></i></span></a>
                  </li>
                  </ul>
              </li>
              <?php } else{ ?>
              <li><a href="../login.php" class="active"><span class="pull-left"><i class="fa fa-sign-in"></i></span>&nbsp;&nbsp;Login</a>
              </li>
              <?php } ?>

            
        </ul>
        <!-- Mobile Menu End -->

      </div>
      <!-- End Header Logo & Naviagtion -->

    </header>
    <!-- End Header Section -->



    <!-- Start Page Banner -->
        <div class="page-banner" style="padding:40px 0;margin-top:13%; background: url(../images/slide-02-bg.jpg) center #f9f9f9;">
          <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>My Account</h2>
            <p>Manage Your Account Settings</p>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="../index.php">Home</a></li>
              <li>My Account</li>
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
                  <a href="index.php" >Dashboard<span class="pull-right"><i class="fa fa-dashboard"></i> </span></a>
                </li>
                <li>
                  <a href="register.php">My Registration<span class="pull-right"><i class="fa fa-edit"></i> </span></a>
                </li>

                <li>
                  <a href="copyright.php">Copyright Form for Paper<span class="pull-right"><i class="fa fa-upload"></i> </span></a>
                </li>


                <li>
                  <a href="submission.php">Submission of Camera-Ready Paper<span class="pull-right"><i class="fa fa-upload"></i> </span></a>
                </li>


                <li>
                <a href="../login.php?logout=true">Logout <span class="pull-right"><i class="fa fa-sign-out"></i></span></a>
                </li>
              </ul>
            </div>

          </div>
          <!--End sidebar-->
          <div class="col-md-9 page-content">
           <h4 class="classic-title"><span>Dashboard</span></h4>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>My Profile</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                     </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form class="form-horizontal form-label-left" novalidate="">   
                        <?php 

if(isset($_POST['save']))
{
$f_name = mysqli_real_escape_string($conn, $_POST['f_name']);
$l_name = mysqli_real_escape_string($conn, $_POST['l_name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$contact = mysqli_real_escape_string($conn, $_POST['phone']);
$institute = mysqli_real_escape_string($conn, $_POST['institute']);
$department = mysqli_real_escape_string($conn, $_POST['department']); 
$course = mysqli_real_escape_string($conn, $_POST['course']);
$city =  mysqli_real_escape_string($conn, $_POST['city']);


// attempt insert query execution
if($status<2)
{
  $status = 2;
}
$sql = "UPDATE users SET f_name='$f_name',l_name='$l_name',email='$email',gender='$gender',contact='$contact',institute_id='$institute',department_id='$department',course_id='$course',city_id='$city',status=$status where user_id='$userid'";
if(mysqli_query($conn, $sql)){
    echo "<div class='row'><div class='col-sm-12'><div class='alert alert-success alert-dismissible'><button class='close' aria-hidden='true' type='button' data-dismiss='alert'>×</button><i class='fa fa-icon-check'></i> Profile Information Updated Successfully!</div></div>";
} else{
    echo "<div class='row'><div class='col-sm-12'><div class='alert alert-danger alert-dismissible'><button class='close' aria-hidden='true' type='button' data-dismiss='alert'>×</button><i class='fa fa-icon-check'></i> Something Went Wrong! Please Try Again!</div></div>";
}
}

else{
?>
                     <div class="alert alert-info alert-dismissible fade in" role="alert">
                    <strong>Please fill all the mandatory fields to complete registration procedure.</strong>
                    </div>

   <?php }

if(isset($_GET['profileerror']))
{
  if($_GET['profileerror']=="true")
  {
    ?>
    <div class="row">
            <div class="col-sm-12">
              <div class="alert alert-danger alert-dismissible">
                <button class="close" aria-hidden="true" type="button" data-dismiss="alert">×</button>
                <strong>You must fill all the profile information first!</strong>
              </div>
                </div>
            </div>
    <?php
  }
} 

$acm->UpdateSessionVars();

   ?>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" type="text" readonly="readonly" value="<?php echo $acm->UserFullName();?>">
                        </div>
                      <div class="alert">please put something here</div></div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="email" name="email" class="form-control col-md-7 col-xs-12" type="email" readonly="readonly" value="<?php echo $acm->UserEmail();?>">
                        </div>
                      <div class="alert">please put something here</div></div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Contact <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="telephone" name="phone" data-validate-length-range="10" class="form-control col-md-7 col-xs-12" type="tel" maxlength="10" readonly="readonly" value="<?php echo $acm->UserContact();?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="name" class="form-control col-md-7 col-xs-12" name="gender" type="text" readonly="readonly" value="<?php echo $acm->UserGender();?>">
                         </div>
                      </div>
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Institute Name<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="name" class="form-control col-md-7 col-xs-12" name="institute" type="text" readonly="readonly" value="<?php echo $acm->UserInstitute();?>">
                         </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Department Name<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="name" class="form-control col-md-7 col-xs-12" name="department" type="text" readonly="readonly" value="<?php echo $acm->UserDepartment();?>">
                         </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Qualification<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="name" class="form-control col-md-7 col-xs-12" name="department" type="text" readonly="readonly" value="<?php echo $acm->UserCourse();?>">
                         </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select City <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="name" class="form-control col-md-7 col-xs-12" name="city" type="text" readonly="readonly" value="<?php echo $acm->UserCity();?>">
                         </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <a href="edit.php" class="btn btn-success"><i class="fa fa-edit"></i> Edit</a>
                          <a href="#" class="btn btn-primary"><i class="fa fa-times"></i> Cancel</a>                       
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                               <div class="x_panel">
                  <div class="x_title">
                    <h2>My Papers</h2>

                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                     </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                   <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Sr.No.</th>
                          <th>Paper ID</th>
                          <th>Paper Title</th>
                        </tr>
                      </thead>


                      <tbody>
                       <?php
                         $count = 1;
                         $sql = "select p.paper_id,p.paper_name from paper p inner join team t inner join users u on p.paper_id = t.paper_id AND t.user_id = u.user_id where u.user_id = '$userid'";
                         $result = mysqli_query($conn, $sql);
                         if(mysqli_num_rows($result)>0){
                         while($row = mysqli_fetch_assoc($result))
                          {
                       ?>
                        <tr>
                          <td><?php echo $count; ?></td>
                          <td><?php echo $row['paper_id']; ?></td>
                          <td><?php echo $row['paper_name']; ?></td>
                        </tr>
                      <?php  
                      $count++;
                        }
                       }
                      ?>
                      </tbody>
                    </table>
                 </div>
                </div>
              </div>
            <!-- Divider -->
            <div class="hr5" style="margin-top:30px; margin-bottom:45px;"></div>

          </div>
        </div>
      </div>
    </div>
    
    <!-- End content -->

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
                    <img alt="<?php echo $row['link_name'];?>" src="../<?php echo $row['image_link'];?>">
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
              <h4><img src="images/footer-acm.png" class="img-responsive" alt="WCE Research Symposium on Computing" /></h4>
              <p>WCE Research Symposium on Computing 2016 is the 1st National Level event organized by Department of Computer Science &amp; Engineering, Walchand College of Engineering, Sangli.</p>
              <ul>
                <li><span>Phone Number:</span> <?php echo $acm->SiteContact(); ?></li>
                <li><span>Email:</span> <?php echo $acm->SiteEmail(); ?></li>
                <li><span>Website:</span> http://rs.walchandsangli.ac.in</li>
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
              <p>&copy; 2016 WCE Research Symposium on Computing - All Rights Reserved <br/>
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

    </footer>
    <!-- End Footer -->

  </div>
  <!-- End Container -->

  <!-- Go To Top Link -->
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
  
  <script type="text/javascript" src="../js/script.js"></script>
      <!-- jQuery -->
    <script src="js/fastclick.js"></script>
    <!-- NProgress -->
    <script src="js/nprogress.js"></script>
    <!-- validator -->
    <script src="js/validator.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="js/custom.min.js"></script>

    <script src="js/select2.full.min.js"></script>

    <script src="js/parsley.min.js"></script>

    <!-- validator -->
    <script>
      // initialize the validator function
      validator.message.date = 'not a real date';

      // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
      $('form')
        .on('blur', 'input[required], input.optional, select.required', validator.checkField)
        .on('change', 'select.required', validator.checkField)
        .on('keypress', 'input[required][pattern]', validator.keypress);

      $('.multi.required').on('keyup blur', 'input', function() {
        validator.checkField.apply($(this).siblings().last()[0]);
      });

      $('form').submit(function(e) {
        e.preventDefault();
        var submit = true;

        // evaluate the form using generic validaing
        if (!validator.checkAll($(this))) {
          submit = false;
        }

        if (submit)
          this.submit();

        return false;
      });
    </script>
     <script>
      $(document).ready(function() {
        $(".select2_single").select2({
          placeholder: "Select Your Option",
          allowClear: true
        });
        $(".select2_group").select2({});
        $(".select2_multiple").select2({
          maximumSelectionLength: 4,
          placeholder: "With Max Selection limit 4",
          allowClear: true
        });
      });
    </script>
    <!-- /validator -->
  <script type="text/javascript" src="../js/script.js"></script>
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
  xmlhttp.open("GET","../livesearch.php?q="+str,true);
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
  xmlhttp.open("GET","../subscribe.php?email="+email,true);
  xmlhttp.send();
  }
  }
  </script>
</body>

</html>