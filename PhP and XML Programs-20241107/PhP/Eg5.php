<?php
$servername = "localhost"; // 127.0.0.1 // 192.168.5.12 //www.google.com 
$username = "root";
$password = "";
$db="college";

// Create connection
//$conn = new mysqli($servername, $username, $password);
$conn = mysqli_connect($servername, $username, $password,$db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

/*$sql = "INSERT INTO department (DeptID, DeptName, NOS) VALUES ('000', 'AI', '100')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully <br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}*/
$sql = "SELECT * FROM department";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["DeptID"]. " - Name: " . $row["DeptName"]. " " . $row["NOS"]. "<br>";
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
?> 