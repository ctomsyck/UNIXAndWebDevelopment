
<?php
$con=mysqli_connect("localhost","root","#######","ct4598");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM person");

echo "<table border='1'>
<tr>
<th>firstname</th>
<th>lastname</th>
<th>address</th>
<th>state</th>
<th>zip</th>
<th>telephone</th>
<th>email</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['firstname'] . "</td>";
echo "<td>" . $row['lastname'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "<td>" . $row['state'] . "</td>";
echo "<td>" . $row['zip'] . "</td>";
echo "<td>" . $row['telephone'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>