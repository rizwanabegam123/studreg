<html>
<head>
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

.header {
  background-color:rgb(0,0,0,0.5);
  padding: 20px;
  text-align: center; 
  color: white;               
}

.topnav {
  overflow: hidden;
  background-color: lightgreen;
}


.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}


.topnav a:hover {
  background-color: #ddd;
  color: black;
}


.column {
  float: left;
  padding: 10px;
}


.column.side {
  width: 25%;
}


.column.middle {
  width: 50%;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}


@media screen and (max-width: 600px) {
  .column.side, .column.middle {
    width: 100%;
  }
}


.footer {
  background-color: #f1f1f1;
  padding: 10px;
  text-align: center;
}
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: lightgreen;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgb(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: pink}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: green;
}
body{
	background-image:url(500_F_298508606_EbYS4kBtR4TYkJjKQ7vmF49h2Zb7WiQb.jpg);
	background-position:center;
	background-size:cover;
	font-family:sans-serif;
	margin-top:40px; 
	color: white;
}

* {
  box-sizing: border-box;
}

.container {
	position: absolute;
	left: 350px;
	margin: 20px;
	max-width: 600px;
	padding: 50px;
	background-color:rgb(0,0,0,0.3);
	top: 172px;
	width: 700px;
	height: 650px;
	color: white;
}


input[type=text], input[type=password], input[type="text"], input[type="text"],input[type="email"],input[type="date"],input[type="file"] {
  width: 100%;
  padding: 15px;


  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus, input[type=text]:focus, input[type=text]:focus{
  background-color: #ddd;
  font-color: #fff;
  outline: none;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
.main{
	background-color:rgb(0,0,0,0.5);
	width:800px;
	margin:auto;
}

#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "&#10004;";
}
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "&#10006;";
}
</style>
</head>

<body>
<div class="header">
    <h1>REGISTRATION</h1>
</div>
<div class="main">
  <form class="container">
    <h1>REGISTER HERE</h1>
<table>
	<tr><td><label for="name"><b>USERNAME</b></label></td>
   <td> <input type="text"  name="username" id="username" required></td></tr>
	<tr><td><label for="pass"><b>PASSWORD</b></label></td>
    <td><input type="password"  name="password" required="" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"></td></tr>
	<tr><td><input type="checkbox" onClick="myFunction()">Show Password <br><br></td></tr>	
	<tr><td><label for="gender"><b>GENDER</b></label></td>
        <td><input type="radio"  name="gender" value="male">Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"  name="gender"  value="female">Female</td></tr>
    <tr><td><label><b>DATE OF BIRTH<b></label></td>
      <td><input type="date" name="dob" id="dob"></td></tr>
 </tr><td><label for="address"><b>ADDRESS</b></label></td>
   <td><input type="text"  name="address"id="address" required></td></tr>
    <tr><td><label for="con"><b>CONTACT NUMBER</b></label></td>
    <td><input type="text"  name="contact" id="contact" required></td></tr>
    <tr><td><label for="email"><b>EMAIL</b></label></td>
   <td><input type="email" name="email" id="email" required></td></tr>
   <tr><td><label><b>RESUME</b></label></td>
   <td><input type="file" name="file" id="file"></td></tr>
         <tr><td><button type="submit" name="submit" class="btn" onclick="savedata()">SUBMIT</button></td></tr>
</table>
    </form>
<div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
</div>
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");


myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}


myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}


myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}


  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }


  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>

function savedata()
{
   if(window.XMLHttpRequest)
   {
       a=new XMLHttpRequest();
   } 
   else
      {
         a=new ActiveXObject("MICROSOFT.XMLHTTP");   
       }
      a.onreadystatechange=function() {
          if(a.readyState==4 && a.status==200)
          {
            alert(a.responseText);
          }
     }
     var username=document.getElementByID("username").value;
     var password=document.getElementByID("password").value;
     var gender=document.getElementByID("gender1").value;
     var gender=document.getElementById("gender2").value;
     var address=document.getElementById("address").value;
     var contact=document.getElementByID("contact").value;
     var email=document.getElementById("email").value;
     var url="save.php";
     var val="username="+username+"&password="+password+"&gender="+gender"+"&address="+address+"&contact="+contact+"&email="+email;
     a.open("POST",url,true);
     a.setRequestHeader("content-type","application/x-www-form-urlencoded");
     a.setRequestHeader("content-length",val.length);
     a.setRequestHeader("connection","close");
     a.send(val);
}
</script>
</body>
</html>


