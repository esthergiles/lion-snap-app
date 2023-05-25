<?php
include("database.php"); // defines database connection details

  // searching for reservation data
  $search = $_POST['email'];
  $sql = "SELECT * FROM reservations WHERE email='$search'";
  $result = $conn->query($sql);
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!-- Custom CSS -->
    <link rel="stylesheet" href="request_form_style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="table_style.css">


    <title>&nbsp; UNA SNAP </title>

     <!-- Toggle tool tip script -->
    <script type="text/javascript">
      $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();   
      });
    </script>

    <!-- Scripts for Bootstrap -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>

<body>
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

<!-- TODO update form action to send to insert. -->
<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <div class="card">
            <h3>STUDENT NIGHTTIME AUXILIARY PATROL</h3>
            <p class="blue-text">SNAP Escort Requests Associated With That Email</p>

                <h5 class="text-center mb-4">Manage Escort Request</h5>
                <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Phone</th>
                        <th>Pick Up</th>
                        <th>Drop Off</th>
                        <th>Num of Students</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
 <?php

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { 
?>
                <tr>

                  <td><?php echo $row['fname']; ?> </td>
                  <td><?php echo $row['lname']; ?> </td>
                  <td><?php echo $row['phone']; ?> </td>
                  <td><?php echo $row['start_location']; ?> </td>
                  <td><?php echo $row['stop_location']; ?> </td>
                  <td><?php echo $row['num_students']; ?> </td>
                  <td>
                      <a class="edit" title="Edit" data-toggle="tooltip" href="update.php?resid=<?php echo $row["res_ID"]; ?>"><i class="material-icons">&#xE254;</i></a>
                      <a class="delete" title="Delete" data-toggle="tooltip" href="delete.php?resid=<?php echo $row["res_ID"]; ?>"><i class="material-icons">&#xE872;</i></a>
                  </td>
                  </tr>
  <?php
  }} else { ?>
    <tr>
     <td colspan="8">No data found</td>
    </tr>
 <?php } ?>
                </tbody>
                </table>
              </div>
        </div>
    </div>
</div>


</body>
</html>