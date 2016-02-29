<?php

/*
*login_action.php
* allows a user to login to shareinc after the provided details are verified.
*the user is then redirected to the home page


*/
include "Mysqldb.php";

$con = new DB_con();
if(isset($_POST))
{
$username=$_REQUEST["name"];
$password=$_REQUEST["pword"];

$user=$con->get_user($username,$password);

if( mysql_num_rows($user)==0){

  header('Location: http://localhost:8080/');
};
while ($row = mysql_fetch_assoc($user)) {
  if (($row["username"]==null)) {
    echo"none";

  }
  //session variables for user name and email
  session_start();
  $_SESSION['fname']   = $row['username'];
  $_SESSION['femail']  = $row['email'];
  //redirecting to the home page
  header('Location: http://localhost:8080/Home.php');
}

}



?>
