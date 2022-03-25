<?php
    // Postback
    $message = "";
    if(isset($_POST['SubmitButton'])){ //check if form was submitted
      $input = $_POST['inputText']; //get input text
      $message = "Success! You entered: ".$input;
    }   

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

if (mysqli_query($conn, '
CREATE TABLE StudentNames (
`Id` INT NOT NULL AUTO_INCREMENT ,
`EnteredName` VARCHAR(200) NOT NULL ,
PRIMARY KEY (`Id`)
);
')) {
printf("Table created\n");
}

//Create an Insert prepared statement and run it
$product_name = 'BrandNewProduct2';
$product_color = 'Blue2';
$product_price = 15.5;
if ($stmt = mysqli_prepare($conn, "INSERT INTO Products (ProductName, Color, Price) VALUES (?, ?, ?)"))
{
    mysqli_stmt_bind_param($stmt, 'ssd', $product_name, $product_color, $product_price);
    mysqli_stmt_execute($stmt);
    printf("Insert: Affected %d rows\n", mysqli_stmt_affected_rows($stmt));
    mysqli_stmt_close($stmt);
}

//Run the Select query
printf("Reading data from table: \n");
$res = mysqli_query($conn, 'SELECT * FROM Products');
while ($row = mysqli_fetch_assoc($res))
 {
    var_dump($row);
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


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Lion Snap App Final</title>
	<link href="css/site.css" rel="stylesheet">
</head>

<body>
    <div class="main-container">
        <div class="content-body">
            <div class="success-text">UNA SNAP Application UI</div>
        </div>  

        <form action="" method="post">
        Enter your name: 
        <input type="text" name="name"/>
        <input type="submit" name="SubmitButton"/>
        </form> 

        <div>
        <?php
        //Insert Color into database
        // if ($stmt = mysqli_prepare($conn, "INSERT INTO Colors (Color) VALUES (?)"))
        // {
        //     mysqli_stmt_bind_param($stmt, 'ssd', $input);
        //     mysqli_stmt_execute($stmt);
        //     printf("Insert: Affected %d rows\n", mysqli_stmt_affected_rows($stmt));
        //     mysqli_stmt_close($stmt);
        // }
        //Run the Select query
        printf("Names Entered: \n");
        $res = mysqli_query($conn, 'SELECT * FROM StudentNames');
        while ($row = mysqli_fetch_assoc($res))
        {
            echo $row. "<br>";
        }
        ?>
        </div>
    </div>

    
</body>
</html>