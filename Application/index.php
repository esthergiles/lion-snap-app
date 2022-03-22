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

$host = 'demo-server.mysql.database.azure.com';
$username = 'demoserveradmin';
$password = 'sWq*75AMm';
$db_name = 'demo';

//Initializes MySQLi
$conn = mysqli_init();

// mysqli_ssl_set($conn,NULL,NULL, "/var/www/html/DigiCertGlobalRootG2.crt.pem", NULL, NULL);

// Establish the connection
mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306, NULL, MYSQLI_CLIENT_SSL);

//If connection failed, show the error
if (mysqli_connect_errno())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


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
