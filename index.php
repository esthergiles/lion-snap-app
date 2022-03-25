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


// Create connection
$conn = new mysqli($host, $username, $password, $db_name);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// //Initializes MySQLi
// $conn = mysqli_init();

// // Establish the connection
// mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306, NULL, MYSQLI_CLIENT_SSL);

// //If connection failed, show the error
// if (mysqli_connect_errno())
// {
//     die('Failed to connect to MySQL: '.mysqli_connect_error());
// }

//Insert Statement

$student_name = 'Test Name';
$student_phone = 'Blue';
$student_email = 'test email';
$student_start = 'test start';
$student_stop = 'test stop';

$sql = "INSERT INTO test (Name, Phone, Email, Start, Stop)
VALUES ($student_name, $student_phone, $student_email, $student_start, $student_stop)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


// if ($stmt = mysqli_prepare($conn, "INSERT INTO test (Name, Phone, Email, Start, Stop) VALUES (?, ?, ?, ?, ?)"))
// {
//     mysqli_stmt_bind_param($stmt, 'ssd', $student_name, $student_phone, $student_email, $student_start, $student_stop);
//     mysqli_stmt_execute($stmt);
//     printf("Insert: Affected %d rows\n", mysqli_stmt_affected_rows($stmt));
//     mysqli_stmt_close($stmt);
// }

//Run the Select query
// printf("Reading data from table: \n");
// $res = mysqli_query($conn, 'SELECT * FROM test');
// while ($row = mysqli_fetch_assoc($res))
//  {
//     var_dump($row);
//  }

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