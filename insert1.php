<?php
$servername = "localhost";
$username= "webadmin";
$password = "1234";
$dbname = "myDB";

//Create connection
$conn = new mysqli($servername,$username,$password,$dbname);
//Check connection
if ($conn->connect_error){
    die("Connection failed:" . $conn->connect_error);
}
//sql insert db 

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John','Doe','John@exmaple.com')";


if ($conn->query($sql)===TRUE){
    echo "New record created successfully";
}else{
    echo "Error:".$sql."<br>".$conn->error; 
}
$conn->close();
?>