<html>
 <head>
   <title>Shareride inc</title>
    <link rel="stylesheet" type="text/css" href="Home.css" />
 </head>
 <body>
<?php
include "Mysqldb.php";

$con = new DB_con();

echo "  Make all the difference.  ";
echo "<a href=\"giveRide.php\">Share a ride. </a>";
echo "  available rides  ";
echo "<table border='1' cellpadding='10'>";
echo '<tr>  <th>Origin</th> <th>Destination</th> <th>Capacity</th> <th>Status</th></tr>';

	// loop through results of database query, displaying them in the table
  $result=$con->get_ride();
	while($row = mysql_fetch_array( $result )) {

		// echo out the contents of each row into a table
		echo "<tr>";
    echo '<td>' . $row['origin'] . '</td>';
		echo '<td>' . $row['destination'] . '</td>';
		echo '<td>' . $row['capacity'] . '</td>';

		echo '<td><a href="Mailer.php?id=' . $row['id'] . '">Reserve it</a></td>';
		echo "</tr>";
	}

	// close table>
	echo "</table>";

?>
</body>
</html>
