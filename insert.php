
<?php

  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $pickup = $_POST['start_loc'];
  $dropoff = $_POST['stop_loc'];
  $numStudents = $_POST['num_students'];



//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
//   echo "Connected successfully";   

// Insert Data
$sql = "INSERT INTO reservations(name, phone, email, start_location, stop_location, num_students)
VALUES ('$name', '$phone', '$email', '$pickup', '$dropoff', '$numStudents')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
// Sends user back to index page
header("location:index.php");

?>
