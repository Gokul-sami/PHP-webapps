<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "songs";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assuming user ID is passed as a query parameter
$user_id = $_GET['user_id'];

// Fetch user data
$sql = "SELECT * FROM users WHERE id = $user_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<h1>Profile Page</h1>";
        echo "<p>Name: " . $row["name"]. "</p>";
        echo "<p>Email: " . $row["email"]. "</p>";
        echo "<p>Favorite Song: " . $row["favorite_song"]. "</p>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>