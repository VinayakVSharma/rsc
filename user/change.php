<?php 

require_once("../include/db_config.php");
require_once("../include/acm_membership_config.php");
if(!$acm->CheckLogin())
{
    header("Location: ../login.php?loginerror=true");
}
if(!$acm->isUserInRole("user"))
{
  $role = $acm->UserRole();
  header("Location: ../".$role."/index.php");
}


$acm->UpdateSessionVars();

$status = $acm->UserStatus();
$userid = $acm->User_Id();
if(isset($_POST['submit']))
{
	if(isset($_POST['c_password']) && isset($_POST['new_password']) && isset($_POST['cnf_password']))
	{
		$c_pwd = $_POST['c_password'];
		$new_pwd =  $_POST['new_password'];
		$cnf_pwd = $_POST['cnf_password'];
	}
else
{
	header("Location: ../error.php");
}
}
else
{
	header("Location: ../error.php");
}
if($new_pwd != $cnf_pwd)
{
	header("Location: settings.php?match=false");	
}
if($acm->ChangePassword($new_pwd,$userid))
{
	header("Location: settings.php?reset=true");
}
else
{
	header("Location: settings.php?reset=false");
}


?>
