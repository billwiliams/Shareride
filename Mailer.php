<?php
nclude "Mysqldb.php";

$con = new DB_con();
//using the id update the ride in the database by setting the available to zero
$member_id = $_REQUEST['id'];
$results =$con->update_ride($member_id);
$row = mysql_fetch_assoc($results);
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {

  //Email information
  $admin_email = "someone@example.com";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['comment'];

  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);

  //Email response
  echo "your ride has been reserved!";
  }

  //if "email" variable is not filled out, display the form
  else  {
?>



<?php
  }
?>
