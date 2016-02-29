<?php

include "Mysqldb.php";
$con = new DB_con();

// data insert code starts here.


if(isset($_POST))
{
$origin=$_REQUEST["orig"];
$destination=$_REQUEST["dest"];
$capacity=$_REQUEST["cap"];
$available=1;



$con->give_ride($origin,$destination,$capacity,$available);


}
