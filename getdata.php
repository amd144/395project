<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "Gigant7";
$dbname = "sensors";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM sensors.sensordata";
$result = mysqli_query($conn, $sql);

echo "<table>
<tr>
<th>Date and Time</th>
<th>Glennan</th>
<th>Nord</th>
<th>Olin 480</th>
<th>Olin 208</th>
<th>Rock 480</th>
<th>Sears 480</th>
<th>Sears 208</th>
<th>Tomlinson</th>
<th>White</th>
<th>Wick 208</th>
<th>Wick 480</th>
<th>Yost</th>
<th>Olin Sum</th>
<th>Sears Sum</th>
<th>Wick Sum</th>
</tr>
</table>";
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
    	echo "<td>" . $row['Date_Time'] . "</td>";
    	echo "<td>" . $row['Glennan'] . "</td>";
    	echo "<td>" . $row['Nord'] . "</td>";
    	echo "<td>" . $row['Olin_480'] . "</td>";
    	echo "<td>" . $row['Olin_208'] . "</td>";
    	echo "<td>" . $row['Rock_480'] . "</td>";
    	echo "<td>" . $row['Sears_480'] . "</td>";
    	echo "<td>" . $row['Sears_208'] . "</td>";
    	echo "<td>" . $row['Tomlinson'] . "</td>";
    	echo "<td>" . $row['White'] . "</td>";
    	echo "<td>" . $row['Wick_208'] . "</td>";
    	echo "<td>" . $row['Wick_480'] . "</td>";
    	echo "<td>" . $row['Yost'] . "</td>";
    	echo "<td>" . $row['Olin_Sum'] . "</td>";
    	echo "<td>" . $row['Sears_Sum'] . "</td>";
    	echo "<td>" . $row['Wick_Sum'] . "</td>";
    	echo "</tr>";
    }
} else {
    echo "0 results";
}
echo "</table>";
mysqli_close($conn);
?> 

</body>
</html>