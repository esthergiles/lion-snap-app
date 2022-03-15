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

// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:unasnap.database.windows.net,1433; Database = lionappsql", "unasnap", "Leoluna2022");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "unasnap", "pwd" => "Leoluna2022", "Database" => "lionappsql", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:unasnap.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
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
