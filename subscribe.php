<?php 

require_once("./include/db_config.php");
require_once("./include/acm_membership_config.php");

if(isset($_GET['email'])){
 
// Escape user inputs for security
$email = mysqli_real_escape_string($conn, $_GET['email']);
 
// attempt insert query execution
$sql = "INSERT INTO subscribers VALUES ('$email')";
if(mysqli_query($conn, $sql)){
    echo "You have subscribed to newsletter successfully!";
} else{
    echo "You have already subscribed to newsletter!";
}
 
}

?>