<?php
include "db.php";
$em=$_POST["email"];
$fn=$_POST["fname"];
$ln=$_POST["lname"];
$pass=$_POST["pass"];
echo "<br>";
$sql="insert into signup(email,fname,lname,pass) values('$em','$fn','$ln','$pass') ";
if(mysqli_query($dbc,$sql))
{
  echo "New Record has been entered into database";
  header("Location:form.html");
}

else {
  echo "Shit happens ";
  var_dump(mysqli_error($dbc));
}
mysqli_close($dbc);
?>
