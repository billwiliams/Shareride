<?php

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

 public function register($username,$email,$password)
 {
  $res = mysql_query("INSERT users(username,email,password) VALUES('$username','$email','$password')");
  return $res;
 }
 public function give_ride($capacity,$origin,$destination)
 {
  $res = mysql_query("INSERT rides(capacity,origin,destination,available) VALUES('$capacity','$origin', '$destination','$available')");
  return $res;
 }

 public function get_user($name,$password)
 {
  $res=mysql_query("SELECT * FROM users WHERE `username`= '$name' AND `password` = '$password'");
  return $res;
 }

 public function get_ride()
 {
  $res=mysql_query("SELECT * FROM rides WHERE `available` = '1'");
  return $res;
 }
}
?>
