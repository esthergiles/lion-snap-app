<html>
<head>
<title>&nbsp; UNA SNAP </title>

<br><img src="https://www.una.edu/police/images/snap%202.jpg" alt="Snap_Mascot" style="float:left;width:250px;height:250px"> </br>
</head>
<body style="background-color:purple;color:gold;">
&nbsp SNAP Form
</body>
</html>

 <form action="insert.php" method="POST">
            &nbsp; Name: <input type="text" name="name"><br>
            &nbsp; Phone: <input type="text" name="phone"><br>
            &nbsp; Email: <input type="text" name="email"><br>
            &nbsp; Start Location: <input type="text" name="start_loc"><br>
            &nbsp; Stop Location: <input type="text" name="stop_loc"><br>
            &nbsp; <input type="submit">
        </form>


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
                $sql = "SELECT firstname FROM test";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "Name: " . $row["firstname"]. "<br>";
                }
                } else {
                echo "0 results";
                }   
            ?>

