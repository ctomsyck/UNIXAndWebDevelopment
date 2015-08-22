<html>
<head>
	<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
</head>
<body>
<?php
   $username="root";
   $password="#######";
   $database="ct4598";

   $firstname=$_POST["firstname"];
   $lastname=$_POST["lastname"];
   $address=$_POST["address"];
   $state=$_POST["state"];
   $zip=$_POST["zip"];
   $telephone=$_POST["telephone"];
   $email=$_POST["email"];
   
   mysql_connect("localhost",$username,$password)
        or die("Could not connect to database");
   mysql_select_db($database)
       or die("Could not select database.");
			
   $query = "INSERT INTO person
	        VALUES('', '$firstname', '$lastname', '$address', '$state', '$zip', '$telephone', '$email')";mysql_query($query);mysql_close();			
	
?>
<table>
    <td>&nbsp;</td>
    <td align="center"><a href="Assignment3.html">Return to the main page</a></td>:
    <td>&nbsp;</td>
</table>
</body>
</html>