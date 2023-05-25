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
    <link rel="stylesheet" href="request_form_style.css">
    <link rel="stylesheet" href="style.css">

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
        <a class="nav-link" href="index.html">About </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="request_form.php">New Request<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="manage.php">Managed Existing Request</a>
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
            <p class="blue-text">SNAP provides nightly escorts anywhere on campus to persons on request.</p>

                <h5 class="text-center mb-4">Escort Request Details</h5>
                <form class="form-card"  action ="insert.php" method="POST">
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">First name<span class="text-danger"> *</span></label> <input type="text" id="fname" name="fname" placeholder="Enter your first name" onblur="validate(1)" required> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Last name<span class="text-danger"> *</span></label> <input type="text" id="lname" name="lname" placeholder="Enter your last name" onblur="validate(2)" required> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">UNA Email<span class="text-danger"> *</span></label> <input type="email" id="email" name="email" placeholder="email@una.edu" onblur="validate(3)" required> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Phone number<span class="text-danger"> *</span></label> <input type="tel" id="mob" name="mob" placeholder="123-456-7899" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" onblur="validate(4)" required> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Pickup Location<span class="text-danger"> *</span></label> <input type="text" id="start_location" name="start_location" value="Raburn" onblur="validate(5)" required> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Dropoff Location<span class="text-danger"> *</span></label> <input type="text" id="end_location" name="end_location" placeholder="Enter End Location" onblur="validate(6)" required> </div>                    </div>
                                        <div class="row justify-content-between text-left">
                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Number of Students<span class="text-danger"> *</span></label> <input type="number" min="1" max ="10" id="num" name="num" placeholder="2" onblur="validate(7)" required> </div>
                     <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Date & Time <span class="text-danger"> *</span></label> <input type="datetime-local" id="num" name="datetime" placeholder="" onblur="validate(7)"> </div>

                    </div>
                    <div class="row justify-content-end">
                        <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary">Submit Request</button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
