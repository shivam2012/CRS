<?php
session_start();
include "db.php";
$email=$_POST['username'];
$password=$_POST['password'];
$sql="select pass from signup where email='$email'";

$v=mysqli_query($dbc,$sql);
$a = mysqli_fetch_array($v);
if(!mysqli_error($dbc))
{
if($a)
{
  echo $a[0];
  if($password==$a[0])
  {
    //send to userv dashboard page

    $_SESSION['username']= $email;
    $_SESSION['password']= $password;
    header("Location:form.html");
    exit();
  }
  else {

    //show wrong password msg
    echo "shit";
    header("Location:complainant.html");
  }
}
else{
  //<script type="text/javascript"> alert("No account exist with this email-id. Please signup first.");</script>
  header("Location: /Emailio/login.php");
  var_dump(mysqli_error($dbc));
}
}
else{
  echo "Connection Problem";
}
mysqli_close($dbc);
?>
