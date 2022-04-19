<?php
// Start the session
include("database.php"); // defines database connection details

//Grab res id to delete from URL
$resid= $_GET['resid'];


// Delete Request
$sql = "DELETE FROM reservations WHERE res_ID='$resid'";

if ($conn->query($sql) === TRUE) {
    // Send to a update confirmation page
    header("location:delete_confirm.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();



?>