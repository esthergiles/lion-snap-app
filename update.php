<?php
// Start the session
session_start();
include("database.php"); // defines database connection details

// Set session variables
// $_SESSION["resid"] = "$_GET['resid']";
$resid= $_GET['resid'];

  // searching for reservation data based on reservation ID passed in from URL
  $sql = "SELECT * FROM reservations WHERE res_ID='" . $_GET['resid'] . "'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
?>
<html>
<head>
       <!-- Required meta tags -->
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles/request_form_style.css">
    <link rel="stylesheet" href="styles/style.css">

    <title>&nbsp; UNA SNAP </title>

</head>

<body>
  <!-- Scripts for Bootstrap -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
      <li class="nav-item">
        <a class="nav-link" href="index.html">Home </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="request_form.php">New Request</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="manage.php">Managed Existing Request<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>

<body>
<!-- TODO update form action to send to insert. -->
<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <div class="card">
            <h3>STUDENT NIGHTTIME AUXILIARY PATROL</h3>
            <p class="blue-text">You have requested to update a reservation.</p>

                <h5 class="text-center mb-4">Enter New Details</h5>
                <form class="form-card"  action ="do_update.php?resid=<?php echo $resid;?>" method="POST">
                    <div class="row justify-content-between text-left">
                        <!-- TODO: replace placeholders with PHP variables pulled in from database -->
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">First name<span class="text-danger"> *</span></label> <input type="text" id="fname" name="fname" value="<?php echo $row["fname"]; ?>" onblur="validate(1)"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Last name<span class="text-danger"> *</span></label> <input type="text" id="lname" name="lname" value="<?php echo $row["lname"]; ?>" onblur="validate(2)"> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">UNA Email<span class="text-danger"> *</span></label> <input type="text" id="email" name="email" value="<?php echo $row["email"]; ?>" onblur="validate(3)"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Phone number<span class="text-danger"> *</span></label> <input type="text" id="mob" name="mob" value="<?php echo $row["phone"]; ?>" onblur="validate(4)"> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Pickup Location<span class="text-danger"> *</span></label> <input type="text" id="start_location" name="start_location" value="<?php echo $row["start_location"]; ?>" onblur="validate(5)"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Dropoff Location<span class="text-danger"> *</span></label> <input type="text" id="end_location" name="end_location" value="<?php echo $row["stop_location"]; ?>" onblur="validate(6)"> </div>                    </div>
                                        <div class="row justify-content-between text-left">
                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Number of Students<span class="text-danger"> *</span></label> <input type="text" id="num" name="num" value="<?php echo $row["num_students"]; ?>" onblur="validate(7)"> </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary">Update Request</button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>