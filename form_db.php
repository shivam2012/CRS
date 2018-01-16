<?php
include "db.php";
$n= $_POST["name"];
echo "<br>";
$fn= $_POST["father_name"];
echo "<br>";
$a= $_POST["add"];
echo "<br>";
$oc=$_POST["occupation"];
echo "<br>";
$em=$_POST["email"];
$contact=$_POST["contact"];
$dob=$_POST["dob"];
$na=$_POST["nation"];
echo "<br>";
$adh=$_POST["Aadhar"];
$pno=$_POST["pass"];
$dl=$_POST["dl"];
$tc=$_POST["crime_type"];
$poc=$_POST["location"];
$ps=$_POST["ps"];
$sql="insert into fir(name,fathername,address,occupation,email,contact,dob,nationality,aadhar,passport,dl,toc,location,ps) values('$n','$fn','$a','$oc','$em',$contact,'$dob','$na',$adh,$pno,$dl,'$tc','$poc','$ps') ";
if(mysqli_query($dbc,$sql))
{
  echo "New Record has been entered into database";
}
else {
  echo "Shit happens ";
  var_dump(mysqli_error($dbc));
}
mysqli_close($dbc);
?>
