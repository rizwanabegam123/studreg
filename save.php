<?php
con=new mysqli("localhost","root","","admin1");
$username=$_POST['username'];
$password=$_POST['password'];
$dob=$_post['dob'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$sql="insert into register (username,city,dob,gender,adress,contact,emial) values ('{$username}','{$password}','{$dob}','{$gender}','{$address}','{$contact}','{$email}');
if($con->query($sql))
{
   echo "data saved";
}
else
{
   echo "Error in saving data";
}   
?>