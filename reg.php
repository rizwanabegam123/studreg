<html>
<head>
<title>file upload</title>
<center>
<h1>Register</h1>
</head>
<body>

<form method="post" method="post">
	<label>Full name</label>
	<input type="text" name="fullname"><br><br><br>
	<label>Date of birth</label>
	<input type="date" id="dob" name="dob"><br><br><br>
	<label>Gender</label>
	<input type="radio" id="male" name="gender" value="male">
	<label for="male">Male</label>
	<input type="radio" id="female" name="gender" value="female">
	<label for="female">Female</label><br><br><br>
	<label>Education</label>
	<select id="education" name="education">
	<option value="select">-select-</option>
	<option value="bsc">bsc</option>
	<option value="engineering">engineering</option>
	</select><br><br><br>
	<label>Name of the institution</label>
	<input type="text" name="institution"><br><br><br>
	<label>Resume</label>
	<input type="file" name="resume">
<style>
#drop_zone{
       background-color: #EEE;
       broder: #999 5px dashed;
       width: 290px;
       height: 200px;
       padding: 8px;
       font_size: 18px;
}
</style>
<script>
function drag_drop(event)  {
       event.preventDefault();
       alert(event.dataTransfer.files[0]);
       alert(event.dataTransfer.files[0].name);
       alert(event.dataTransfer.files[0].size+"bytes");
       

}
</script><br><br><br>
<div id="drop_zone" ondrop="drag_drop(event)" ondragover="return false"></div><br><br><br>
	<button type="submit" name="submit">SUBMIT</button>
</center>
</from>
</body>
</html>
	



<?php



if(isset($_post['submit'])) {
	$fullname = $_POST['fullname'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$education = $_POST['education'];
	$institution = $_POST['institution'];
	
        mysql_connect("localhost","root","");
 	mysql_select_db("admin1");
	mysql_query("insert into register values('$fullname','$dob','$gender','$education','$institution')");
	echo "<script> alert('Inserted Successfully') </script>";
	header("Location:view.php");
	{
		"<script> alert('Not inserted Successfully') </script>";
	}
}