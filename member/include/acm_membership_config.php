<?PHP
require_once("./include/acm_membership.php");

$acm = new ACMMembership();

//Provide your site name here
$acm->SetWebsiteName('WCE ACM Student Chapter');

//Provide the email address where you want to get notifications
$acm->SetAdminEmail('admin@cbainc.in');
$acm->SetSiteContact('8956523622');
$acm->SetSiteEmail('admin@cbainc.in');
$acm->SetSiteFB('admin@cbainc.in');
$acm->SetSiteTwitter('admin@cbainc.in');
$acm->SetSiteLinkedIn('admin@cbainc.in');
$acm->SetSiteGplus('admin@cbainc.in');

//Provide your database login details here:
//hostname, user name, password, database name and table name
//note that the script will create the table (for example, fgusers in this case)
//by itself on submitting register.php for the first time
$acm->InitDB(/*hostname*/'162.254.252.104',
                      /*username*/'wcehosti_acm',
                      /*password*/'wcehostingacm@123',
                      /*database name*/'wcehosti_acm',
                      /*table name*/'users');

//For better security. Get a random string from this link: http://tinyurl.com/randstr
// and put it here
$acm->SetRandomKey('SqCrsV8dRtrZvRr');

?>