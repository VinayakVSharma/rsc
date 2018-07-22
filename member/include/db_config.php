<?php
$servername = "162.254.252.104";
$username = "wcehosti_acm";
$password = "wcehostingacm@123";
$dbname = "wcehosti_acm";
//create connection
$conn =  mysqli_connect($servername,$username,$password,$dbname);
// check connection
if(!$conn){
        die("Connection Failed: ". mysqli_connect_error());
}

$mysqli = new mysqli($servername, $username, $password,$dbname);						
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

?>