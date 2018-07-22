<?php 

require_once("./include/db_config.php");
require_once("./include/acm_membership_config.php");


if(isset($_POST['submit'])){
 
// Escape user inputs for security

$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$contact = mysqli_real_escape_string($conn, $_POST['contact']);
$comment = mysqli_real_escape_string($conn, $_POST['comment']);
$author = mysqli_real_escape_string($conn, $_POST['author']);
$postid = mysqli_real_escape_string($conn, $_POST['post_id']);
$profile_pic = mysqli_real_escape_string($conn, $_POST['profile_pic']);
 /*
// attempt insert query execution
$sql = "INSERT INTO comment (comment_text,author_id,name,email,contact,post_id,profile_pic) VALUES ('$comment','$author','$name','$email','$contact','$postid','$profile_pic')";
if(mysqli_query($conn, $sql)){
  
   header("Location : post.php?ref_id=$postid");
} 
else
{
	header("Location: error.php");
}*/

print_r($_POST);
}
else
{
	header("Location: error.php");

}
?>