<html>
<head>
</head>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}
{
  margin: 0;
}

.header {
  background-color: #f1f1f1 ;
  padding: 20px;
  text-align: center;
}

.navbar {
  overflow: hidden;
  background-color: #CBA75E;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: black ;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.navbar a:hover {
  background-color: white   ;
}


.column {
  float: left;
  width: 33%;
  padding: 5px;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}
{
  box-sizing: border-box;
}

.container {
	position: absolute;
	left: 0px;
	margin: 20px;
	max-width: 1200px;
	padding: 16px;
	background-color: white;
	top: 100px;
	width: 1200px;
	height:500px;
}


input[type=text], input[type=text], input[type="text"] {
  width: 100%;
  padding: 5px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=text]:focus,  input[type=text]:focus {
  background-color: #ddd;
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

</style>
</head>
<body>
<div class="header">
  <h1>STUDENT REGISTRATION</h1>
</div>
<div class="navbar">
     <a href="index.html"><b>LOGOUT<b></a>
  </div>
<body>


<div class="bg-img">
  <form action="" class="container" method="post">
	<h1>STUDENET INFORMATION</h1>
	 <div align="center">
	<table border='1'><tr><td>FULLNAME</td><td>DATE OF BIRTH</td><td>GENDER</td><td>EDUCATION</td><td>INSTITUTION</td></tr>
	 <?php
mysql_connect("localhost","root","");
mysql_select_db("admin1");
$r=mysql_query("select *from register");
echo "<center>";
while($row=mysql_fetch_array($r))
{
$a=$row[0];
$b=$row[1];
$c=$row[2];
$d=$row[3];
$e=$row[4];


echo "<tr><td>$a</td><td>$b</td><td>$c</td><td>$d</td><td>$e</td><td><a href='delete1.php'>DELETE</a></td></tr>";
echo "</center>";
}
?>
</table>
</div>
</body>
</html>

	 