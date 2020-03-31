<html>
<head>
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
	left: 400px;
	margin: 20px;
	max-width: 200px;
	padding: 16px;
	background-color: white;
	top: 100px;
	width: 1200px;
	height:200px;
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
 
</div>
<div class="navbar">
  <a href="view.php"><b>VIEW INFORMATION OF THE STUDENT<b></a>
   <a href="index.html"><b>LOGOUT<b></a>
</div>
<body>
<div class="bg-img">
<form action="" class="container" method="post">
<?php
         if(isset($_POST['delete'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
				
            $fullname = $_POST['fullname'];
            
            $sql = "DELETE FROM register WHERE fullname = '$fullname'" ;
            mysql_select_db('admin1');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not delete data: ' . mysql_error());
            }
            
            echo "<center>Deleted data successfully\n</center>";
            
            mysql_close($conn);
         }else {
            ?>
              
<center>
<table>
                     
                     <tr>
                  <center>      <td width = "100">FULLNAME</td>
                        <td><input name = "fullname" type = "text" 
                           id = "r"></td>
                     </tr></center>
                     
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                     
                  <center>       <tr>
                        <td width = "100"> </td>
                        <td>
                       <input name = "delete" type = "submit" 
                              id = "delete" value = "Delete">
                        </td>
                     </tr>
					 </center>
                 
                </table>
               </form>
			   
			   </body>
			   </html>
            
			
			<?php
         }
      ?>
