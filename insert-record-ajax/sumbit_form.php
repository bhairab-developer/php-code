<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nton";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
global $name;
global $email;
global $phone;
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
if( $name == '' and $email== '' and $phone == '' ){
    echo "Enter fields";
    }
else{
    $sql = "INSERT INTO jan (name,email,phone)VALUES ('$name', '$email', '$phone')";
        if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
        }else {
                echo "Error: " . $sql . "<br>" . $conn->error;
        } 
    }

         
$conn->close();
?>
 
