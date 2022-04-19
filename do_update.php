<?php
// Start the session
include("database.php"); // defines database connection details

//Grab data to update
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['mob']; //Mob stands for Mobile
$email = $_POST['email'];
$start_location = $_POST['start_location'];
$end_location = $_POST['end_location'];
$numStudents = $_POST['num'];
$resid= $_GET['resid'];


// Update Data
$sql = "UPDATE reservations SET fname='$fname', lname='$lname', phone='$phone', email='$email', start_location='$start_location', stop_location='$end_location', num_students='$numStudents' WHERE res_ID='$resid'";

if ($conn->query($sql) === TRUE) {
    // Send to a update confirmation page
    header("location:request_confirm.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();



?>