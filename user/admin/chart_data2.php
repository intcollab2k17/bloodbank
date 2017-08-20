<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bloodbank";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$city = $conn->query("SELECT `donor_city`, COUNT(`donor_city`) as donor_count FROM `donor` GROUP BY `donor_city`");

$json = array();

if ($city && $city->num_rows > 0)
{
	while($row = $city->fetch_assoc()) {
		$json[] = array(
			'city' => $row['donor_city'],
			'value' => (int) $row['donor_count']
		);
	}
}

header('Content-Type: application/json');
echo json_encode($json);

$conn->close();