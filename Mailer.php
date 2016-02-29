

<?php
/*
 * Mailer.php file
 * Contains the neccesary code to update a reserved ride and send an email to the user

*/

include "Mysqldb.php";
// create a new db connection
$con = new DB_con();
//obtain the username and password using the session variables set during login
session_start();
$fname   = $_SESSION['fname'];
$femail  = $_SESSION['femail'];

//using the id update the ride in the database by setting the available to zero
$member_id = $_REQUEST['id'];
$results =$con->update_ride($member_id);

//if "email" variable is filled out, send email


  //Email information
  $admin_email = "someone@example.com";
  $email = $femail;
  $subject = "Reserved a ride";
  $comment =  "Hi".$fname." your ride has been reserved";

  //send email
  mail($femail, "$subject", $comment, "From:" . $admin_email);

  //Email response
  echo "your ride has been reserved!";
  //redirect to Home page
  header('Location: http://localhost:8080/Home.php');



?>
