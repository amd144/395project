<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "sensors";
$line = $_GET['line'];
//$line = "5";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM sensors.sensordata LIMIT " . $line . ", 1";
$result = mysqli_query($conn, $sql);

$sensorinfo = array();
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $sensorinfo['sensordata'][] = $row;
    }
    echo json_encode($sensorinfo);
} else {
    echo "0 results";
}
mysqli_close($conn);
?> 

</body>
</html>