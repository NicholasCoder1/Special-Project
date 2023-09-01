<?php
$conn = new mysqli("localhost", "root", "", "javapoint");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT username, password FROM login";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode($data); 
} else {
    echo "No data found.";
}

$conn->close();
?>
