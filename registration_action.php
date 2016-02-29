<?php

include "Mysqldb.php";
$con = new DB_con();

// data insert code starts here.


if(isset($_POST))
{
$username=$_REQUEST["name"];
$email=$_REQUEST["email"];
$password=$_REQUEST["pword"];



$con->register($username,$email,$password);


}



?>
