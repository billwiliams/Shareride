<?php
/*
*Registration_action.php
* allows a user to register to shareinc  by providing username,password and email details


*/
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
