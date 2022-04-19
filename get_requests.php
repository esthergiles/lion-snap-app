<?php
include("database.php"); //tells the program where the database is

$search = $_POST['email'];
$sql = "SELECT * FROM reservations WHERE email='$search'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    echo "Reservation: " . $row["fname"]. "   " . $row["lname"]. "   " . $row["phone"]."   " . $row["email"]."   " . $row["start_location"]."   " . $row["stop_location"]."   " . $row["num_students"]. "<br>";
}
} else {
echo "0 results";
}  


?>


<?php
  } else { ?>
    <tr>
     <td colspan="8">No data found</td>
    </tr>
 <?php } ?>