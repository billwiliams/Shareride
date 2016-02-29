<?php
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
  header('Location: http://localhost:8080/Home.php');
}

}



?>
