<?php
$new_name = $_POST['name'];


$host = 'lionsnap-server.mysql.database.azure.com';
$username = 'taamhhvhmx';
$password = 'E7HHMN348V848DA8*';
$db_name = 'testconnect';

//Initializes MySQLi
$conn = mysqli_init();

// Establish the connection
mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306, NULL, MYSQLI_CLIENT_SSL);

//If connection failed, show the error
if (mysqli_connect_errno())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
// Run the create table query

// if (mysqli_query($conn, '
// CREATE TABLE Test2 (
// `Id` INT NOT NULL AUTO_INCREMENT ,
// `EnteredName` VARCHAR(200) NOT NULL ,
// PRIMARY KEY (`Id`)
// );
// ')) {
// printf("Table created\n");
// }

// $test_name = 'test';
// //Create an Insert prepared statement and run it
// if ($stmt = mysqli_prepare($conn, "INSERT INTO StudentNames (EnteredName) VALUES (?)"))
// {
//     mysqli_stmt_bind_param($stmt, 'ssd', $test_name);
//     mysqli_stmt_execute($stmt);
//     printf("Insert: Affected %d rows\n", mysqli_stmt_affected_rows($stmt));
//     mysqli_stmt_close($stmt);
// }

// //Run the Select query
printf("Names Entered: \n");
$res = mysqli_query($conn, 'SELECT * FROM Test2 ');
while ($row = mysqli_fetch_assoc($res))
{
    echo $row['EnteredName']. "<br>";
}
//Run the Delete statement
// $product_name = 'BrandNewProduct';
// if ($stmt = mysqli_prepare($conn, "DELETE FROM Products WHERE ProductName = ?")) {
// mysqli_stmt_bind_param($stmt, 's', $product_name);
// mysqli_stmt_execute($stmt);
// printf("Delete: Affected %d rows\n", mysqli_stmt_affected_rows($stmt));
// mysqli_stmt_close($stmt);
// }

?>
