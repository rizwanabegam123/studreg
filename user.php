<html>
<head>
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}


body{
	background-image:url(500_F_298508606_EbYS4kBtR4TYkJjKQ7vmF49h2Zb7WiQb.jpg);
	background-position:center;
	background-size:cover;
	font-family:sans-serif;
	margin-top:40px; 
	color: white;
}
.container {
	position: absolute;
	left: 350px;
	margin: 20px;
	max-width: 600px;
	padding: 50px;
	background-color:rgb(0,0,0,0.3);
	top: 172px;
	width: 650px;
	height: 650px;
	color: white;
}
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
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

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>


<div>
  <form action="" class="container" method="post">
    <h1>LOGIN</h1>
     <div calss="tbox">
     <label for="user"><b>USERNAME</b></label>
    <input type="text"  name="username" required>
    <label for="pass"><b>PASSWORD</b></label>
    <input type="password"  name="password" required="" id="myInput">
	<input type="checkbox" onClick="myFunction()">Show Password <br><br>
    <button type="submit" name="submit" class="btn">SUBMIT</button>
	<p color="white"><a href="reg3.php"><b>NEW USER?</b></a></p>
       
  </form>
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
</body>
</html>


<?php
session_start();
if(isset($_POST['submit']))
{
 mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('admin1') or die(mysql_error());
 $username=$_POST['username'];
 $password=$_POST['password'];
 if($username!=''&&$password!='')
 {
   $query=mysql_query("select * from register where username='".$username."' and password='".$password."'") or die(mysql_error());
   $res=mysql_fetch_row($query);
   if($res)
   {
    $_SESSION['username']=$username;
   header('location:view1.php');
   }
   else
   {
    echo "<script> alert('You entered username or password is incorrect')</script>";
   }
 }
 else
 {
  echo "<script>alert('Enter both username and password')></script>";
 }
}
?>