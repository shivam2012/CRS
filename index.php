<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8"/>
  <meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='expires' content='0'>
<meta http-equiv='pragma' content='no-cache'>

<style>
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<title>
Crime Reporting System
</title>
<link rel="stylesheet" href="form.css" />
</head>
<body >

<h1>Online Crime Reporting System</h1>
<br />
<h2> First Information Report </h2>
<br />
<div id="form" >
<form action="crs_form.php" method="post">
  <div class="container1">
  <ul class="collapsible popout " data-collapsible="accordion">
    <li>
<div class="collapsible-header hoverable"><h3 style="font-size:38px;font-family:Old English Text MT;"> complainant/witness information</h3></div>
<div class="collapsible-body container2">
<div class="row">
  <div class="col s5">
<b>Name:</b><br>
<i class=" material-icons">account_box</i>
<input class="fo" id="bla" onclick="myFunction(this.className)" type="text" placeholder="Enter your Name" size="20" maxlength="25" name="name" required />
</div>
<div class="col s5 offset-s2 ">
<b>Father's/Husband's Name:</b>
<br>
<i class=" material-icons">portrait</i>
<input class="do" id="bla" onclick="myFunction(this.className)" type="text" placeholder="Enter Father's or husband's Name" size="25" maxlength="25" name="father_name" required/>
</div>
</div>
<div class="row">
  <div class="col s5">
<b>Address:</b>
<br>
<i class="material-icons">home</i>
<input class="so" id="bla" onclick="myFunction(this.className)" type="text" placeholder="Enter your Address" size="50" maxlength="40" name="add" required />
</div>
<div class="col s5 offset-s2">
<b>Occupation:</b>
<br>
<i class=" material-icons">business_center</i>
<input class="ao" id="bla" onclick="myFunction(this.className)" type="text" placeholder="Enter your occupation" size="20" maxlength="20" name="occupation" required/>
</div>
</div>
<div class="row">
  <div class="col s5">
<b>Email ID:</b>
<br>
<i class=" material-icons">email</i>
<input class="po" id="bla" onclick="myFunction(this.className)" type="email" required placeholder="Enter your Email ID" size="15" maxlength="12" name="email" />
</div>
<div class="col s5 offset-s2">
<b>Contact No:</b>
<br>
<i class=" material-icons">local_phone</i>
<input class="oo" id="bla" onclick="myFunction(this.className)" type="tel" placeholder="Enter your contact no." size="15" maxlength="10" name="contact" required />
</div>
</div>
<div class="row">
  <div class ="col s5">
<b>DOB:</b>
<br>
<i class=" material-icons">cake</i>
<input class="io" id="bla" onclick="myFunction(this.className)" type="date" name="dob" required />
</div>
<div class="col s5 offset-s2">
<b>Nationality:</b>
<br>
<i class=" material-icons">person</i>
<input class="uo" id="bla" onclick="myFunction(this.className)" type="text" placeholder="Enter your Nationality" size="15" maxlength="10" name="nation" required />
</div>
</div>
<br/>
<br/>
</div>
</li>
<li>
  <div class="collapsible-header hoverable">
<h3 style="font-size:38px;font-family:Old English Text MT">multiple id proof</h3>
</div>
<div class="collapsible-body container2">
<div class="row">
  <div class="col s9">
<b>Aadhar number:</b>
<br>
<i class="material-icons">contact_mail</i>
<input class="yo" id="bla" onclick="myFunction(this.className)" type="text" placeholder="Enter your Aadhar No." size="15" maxlength="12" name="Aadhrar" required />
</div>
<br>
<div class="col s9">
<b>Passport number:</b>
<br>
<i class="material-icons">contact_mail</i>
<input class="to" id="bla" onclick="myFunction(this.className)" type="text" placeholder="Enter your Passport No." size="35" maxlength="15" name="pass" required/>
</div>
<br>
<div class="col s9">
<b>Driving Licence number:</b>
<br>
<i class="material-icons">contact_mail</i>
<input class="ro" id="bla" onclick="myFunction(this.className)" type="text" placeholder="Enter your Driving Licence number" size="40" maxlength="20" name="dl" required/>
</div>
</div>
<br/><br>
</div>
</li>
<li>
  <div class="collapsible-header hoverable">
<h3 style="font-size:38px;font-family:Old English Text MT"> type of crime </h3>
</div>
<div class="collapsible-body container2">
<div class="row">
  <div class="col s5">
<b>Select the type of Crime:</b>
</div>
<div class="offset-s2 col s5">
<i class="material-icons">report</i>
<input placeholder="PLease select the type of crime" class="eo" id="bla" onclick="myFunction(this.className)" list="crime" name="crime_type">
  <datalist id="crime">
    <option value="Theft">
    <option value="Murder">
    <option value="Kidnapping">
    <option value="Drink & Drive">
    <option value="Fraud">
    <option value="Sexual Harrassment">
    <option value="Drugs Paddling">
    <option value="Others">
  </datalist>
</div>
</div>
<br/><br>
</div>
</li>
<li>
  <div class="collapsible-header hoverable">
<h3 style="font-size:38px;font-family:Old English Text MT">place of occurrence</h3>
</div>
<div class="collapsible-body container2">
<div class="row">
  <div class="col s5">
<b>Location:</b>
<br>
<i class="material-icons">location_on</i>
<input class="wo" id="bla" onclick="myFunction(this.className)" type="text" placeholder="Enter the Address of occurrence of Crime" size="50" maxlength="40" name="location" required />
</div>
<div class="col s5 offset-s2">
<b>Nearest Police Station:<b>
<br>
<i class="material-icons">store</i>
<input class="qo" id="bla" onclick="myFunction(this.className)" type="text" placeholder="Enter nearest Police Station" size="20" maxlength="20" name="ps" required />
</div>
</div>
</div>
<br/>
</ul>
</div>
<center><button id="submit" type="submit" value="Submit" name="submit" onclick="validation()" >Submit<i id="sub" class="material-icons right">send</i></button></center>
</form>
</div>
<script>
function myFunction(x) {
	console.log(x);
    var a = document.getElementsByClassName(x);
    document.createAttribute("id");
    for (var i = 0; i < a.length; i++){
    if((a[0].className == x) &&(a[0].id == "bla"))
    {
		a[0].setAttribute("id","bla1");
    }
    else{
    	a[0].setAttribute("id","bla");
    }
    }
    }




  //console.log(ar[0].className);
  /*

  Code to change the classes

  document.getElementsByclassName(x);
  for (var i = 0; i <= ar.length; i++) {
    if(ar[0].className == "c1")
    {
      ar[0].setAttribute("class","c2");

    }
    else
    {
      ar[0].setAttribute("class","c1");
    }*/
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js">
</script>
<script>
$(document).ready(function(){
  $('.collapsible').collapsible('open', 0);
});
</script>

</body>
</html>

<!--



<select id="bla" name="crime">
<option selected>Type of Crime </option>
<option>Theft</option>
<option>Murder</option>
<option>Kidnapping</option>
<option>Drink & Drive</option>
<option>Fraud</option>
<option>Sexual Harrassment</option>
<option>Drugs Paddling</option>
<option>Others</option>
</select>



<!DOCTYPE html>
<html>
<head>
<style>
.democlass {
    color: red;
    transition:400;
}
.sumoclass {
color: black;
    transition:400;
}
</style>
</head>
<body>

<h1 class="a" onclick="myFunction(this.className)">Hello World</h1>
<h1 class="b" onclick="myFunction(this.className)"> Pinki </h1>

<p>Click the button to create a "class" attribute with the value "democlass" and insert it to the H1 element above.</p>

<button onclick="myFunction()">Try it</button>

<script>
function myFunction(c) {
    var h1 = document.getElementsByClassName(c);
    var att = document.createAttribute("class");
    //att.value = "democlass";

    if(att.value=="democlass")
    {
    	att.value = "sumoclass";
    }
    else{
    	att.value = "democlass";
    }
    h1.setAttributeNode(att);
}
</script>

</body>
</html>


console.log(ar[0].style.borderColor);
for (var i = 0; i <= ar.length; i++){
if (ar[0].style.borderColor == "black"){
  ar[0].style.borderColor = "white;"
  console.log(ar[0].style.borderColor);
}
else {
ar[0].style.borderColor = "black";
}
}
-->
