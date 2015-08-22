
<!--Christopher Tomsyck Assignment3-->

<html>
<head>
	<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
</head>
<body>
	<table>
		<tr>
		<td><th text-align="center">Thanks for Registration!</th></td>
		</tr>
		<tr>
		<td>&nbsp;</td>
		<td text-align="center">Your information is:</td>
		<td>&nbsp;</td>
		</tr>
		<tr>
		<td>&nbsp;</td>
		<td>First Name: <?php echo $_POST["firstname"]; ?></td>
		<td>&nbsp;</td>
		</tr>
		<tr>
		<td>&nbsp;</td>
		<td>Last Name: <?php echo $_POST["lastname"]; ?></td>
		<td>&nbsp;</td>
		</tr>
		<tr>
		<td>&nbsp;</td>
		<td>Address: <?php echo $_POST["address"]; ?></td>
		<td>&nbsp;</td>
		</tr>
		<tr>
		<td>&nbsp;</td>
		<td>State: <?php echo $_POST["state"]; ?></td>
		<td>&nbsp;</td>
		</tr>
		<tr>
		<td>&nbsp;</td>
		<td>Zip: <?php echo $_POST["zip"]; ?></td>
		<td>&nbsp;</td>
		</tr>
		<tr>
		<td>&nbsp;</td>
		<td>Telephone: <?php echo $_POST["telephone"]; ?></td>
		<td>&nbsp;</td>
		</tr>
		<tr>
		<td>&nbsp;</td>
		<td>Email: <?php echo $_POST["email"]; ?></td>
		<td>&nbsp;</td>
		</tr>
		<tr>
		<td>&nbsp;</td>
		<td align="center"><a href="Assignment3.html">Return to the main page</a></td>:
		<td>&nbsp;</td>
		</tr>
	</table>
	

	<?php
	//open file and append it to add data and then close it
	$myFile = "data.txt";
	$fd = fopen($myFile, 'a');
	$newList=implode(",", $_POST) . "\n";
	fwrite($fd, $newList);
	fclose($fd);
	?>
	
</body>
</html>