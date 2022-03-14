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
    
    
    echo "<h1>Compose Test</h1>";
  try {
    // connect to Compose assuming your MONGODB_URL environment
    // variable contains the connection string
    $connection_url = "mongodb://una-snap:P2oMUu2DXDHkICrjMbgIJo6F7ZaWNfSGOPKE6qEzArFZw68KoyYeYoRg2oPxywjK0KTqlj0lrT2YLobV25nI9g==@una-snap.mongo.cosmos.azure.com:10255/?ssl=true&replicaSet=globaldb&retrywrites=false&maxIdleTimeMS=120000&appName=@una-snap@";

     // create the mongo connection object
    $m = new MongoClient($connection_url);

    // extract the DB name from the connection path
    $url = parse_url($connection_url);
    $db_name = preg_replace('/\/(.*)/', '$1', $url['path']);

    // use the database we connected to
    $db = $m->selectDB($db_name);

    echo "<h2>Collections</h2>";
    echo "<ul>";

    // print out list of collections
    $cursor = $db->listCollections();
    $collection_name = "";
    foreach( $cursor as $doc ) {
      echo "<li>" .  $doc->getName() . "</li>";
      $collection_name = $doc->getName();
    }
    echo "</ul>";

    // print out last collection
    if ( $collection_name != "" ) {
      $collection = $db->selectCollection($collection_name);
      echo "<h2>Documents in ${collection_name}</h2>";

      // only print out the first 5 docs
      $cursor = $collection->find();
      $cursor->limit(5);
      echo $cursor->count() . ' document(s) found. <br/>';
      foreach( $cursor as $doc ) {
        echo "<pre>";
        var_dump($doc);
        echo "</pre>";
      }
    }

    // disconnect from server
    $m->close();
  } catch ( MongoConnectionException $e ) {
    die('Error connecting to MongoDB server');
  } catch ( MongoException $e ) {
    die('Mongo Error: ' . $e->getMessage());
  } catch ( Exception $e ) {
    die('Error: ' . $e->getMessage());
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
