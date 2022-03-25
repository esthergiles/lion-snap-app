<html>
<head>
<title>UNA SNAP</title>
</head>
<body style="background-color:purple;color:gold;">
SNAP Form
</body>
</html>
<?php session_start();

$name = $_POST['name'];
$phone = $_POST['phone'];

$email = $_POST['email'];
$start_loc = $_POST['start_loc'];
$stop_loc = $_POST['stop_loc'];
?>
<html>
    <p> <br> Name: <?= $name ?> </br>
        <br> Phone: <?= $phone ?> </br>
        <br> Email: <?= $email ?> </br>
        <br> Start Location: <?= $start_loc ?> </br>
        <br> Stop Location: <?= $stop_loc ?> </br>
</p>
    
             
</html>

