<html>
<head>
<title>&nbsp; UNA SNAP </title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- <br><img src="https://www.una.edu/police/images/snap%202.jpg" alt="Snap_Mascot" style="float:left;width:250px;height:250px"> </br> -->
</head>
<body>
 <!-- <form action="insert.php" method="POST">
            &nbsp; Name: <input type="text" name="name"><br>
            &nbsp; Phone: <input type="text" name="phone"><br>
            &nbsp; Email: <input type="text" name="email"><br>
            &nbsp; Start Location: <input type="text" name="start_loc"><br>
            &nbsp; Stop Location: <input type="text" name="stop_loc"><br>
            &nbsp; Number of Students: <input type="text" name="num_students"><br>
            &nbsp; <input type="submit">
        </form> -->



<section>
<div class="container">

	
		<div class="row mbr-justify-content-center">
                    <div class="col-lg-6 mbr-col-md-10">
                <div class="wrap">
                    <div class="ico-wrap">
                        <span class="mbr-iconfont fa-calendar fa"></span>
                    </div>

                    <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Schedule
                            <span>An Escort Request</span>
                        </h2>
                        <p class="mbr-fonts-style text1 mbr-text display-6">The service is staffed by students equipped and supervised by the University Police Department.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mbr-col-md-10">
                <div class="wrap">
                    <div class="ico-wrap">
                        <span class="mbr-iconfont fa-calendar-edit fa"></span>
                    </div>
                    <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Manage <span>Existing Request</span></h2>
                        <p class="mbr-fonts-style text1 mbr-text display-6">Need to change the pickup location or cancel a request? No problem.</p>
                    </div>
                </div>
            </div>
        </div>

</div>

</section>

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
                $sql = "SELECT * FROM reservations";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "Reservation: " . $row["name"]. "   " . $row["phone"]."   " . $row["email"]."   " . $row["start_location"]."   " . $row["stop_location"]."   " . $row["num_students"]. "<br>";
                }
                } else {
                echo "0 results";
                }   
            ?>
    <h2> Search For Reservation </h2>
    <form action = "" method="POST">
            &nbsp; Email: <input type="text" name="search_email"><br>
            &nbsp; <input type="submit">
        </form>

          <?php  
                $search = $_POST['search_email'];
                $sql = "SELECT * FROM reservations WHERE email='$search'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "Reservation: " . $row["name"]. "   " . $row["phone"]."   " . $row["email"]."   " . $row["start_location"]."   " . $row["stop_location"]."   " . $row["num_students"]. "<br>";
                }
                } else {
                echo "0 results";
                }   
            ?>
</body>
</html>
