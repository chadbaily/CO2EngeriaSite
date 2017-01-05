<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "co2_meter";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT record_id, temperature, humidity, co2 FROM cozir";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["record_id"]. "\t\t Temperature: " . $row["temperature"]. "\t\t Humidity: " . $row["humidity"]. "\t\t CO2: ". $row["co2"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
