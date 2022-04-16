<html>
<head>
<title>&nbsp; UNA SNAP </title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">

<!-- <br><img src="https://www.una.edu/police/images/snap%202.jpg" alt="Snap_Mascot" style="float:left;width:250px;height:250px"> </br> -->
</head>
<body>
<!-- Just an image -->
<nav class="navbar snap-bar">
  <a class="navbar-brand" href="https://www.una.edu">
    <img src="https://una.elluciancrmrecruit.com/Apply/File/DownloadPicture?name=una_logo2" width= "275px">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">New Request</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Manage Existing Request</a>
      </li>
    </ul>
  </div>
</nav>


            <?php
            //Step 1: Connect to DB
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

            //Testing Print Data
                // $sql = "SELECT * FROM reservations";
                // $result = $conn->query($sql);

                // if ($result->num_rows > 0) {
                // // output data of each row
                // while($row = $result->fetch_assoc()) {
                //     echo "Reservation: " . $row["name"]. "   " . $row["phone"]."   " . $row["email"]."   " . $row["start_location"]."   " . $row["stop_location"]."   " . $row["num_students"]. "<br>";
                // }
                // } else {
                // echo "0 results";
                // }   
            ?>
    <!-- <h2> Search For Reservation </h2>
    <form action = "" method="POST">
            &nbsp; Email: <input type="text" name="search_email"><br>
            &nbsp; <input type="submit">
        </form> -->

          <?php  
                // $search = $_POST['search_email'];
                // $sql = "SELECT * FROM reservations WHERE email='$search'";
                // $result = $conn->query($sql);

                // if ($result->num_rows > 0) {
                // // output data of each row
                // while($row = $result->fetch_assoc()) {
                //     echo "Reservation: " . $row["name"]. "   " . $row["phone"]."   " . $row["email"]."   " . $row["start_location"]."   " . $row["stop_location"]."   " . $row["num_students"]. "<br>";
                // }
                // } else {
                // echo "0 results";
                // }   
            ?>
</body>
</html>
