
<?php
include("database.php"); // defines database connection details


  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $phone = $_POST['mob']; //Mob stands for Mobile
  $email = $_POST['email'];
  $start_location = $_POST['start_location'];
  $end_location = $_POST['end_location'];
  $numStudents = $_POST['num'];

// Insert Data
$sql = "INSERT INTO reservations(fname, lname, phone, email, start_location, stop_location, num_students)
VALUES ('$fname', '$lname', '$phone', '$email', '$start_location', '$end_location', '$numStudents')";

if ($conn->query($sql) === TRUE) {
  header("location:request_confirm.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
