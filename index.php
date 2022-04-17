<html>
<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
<title>&nbsp; UNA SNAP </title>
</head>

<body>
  <!-- Scripts for Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- Nav Bar -->
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="https://www.una.edu">
    <img src="https://una.elluciancrmrecruit.com/Apply/File/DownloadPicture?name=una_logo2" width= "275px">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="request_form.php">New Request</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="manage.php">Managed Existing Request</a>
      </li>
    </ul>
  </div>
</nav>
<h1>
STUDENT NIGHTTIME AUXILIARY PATROL (SNAP)
</h1>
<div>
SNAP provides nightly escorts anywhere on campus to persons on request. 
The service is staffed by students equipped and supervised by the University Police Department.

Escorts are routed on foot or in a University Police Golf Cart. A person requesting an escort may 
contact SNAP via telephone at 256-765-4357 (HELP) or fill out a request online via the "New Request" tab.
 The requester provides their first name, location of pick-up and destination and an escort is dispatched, to their location.
</div>

<h2> Purpose </h2>
<div>The Student Nighttime Auxiliary Patrol (SNAP) was implemented to provide safe, nighttime transportation on the University of North Alabama campus. The "buddy system" has long been recognized as a means of enhancing personal safety and security. SNAP provides an on-call "buddy" ready to escort university students, staff, faculty and visitors.
</div>


<h2>Hours of Operation:</h2>
<div>Fall and Spring Semesters
7:30 PM to 1:30 AM
</div>

<h2>Apply for a Job with SNAP:</h2>
<div>The UNA Police recruits SNAP workers from the students on campus. To be hired as a SNAP worker, apply on line at career.una.edu and clicking on Lion Jobs.
</div>

<div>"Working Together for a Safer Community"</div>

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
