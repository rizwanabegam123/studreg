<html>
<head>
<link rel="stylesheet" type="text/css" href="css/Bootstrap.css">
<link rel="stylesheet" type="text/css" href="js/bootstrap.js">
<link rel="stylesheet" type="text/css" href="style.css">
<style>
.container {
	position: absolute;
	left: 350px;
	margin: 20px;
	max-width: 600px;
	padding: 50px;
	background-color:rgb(0,0,0,0.3);
	top: 0px;
	width: 300px;
	height: 650px;
	color: white;
}
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100;
  opacity: 0.9;
}
.row:after {
  content: "";
  display: table;
  clear: both;
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
<
</style>
</head>

<body>
   
   <div class="row">
         <div class="col-md-7">
            <h1>REGISTRATION</h1>
             <p class="text-left">Work to become, not to acquire.</p>
         </div>
<right>
 <div class="container">
       
          <div class="col-md-5"></div>
              <div class="row">
                <div class="col-md-6">
                    <h3 class="text-left">REGISTRATION FORM</h3>
                </div>
                 <div class="col-md-6">
                    <span class="glyphicon-pencil"></span>
                 </div>  <table>
                 <hr>
                 <br> <div class="row">
                         <label class="label col-md-2 control-label">Username</label></div>
                         <div class="col-md-10">
                            <input type="username" class="form-control" name="username" placeholder="Username">
                          </div>
                       </div><br>
                   <div class="row">
                       <label class="label col-md-2 control-label">Password</div>
                        <div class="col-md-10">
                            <input type="password" class="form-control" name="password" placeholder="password"><br>
                            <input type="checkbox" onClick="myFunction()"><small>remember me</small>
                       </div>
                   </div><br>
                    <div class="row">
                       <label class="label col-md-2 control-label">Datev of birth</div>
                        <div class="col-md-10">
                            <input type="date" class="form-control" name="dob" placeholder="Date of birth"><br>
                       </div>
                   </div><br
                   <div class="row">
                       <label class="label col-md-2 control-label">address</div>
                        <div class="col-md-10">
                            <input type="textarea" class="form-control" name="address" placeholder="address"><br>
                       </div>
                    </div><br>
                    <div class="row">
                       <label class="label col-md-2 control-label">Gender</label>
                       <div class="col-md-10">
                           <input type="radio" name="gender" value="Male"><small>Male</small>
                           <input type="radio" name="gender" value="Female"><small>Female</small>
                       </div>
                    </div><br>
                    <div class="row">
                       <label class="label col-md-2 control-label">Education</label>
                        <div class="col-md-10">
                           <select class="form-control">
                           <option>Select</option>
                           <option>Bsc.,(c.s)</option>
                           <option>Bca</option>
                           <option>Bsc.,(I.T)</option>
                           </select>
                       </div>
                    </div><br>
                    <button type="submit" name="submit" class="btn">SUBMIT</button>                   
        </right> 
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
</script>
<script>
var myInput = document.getElementById("password");
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
<script>
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
