
<!--Christopher Tomsyck Assignment3-->

<html>
<head>
	<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
</head>
<body>

<form>
<h1>Existing Contacts</h1>

<?php
$handle = @fopen("data.txt", "r");
$num=1;
if ($handle) {
    while (($buffer = fgets($handle, 4096)) !== false) {
		$info=explode(",",$buffer);
		$num;
        echo "Contact $num";
		$num=$num+1;
		echo "<br>";
		echo 'First Name: ';
		echo $info[0];
		echo "<br>";
		echo 'Last Name: ';
		echo $info[1];
		echo "<br>";
		echo 'Address: ';
		echo $info[2];
		echo "<br>";
		echo 'State: ';
		echo $info[3];
		echo "<br>";
		echo 'Zip: ';
		echo $info[4];
		echo "<br>";
		echo 'Telephone: ';
		echo $info[5];
		echo "<br>";
		echo 'Email: ';
		echo $info[6];
		echo "<br>";
		echo "<br>";
		
    }
    if (!feof($handle)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose($handle);
}
?>

<a href="Assignment3.html">Return to the main page</a>
</form>

</body>
</html>