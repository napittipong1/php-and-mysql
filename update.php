<?php
$servername = "localhost";
$username = "webadmin";
$password = "1234";
$dbname = "myDB";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn ->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

$sql = "UPDATE MyGuests SET lastname='Doke 'WHERE id=4";

if ($conn->query($sql) === TRUE){
    echo "New updated successfully";
}
else{
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>