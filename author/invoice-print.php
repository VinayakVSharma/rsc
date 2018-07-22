<?php 

require_once("../include/db_config.php");
require_once("../include/acm_membership_config.php");
if(!$acm->CheckLogin())
{
    header("Location: ../login.php?loginerror=true");
}

if(!$acm->isUserInRole("author"))
{
  $role = $acm->UserRole();
  header("Location: ../".$role."/index.php");
}
$acm->UpdateSessionVars();
$status = $acm->UserStatus();
$userid = $acm->User_Id();
if($status <2)
{
    header("Location: index.php?profileerror=true");  
}
if($status <3)
{
    header("Location: register.php?paymenterror=true");  
}
$sql = "select a.registration_id,a.txn_id,a.file_label,a.registration_time,a.file_link,a.payment_status,t.status_name from registration a inner join users u inner join txn_status t on a.user_id  = u.user_id AND a.payment_status = t.status_id where a.status=1 AND a.payment_status = 2 AND u.user_id = $userid";
                         $result = mysqli_query($conn, $sql);
                         if(mysqli_num_rows($result)>0){
                         $regrow = mysqli_fetch_assoc($result);}
                         else
                         {
                            header("Location: ../error.php");
                         }
$sql = "select p.paper_id,p.paper_name from paper p inner join team t inner join users u on p.paper_id = t.paper_id AND t.user_id = u.user_id where u.user_id = '$userid'";
                         $result = mysqli_query($conn, $sql);
                         if(mysqli_num_rows($result)>0){
                        $paperrow = mysqli_fetch_assoc($result);
                        }
                        else
                        {
                            header("Location: ../error.php");
                        }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>WCE RSC 2016 | Invoice</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <i class="fa fa-globe"></i> WCE Research Symposium on Computing 2016 
          <small class="pull-right"><?php echo date('d-M-Y'); ?></small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        From
        <address>
          <strong>RSC 2016</strong><br>
          Walchand College of Engineering<br>
          Sangli-Miraj Road, Vishrambag,<br>
          Sangli. Pin-416415<br>
          Phone: <?php echo $acm->SiteContact(); ?><br>
          Email: <?php echo $acm->SiteEmail(); ?>
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        To
        <address>
          <strong><?php echo $acm->UserFullName(); ?></strong><br>
          <?php echo $acm->UserInstitute(); ?><br>
          Phone: <?php echo $acm->UserContact();?><br>
          Email: <?php echo $acm->UserEmail();?><br>
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <b>Invoice #INVAU00<?php echo $acm->User_Id(); ?></b><br>
        <br>
        <b>Paper ID:</b> <?php echo $paperrow['paper_id'];?><br>
        <b>Payment Date:</b> <?php echo date('d-M-Y', strtotime($regrow['registration_time'])) ?><br>
        <b>Transaction ID:</b> <?php echo $regrow['txn_id'];?><br>
        
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-xs-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>Sr.No.</th>
            <th>Paper ID</th>
            <th>Paper Title</th>
            <th>Description</th>
            <th>Subtotal</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td>1</td>
            <td><?php echo $paperrow['paper_id'];?></td>
            <td><?php echo $paperrow['paper_name'];?></td>
            <td>Registration Fees for Authors to attend WCE RSC 2016.</td>
            <td>₹ 2000.00</td>
          </tr>
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->
      <div class="col-xs-6">
        <p class="lead">Payment Method:</p>
        <b>Received Payment through Bank Transfer</b>
        <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
          This is a temporary invoice copy generated for the convenience of authors.
          Please collect your original copy from the administration at the time of conference.
        </p>
      </div>
      <!-- /.col -->
      <div class="col-xs-6">
        <p class="lead">Amount Paid on: <?php echo date('d-M-Y', strtotime($regrow['registration_time'])) ?></p>

        <div class="table-responsive">
          <table class="table">
            <tr>
              <th style="width:50%">Subtotal:</th>
              <td>₹ 2000.00</td>
            </tr>
            <tr>
              <th>Tax (14%)</th>
              <td>₹ 280.00</td>
            </tr>
            <tr>
              <th>Swatch Bharat Cess (0.5%)</th>
              <td>₹ 10.00</td>
            </tr>
            <tr>
              <th>Other Taxes (0.5%)</th>
              <td>₹ 10.00</td>
            </tr>

            <tr>
              <th><h3>Grand Total</h3></th>
              <td><h3><strong>₹ 2300.00</strong></h3></td>
            </tr>
          </table>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>
