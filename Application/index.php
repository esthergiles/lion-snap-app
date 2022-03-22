<?php
    require_once 'vendor/autoload.php';
    $app_insights_instrumentation = getenv('APPINSIGHTS_INSTRUMENTATIONKEY');
    $telemetryClient = new \ApplicationInsights\Telemetry_Client();
    $telemetryClient->getContext()->setInstrumentationKey($app_insights_instrumentation);
    $telemetryClient->trackRequest('Server Requests','Azure DevOps Project', time());
    $telemetryClient->flush();

    // Postback
    $message = "";
    if(isset($_POST['SubmitButton'])){ //check if form was submitted
      $input = $_POST['inputText']; //get input text
      $message = "Success! You entered: ".$input;
    }   

    $host = 'snapflexsqlserver.mysql.database.azure.com';
    $username = 'snapflexsqlserver_admin';
    $password = 'sWq*75AMm,';
    $db_name = 'testconnect';
    
    //Establishes the connection
    $conn = mysqli_init();
    mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);
    if (mysqli_connect_errno($conn)) {
    die('Failed to connect to MySQL: '.mysqli_connect_error());
    }
    
    // Run the create table query
    if (mysqli_query($conn, '
    CREATE TABLE Products (
    `Id` INT NOT NULL AUTO_INCREMENT ,
    `ProductName` VARCHAR(200) NOT NULL ,
    `Color` VARCHAR(50) NOT NULL ,
    `Price` DOUBLE NOT NULL ,
    PRIMARY KEY (`Id`)
    );
    ')) {
    printf("Table created\n");
    }
    
    //Close the connection
    mysqli_close($conn);

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Lion Snap App</title>
	<link href="css/site.css" rel="stylesheet">
</head>

<body>
    <div class="main-container">
        <div class="content-body">
            <div class="success-text">UNA SNAP Application UI</div>
        </div>  

        <form action="" method="post">
        <?php echo $message; ?>
        Enter your favorite color: 
        <input type="text" name="inputText"/>
        <input type="submit" name="SubmitButton"/>
        </form> 
    </div>

    
</body>
</html>
