<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "emp_details";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$country = $_POST["country"];
$subject = $_POST["subject"];




$sql = "INSERT INTO contact(Name,LastName,Email,Country,Message) VALUES ('$firstname','$lastname','$email','$country','$subject')";

if ($conn->query($sql) === TRUE) {
    //echo "contact created successfully";
    
        header('location: feedbackhtml.html');
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 