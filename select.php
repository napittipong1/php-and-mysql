<?php
$servername = "localhost";
$username = "webadmin";
$password = "1234";
$dbname = "myDB";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn ->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
}
else{
    echo "0 result";
}


$conn->close();
?>