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


.container {
	position: absolute;
	left: 500px;

	margin: 20px;
	max-width: 300px;
	padding: 16px;
	background-color: white;
	top: 226px;
	width: 775px;
	height: 387px;
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

/* Set a style for the submit button */
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
</style>
</head>
<body>


<div class="bg-img">
  <form action="" class="container" method="post">
    <h1>LOGIN</h1>

    <label for="user"><b>USERNAME</b></label>
    <input type="text"  name="user" required>

    <label for="pass"><b>PASSWORD</b></label>
    <input type="password"  name="pass" required="" id="myInput">
	<input type="checkbox" onClick="myFunction()">Show Password <br><br>

    <button type="submit" name="submit" class="btn">submit</button>
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
if(isset($_POST['submit']))
{
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	if($user == "admin" && $pass == "123")
	{
		header("Location:view.php");
	}
	else
	{
	echo "<script>alert('please provide the valid username and password')</script>";
	}
}
?>