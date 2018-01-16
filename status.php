<?php 
session_start();
include "db.php";
$email=$_SESSION['username'];
$password=$_SESSION['password'];
$sql="select fname,lname from signup where email='$email'";
$v=mysqli_query($dbc,$sql);
$a = mysqli_fetch_array($v);
?>

<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="materialize/css/materialize.min.css" />
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="form.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</head>

<body>
    <!--navbar-->
    <nav class="#212121 grey darken-4">
        <div class="nav-container">
            <div class="nav-wrapper ">
                <a href="index.html" class="brand-logo"><img height="62px" width="80px" src="http://is4.mzstatic.com/image/thumb/Music62/v4/9f/23/5f/9f235f94-6701-f746-ee6c-5338e33a15b0/source/1200x630bb.jpg" height="100"></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="index.html">Home</a></li>
                    <li><a class="modal-trigger" href="#modal1">About</a></li>
                    <li><a class="modal-trigger" href="#modal2">Contact us</a></li>
                </ul>
            </div>
        </div>
    </nav>

<div class="container">
    <br>
    <div class="card hoverable">
        <center>
            <br>
            <h3 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">hey! <?php echo $a[0]; echo $a[1]; ?> Your case is under investigation...</h3>
            <br>
        </center>
    </div>
    <div class="progress">
        <div class="indeterminate"></div>
    </div>
    <div class="card hoverable">
        <center>
            <br>
                
            <br>
        </center>
    </div>

</div>
</div>
</div>
</body>
</html>