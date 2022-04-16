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
<div class="container-fluid">
		<div class="navbar-header">
			<!-- Navbar Brand -->
			<a href="https://www.una.edu" class="navbar-brand recruit-navbar-logo"></a>
		</div>

		<div class="collapse navbar-collapse" id="recruit-nav-components">
			<!-- Navbar Menu -->
			<ul class="nav navbar-nav main-navbar navbar-left" id="elcn-nav-main">
				<li class="active">
					<a href="/request_form.php" aria-label="Request Form">New Request</a>
				</li>
				<li>
					<a href="/manage_request.php" aria-label="Manage Existing Request">Manage Existing Request</a>
				 </li>
				<li>
                    <a href='/Apply/Application/ApplicationList' aria-label='Apply Online'>FAQ</a>
                </li>   
            </ul>
        </div>
    </div>


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
