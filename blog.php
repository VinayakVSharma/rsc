
<?php 

require_once("./include/db_config.php");
require_once("./include/acm_membership_config.php");
if(isset($_GET['ref_id']))
{
    $pno = $_GET['ref_id'];
}
else
{
  $pno=1;
}
$start = ($pno-1)*5;

$sql = "select u.user_id,u.f_name,u.l_name,p.post_id,p.post_title,p.post_description,p.post_content,p.post_date,p.author_id,p.status,p.category_id,p.view_count,p.image_status,p.image_link,c.category_name from post p inner join users u inner join post_category c on p.author_id = u.user_id AND p.category_id = c.category_id where p.status='1' AND u.status>0 order by post_date desc limit $start ,5";
$flag=1;
if(isset($_GET['cat_id']))
{
  $cat_id = $_GET['cat_id'];
  $sql = "select u.user_id,u.f_name,u.l_name,p.post_id,p.post_title,p.post_description,p.post_content,p.post_date,p.author_id,p.status,p.category_id,p.view_count,p.image_status,p.image_link,c.category_name from post p inner join users u inner join post_category c on p.author_id = u.user_id AND p.category_id = c.category_id where p.status='1' AND p.category_id='$cat_id' AND u.status>0 order by post_date desc limit $start ,5";
  $flag=2;
}

if(isset($_GET['tag_id']))
{
  $tag_id = $_GET['tag_id'];
  $sql = "select u.user_id,u.f_name,u.l_name,p.post_id,p.post_title,p.post_description,p.post_content,p.post_date,p.author_id,p.status,p.category_id,p.view_count,p.image_status,p.image_link from post p inner join users u inner join post_tag pt inner join tags t on p.author_id = u.user_id AND p.post_id = pt.post_id AND pt.tag_id = t.tag_id WHERE t.tag_id = '$tag_id' AND u.status>0 limit $start, 5";
  $flag=3;
}

$blogresult = mysqli_query($conn, $sql);
           
?>
<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>

  <!-- Basic -->
  <title>WCE ACM Student Chapter | Blog</title>

  <!-- Define Charset -->
  <meta charset="utf-8">

  <!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Page Description and Author -->
  <meta name="description" content="WCE ACM Student Chapter official blog. The members as well as students of the institute write various articles about the different technological happenings around the globe in our offial blog." />
  <meta name="keywords" content="Blog, WCE ACM Student Chapter Official Blog, ACM Student Chapter Blog, Walchand College of Engineering Sangli, CSE Department Blog, WCE Sangli Blog, WCE ACM Blog, Student Activity" />

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
  <link rel="stylesheet" type="text/css" href="css/colors/beige.css" title="beige" media="screen" />


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
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-83002527-1', 'auto');
  ga('send', 'pageview');

</script>
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
            <a class="navbar-brand" href="index.php">
              <img alt="WCE ACM Student Chapter" src="images/acm.png" style="margin-top:-12px;">
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
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a href="index.php"><span class="pull-left"><i class="fa fa-home"></i></span>&nbsp;&nbsp;Home</a>
                <ul class="dropdown">
                  <li><a href="index.php">Home<span class="pull-right"><i class="fa fa-home"></i></span></a>
                  </li>
                  <li><a href="#vision">Our Vision<span class="pull-right"><i class="fa fa-eye"></i></span></a>
                  </li>
                  <li><a href="#whowe">Who We Are?<span class="pull-right"><i class="fa fa-question"></i></span></a>
                  </li>
                  <li><a href="#news">Latest News<span class="pull-right"><i class="fa fa-clock-o"></i></span></a>
                  </li>
                  <li><a href="#news">Testimonials<span class="pull-right"><i class="fa fa-comment"></i></span></a>
                  </li>
                  <li><a href="#clubs">Supporting Clubs<span class="pull-right"><i class="fa fa-group"></i></span></a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="about.php"><span class="pull-left"><i class="fa fa-info-circle"></i></span>&nbsp;&nbsp;About Us</a>
                <ul class="dropdown">
                  <li><a href="about.php">About <span class="pull-right"><i class="fa fa-info-circle"></i></span></a>
                  </li>
                  <li><a href="board.php?ref_id=4">Main Board <span class="pull-right"><i class="fa fa-group"></i></span></a>
                  </li>
                  <li><a href="board.php?ref_id=3">Third Year Members <span class="pull-right"><i class="fa fa-group"></i></span></a>
                  </li>
                  <li><a href="board.php?ref_id=2">Second Year Members <span class="pull-right"><i class="fa fa-group"></i></span></a>
                  </li>
                  <li><a href="alumni.php">Alumni <span class="pull-right"><i class="fa fa-group"></i></span></a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="activity.php"><span class="pull-left"><i class="fa fa-pencil"></i></span>&nbsp;&nbsp;Activities</a>
               
                <ul class="dropdown">
                  <?PHP
        $sql = "select * from activity where status='1' order by activity_date desc limit 0,5";
        $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result))
               { ?>
             <li><a href="activity_details.php?ref_id=<?php echo $row['activity_id']; ?>"><?php echo $row['activity_title']; ?><span class="pull-right"><i class="fa fa-pencil"></i></span></a>
                  </li>
             <?PHP } } ?>
                  <li><a href="activity.php">View All Acitivities<span class="pull-right"><i class="fa fa-pencil"></i></span></a>
                  </li>


                </ul>
              </li>

              <li>
                <a class="active" href="blog.php"><span class="pull-left"><i class="fa fa-edit"></i></span>&nbsp;&nbsp;Blog</a>
                <ul class="dropdown">
                 <?PHP
        $sql = "select * from post where status='1' order by post_date desc limit 0,5";
        $result = mysqli_query($conn, $sql);
              if(mysqli_num_rows($result)>0){
              while($row = mysqli_fetch_assoc($result))
           { ?>

           <li><a href="post.php?ref_id=<?php echo $row['post_id']; ?>"><?php echo $row['post_title']; ?><span class="pull-right"><i class="fa fa-pencil"></i></span></a>
                  </li>
         
             <?PHP } } ?>
                  <li><a href="blog.php">View All Posts<span class="pull-right"><i class="fa fa-pencil"></i></span></a>
                  </li>
                  
                </ul>
              </li>
              
              <li><a href="gallery.php"><span class="pull-left"><i class="fa fa-picture-o"></i></span>&nbsp;&nbsp;Gallery</a>
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
            <!-- End Navigation List -->
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="wpb-mobile-menu">
              <li>
                <a href="index.php"><span class="pull-left"><i class="fa fa-home"></i></span>&nbsp;&nbsp;Home</a>
                <ul class="dropdown">
                  <li><a href="index.php">Home<span class="pull-right"><i class="fa fa-home"></i></span></a>
                  </li>
                  <li><a href="#vision">Our Vision<span class="pull-right"><i class="fa fa-eye"></i></span></a>
                  </li>
                  <li><a href="#whowe">Who We Are?<span class="pull-right"><i class="fa fa-question"></i></span></a>
                  </li>
                  <li><a href="#news">Latest News<span class="pull-right"><i class="fa fa-clock-o"></i></span></a>
                  </li>
                  <li><a href="#news">Testimonials<span class="pull-right"><i class="fa fa-comment"></i></span></a>
                  </li>
                  <li><a href="#clubs">Supporting Clubs<span class="pull-right"><i class="fa fa-group"></i></span></a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="about.php"><span class="pull-left"><i class="fa fa-info-circle"></i></span>&nbsp;&nbsp;About Us</a>
                <ul class="dropdown">
                  <li><a href="about.php">About <span class="pull-right"><i class="fa fa-info-circle"></i></span></a>
                  </li>
                  <li><a href="board.php?ref_id=4">Main Board <span class="pull-right"><i class="fa fa-group"></i></span></a>
                  </li>
                  <li><a href="board.php?ref_id=3">Third Year Members <span class="pull-right"><i class="fa fa-group"></i></span></a>
                  </li>
                  <li><a href="board.php?ref_id=2">Second Year Members <span class="pull-right"><i class="fa fa-group"></i></span></a>
                  </li>
                  <li><a href="alumni.php">Alumni <span class="pull-right"><i class="fa fa-group"></i></span></a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="activity.php"><span class="pull-left"><i class="fa fa-pencil"></i></span>&nbsp;&nbsp;Activities</a>
   
                <ul class="dropdown">
                  <?PHP
        $sql = "select * from activity where status='1' order by activity_date desc limit 0,5";
        $result = mysqli_query($conn, $sql);
              if(mysqli_num_rows($result)>0){
                       while($row = mysqli_fetch_assoc($result))
            { ?>
             <li><a href="activity_details.php?ref_id=<?php echo $row['activity_id']; ?>"><?php echo $row['activity_title']; ?><span class="pull-right"><i class="fa fa-pencil"></i></span></a>
                  </li>
              <?PHP } } ?>
                  <li><a href="activity.php">View All Acitivities<span class="pull-right"><i class="fa fa-pencil"></i></span></a>
                  </li>


                </ul>
              </li>

              <li>
                <a class="active" href="blog.php"><span class="pull-left"><i class="fa fa-edit"></i></span>&nbsp;&nbsp;Blog</a>
                <ul class="dropdown">
                 <?PHP
        $sql = "select * from post where status='1' order by post_date desc limit 0,5";
        $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0){
              while($row = mysqli_fetch_assoc($result))
          { ?>

           <li><a href="post.php?ref_id=<?php echo $row['post_id']; ?>"><?php echo $row['post_title']; ?><span class="pull-right"><i class="fa fa-pencil"></i></span></a>
                  </li>
         
             <?PHP } } ?>
                  <li><a href="blog.php">View All Posts<span class="pull-right"><i class="fa fa-pencil"></i></span></a>
                  </li>
                  
                </ul>
              </li>
              
              <li><a href="gallery.php"><span class="pull-left"><i class="fa fa-picture-o"></i></span>&nbsp;&nbsp;Gallery</a>
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
            <h2>Blog</h2>
            <p>We Like To Share What We Know</p>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="index.php">Home</a></li>
              <li>Blog</li>
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

          <!-- Start Blog Posts -->
          <div class="col-md-9 blog-box">
            <?php 
            if(mysqli_num_rows($blogresult)>0){
            while($row = mysqli_fetch_assoc($blogresult))
            {
              if($row['image_status']>0)
              {
            ?>
            <!-- Start Post -->
            <div class="blog-post image-post">
              <!-- Post Thumb -->
              <div class="post-head">
                <a class="lightbox" title="<?php echo $row['post_title'];?>" href="<?php echo $row['image_link'];?>">
                  <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                  <img alt="<?php echo $row['post_title'];?>" src="<?php echo $row['image_link'];?>">
                </a>
              </div>
              <!-- Post Content -->
              <div class="post-content">
                <div class="post-type"><i class="fa fa-picture-o"></i></div>
                <h2><a href="post.php?ref_id=<?php echo $row['post_id'];?>"><?php echo $row['post_title'];?></a></h2>
                <ul class="post-meta">
                  <li>By <a href="profile.php?id=<?php echo $row['user_id']; ?>"><?php echo $row['f_name']." ".$row['l_name']; ?></a></li>
                  <li><?php echo date('d-M-Y', strtotime($row['post_date'])); ?></li>
                  <li><a href="blog.php?cat_id=<?php echo $row['category_id'];?>"><?php echo $row['category_name'];?></a></li>
                  
                </ul>
                <p><?php echo $row['post_description'];?></p>
                <a class="main-button" href="post.php?ref_id=<?php echo $row['post_id'];?>">Read More <i class="fa fa-angle-right"></i></a>
              </div>
            </div>
            <!-- End Post -->
            <?php } else { ?>
            <!-- Start Post -->
            <div class="blog-post standard-post">
              <!-- Post Content -->
            <div class="post-content">
                <div class="post-type"><i class="fa fa-pencil"></i></div>
                <h2><a href="post.php?ref_id=<?php echo $row['post_id'];?>"><?php echo $row['post_title'];?></a></h2>
                <ul class="post-meta">
                  <li>By <a href="profile.php?id=<?php echo $row['user_id']; ?>"><?php echo $row['f_name']." ".$row['l_name']; ?></a></li>
                  <li><?php echo date('d-M-Y', strtotime($row['post_date'])); ?></li>
                  <li><a href="blog.php?cat_id=<?php echo $row['category_id'];?>"><?php echo $row['category_name'];?></a></li>
                  
                </ul>
                <p><?php echo $row['post_description'];?></p>
                <a class="main-button" href="post.php?ref_id=<?php echo $row['post_id'];?>">Read More <i class="fa fa-angle-right"></i></a>
              </div>
            </div>
            <!-- End Post -->
            <?php } } } else { ?>
            <div class="post-row item">

                  <h3 class="post-title"><a href="#">No Information Available Currently</a></h3>
                  
                </div>
            <?php } ?>
            <!-- Start Pagination -->
           <div id="pagination">
         <?php      
        switch($flag)
        {
          case 1:
            $sql = "select u.user_id,u.f_name,u.l_name,p.post_id,p.post_title,p.post_description,p.post_content,p.post_date,p.author_id,p.status,p.category_id,p.view_count,p.image_status,p.image_link,c.category_name from post p inner join users u inner join post_category c on p.author_id = u.user_id AND p.category_id = c.category_id where p.status='1' AND u.status>0 order by post_date desc";
        
          break;
          case 2:
            $sql = "select u.user_id,u.f_name,u.l_name,p.post_id,p.post_title,p.post_description,p.post_content,p.post_date,p.author_id,p.status,p.category_id,p.view_count,p.image_status,p.image_link,c.category_name from post p inner join users u inner join post_category c on p.author_id = u.user_id AND p.category_id = c.category_id where p.status='1' AND p.category_id='$cat_id' AND u.status>0 order by post_date desc";
        
          break;
          case 3:
            $sql = "select u.user_id,u.f_name,u.l_name,p.post_id,p.post_title,p.post_description,p.post_content,p.post_date,p.author_id,p.status,p.category_id,p.view_count,p.image_status,p.image_link from post p inner join users u inner join post_tag pt inner join tags t on p.author_id = u.user_id AND p.post_id = pt.post_id AND pt.tag_id = t.tag_id WHERE t.tag_id = '$tag_id' AND u.status>0";
        
          break;
        }
        $result = mysqli_query($conn, $sql);
        $rowcount = mysqli_num_rows($result); 
        $pagecount = intval($rowcount / 5);
        if($rowcount%5>0)
        {
          $pagecount = $pagecount+1;
        }


        ?>
              <span class="all-pages">Page <?php echo $pno." of ".$pagecount; ?></span>
              <?php 
              switch($flag)
              {
                case 1:

              if($pno != 1)
              {
              ?>
              <a class="next-page" href="blog.php?ref_id=<?php echo $pno-1 ; ?>">Prev</a>
              <?php } 
              break;
                case 2:

              if($pno != 1)
              {
              ?>
              <a class="next-page" href="blog.php?ref_id=<?php echo $pno-1 ; ?>&cat_id=<?php echo $cat_id;?>">Prev</a>
              <?php } 
              break;
                case 3:

              if($pno != 1)
              {
              ?>
              <a class="next-page" href="blog.php?ref_id=<?php echo $pno-1 ; ?>&tag_id=<?php echo $tag_id;?>">Prev</a>
              <?php } 
              break;
              }
                for($i=1;$i<=$pagecount;$i++)
                {
                  switch($flag)
                  {
                    case 1:
                  if($i == $pno)
                  {
                  ?>
                
              <span class="current page-num"><?php echo $i; ?></span>
              <?php } 
              else
                {?>
              <a class="page-num" href="blog.php?ref_id=<?php echo $i ; ?>"><?php echo $i; ?></a>
              <?php }  
              break;
              case 2:
              if($i == $pno)
                  {
                  ?>
                
              <span class="current page-num"><?php echo $i; ?></span>
              <?php } 
              else
                {?>
              <a class="page-num" href="blog.php?ref_id=<?php echo $i ; ?>&cat_id=<?php echo $cat_id;?>"><?php echo $i; ?></a>
              <?php }
              break;

              case 3:
              if($i == $pno)
                  {
                  ?>
                
              <span class="current page-num"><?php echo $i; ?></span>
              <?php } 
              else
                {?>
              <a class="page-num" href="blog.php?ref_id=<?php echo $i ; ?>&tag_id=<?php echo $tag_id;?>"><?php echo $i; ?></a>
              <?php }
              break;
              }
              } 
              switch($flag)
              {
                case 1:

              if($pno != $pagecount)
              {
              ?>
              <a class="next-page" href="blog.php?ref_id=<?php echo $pno+1 ; ?>">Next</a>
              <?php } 
              break;
                case 2:

              if($pno != $pagecount)
              {
              ?>
              <a class="next-page" href="blog.php?ref_id=<?php echo $pno+1 ; ?>&cat_id=<?php echo $cat_id;?>">Next</a>
              <?php } 
              break;
                case 3:

              if($pno != $pagecount)
              {
              ?>
              <a class="next-page" href="blog.php?ref_id=<?php echo $pno+1 ; ?>&tag_id=<?php echo $tag_id;?>">Next</a>
              <?php } 
              break;
              }
              ?>

            </div>
            <!-- End Pagination -->

          </div>
          <!-- End Blog Posts -->


          <!--Sidebar-->
          <div class="col-md-3 sidebar right-sidebar">

            <!-- Search Widget -->
            <div class="widget widget-search">
              <form action="#">
                <input type="search" placeholder="Enter Keywords..." />
                <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
              </form>
            </div>

            <!-- Categories Widget -->
            <div class="widget widget-categories">
              <h4>Categories <span class="head-line"></span></h4>
              <ul>
                   <?PHP
        $sql = "select * from post_category where status='1'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result))
        { ?>
                <li>
                  <a href="blog.php?cat_id=<?php echo $row['category_id'];?>"><?php echo $row['category_name'];?></a>
                </li>
             <?php } } else { ?>
        <div class="post-row item">

                  <h3 class="post-title"><a href="#">No Information Available Currently</a></h3>
                  
                </div>
        <?php } ?>
              </ul>
            </div>

            <!-- Popular Posts widget -->
            <div class="widget widget-popular-posts">
              <h4>Popular Post <span class="head-line"></span></h4>
              <ul>
              <?PHP
        $sql = "select * from post where status='1' ORDER BY view_count DESC LIMIT 0,3";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result))
        { ?>
                <li>
                  <div class="widget-thumb">
                    <a href="post.php?ref_id=<?php echo $row['post_id'];?>"><img src="<?php echo $row['image_link'];?>" alt="Post" /></a>
                  </div>
                  <div class="widget-content">
                    <h5><a href="post.php?ref_id=<?php echo $row['post_id'];?>"><?php echo $row['post_title'];?></a></h5>
                    <span><?php echo date('d-M-Y', strtotime($row['post_date'])); ?></span>
                  </div>
                  <div class="clearfix"></div>
                </li>
             <?php } } else { ?>
        <div class="post-row item">

                  <h3 class="post-title"><a href="#">No Popular Posts Available Currently</a></h3>
                  
                </div>
        <?php } ?>
            
              </ul>
            </div>
            <!-- Tags Widget -->
            <div class="widget widget-tags">
              <h4>Tags <span class="head-line"></span></h4>
              <div class="tagcloud">
                <?PHP
        $sql = "select * from tags where tag_status='1'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result))
        { ?>
                <a href="blog.php?tag_id=<?php echo $row['tag_id'];?>"><?php echo $row['tag_name'];?></a>
 <?php } } else { ?>
        <div class="post-row item">

                  <h3 class="post-title">No Tags Available Currently</h3>
                  
                </div>
        <?php } ?>
              </div>
            </div>

          </div>
          <!--End sidebar-->


        </div>
      </div>
    </div>
    <!-- End Content -->
    <!-- Start Footer -->
 
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
              <h4><img src="images/footer-acm.png" class="img-responsive" alt="WCE ACM Student Chapter" /></h4>
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
              <p>&copy; 2018 WCE ACM - All Rights Reserved <a href="http://cbainc.in">CBA Solutions</a> </p>
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

  <script type="text/javascript" src="js/script.js"></script>
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
  xmlhttp.open("GET","subscribe.php?email="+email,true);
  xmlhttp.send();
  }
  }
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

  </script>
</body>

</html>