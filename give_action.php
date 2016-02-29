<?php

include "Mysqldb.php";
$con = new DB_con();




if(isset($_POST))
{
$origin=$_REQUEST["orig"];
$destination=$_REQUEST["dest"];
$capacity=$_REQUEST["cap"];
$available=1;



$con->give_ride($capacity,$origin,$destination,$available);
header('Location: http://localhost:8080/Home.php');


}
