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

if (mysqli_query($conn, '
CREATE TABLE test (
`Id` INT NOT NULL AUTO_INCREMENT ,
`Name` VARCHAR(200) NOT NULL ,
`Phone` VARCHAR(50) NOT NULL ,
`Email` VARCHAR(50) NOT NULL ,
`Start` VARCHAR(50) NOT NULL ,
`Stop` VARCHAR(50) NOT NULL ,
PRIMARY KEY (`Id`)
);
')) {
printf("Table created\n");
}

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
        Enter your favorite color: 
        <input type="text" name="inputText"/>
        <input type="submit" name="SubmitButton"/>
        </form> 
        <div><?php echo $message; ?> </div>

        <?php
        //Insert Color into database
        // if ($stmt = mysqli_prepare($conn, "INSERT INTO Colors (Color) VALUES (?)"))
        // {
        //     mysqli_stmt_bind_param($stmt, 'ssd', $input);
        //     mysqli_stmt_execute($stmt);
        //     printf("Insert: Affected %d rows\n", mysqli_stmt_affected_rows($stmt));
        //     mysqli_stmt_close($stmt);
        // }
        ?>
    </div>

    
</body>
</html>