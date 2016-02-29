<?php
/*
This class contains the methods used to access and manipulate the database
which has information about users and rides

*/

//connection constants
define('DB_SERVER','localhost');
define('DB_USER','jharvard');
define('DB_PASS' ,'crimson');
define('DB_NAME', 'Shareride');

class DB_con
{
 function __construct()
 {
  $conn = mysql_connect(DB_SERVER,DB_USER,DB_PASS) or die('localhost connection problem'.mysql_error());
  mysql_select_db(DB_NAME, $conn);
 }

// function to register a user
 public function register($username,$email,$password)
 {
  $res = mysql_query("INSERT users(username,email,password) VALUES('$username','$email','$password')");
  return $res;
 }

 //function to provide a ride
 public function give_ride($capacity,$origin,$destination,$available)
 {
  $res = mysql_query("INSERT rides(capacity,origin,destination,available) VALUES('$capacity','$origin', '$destination','$available')");
  return $res;
 }

//function to check if a user exists
 public function get_user($name,$password)
 {
  $res=mysql_query("SELECT * FROM users WHERE `username`= '$name' AND `password` = '$password'");
  return $res;
 }

 //function to update a ride after it has been reserved
 public function update_ride($id)
 {
  $res=mysql_query("UPDATE rides SET `available`=0 WHERE `id`= '$id' ");
  return $res;
 }

//function to show available rides
 public function get_ride()
 {
  $res=mysql_query("SELECT * FROM rides WHERE `available` = 1 ");
  return $res;
 }
}
?>
