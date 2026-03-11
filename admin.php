<?php

$conn = new mysqli("localhost","root","","userform");

$result = $conn->query("SELECT * FROM users");

?>

<h2>Admin Panel</h2>

<a href="export.php">
<button>Download Excel Sheet</button>
</a>

<table border="1">

<tr>
<th>Name</th>
<th>Father Name</th>
<th>Mobile</th>
<th>Email</th>
<th>Qualification</th>
<th>District</th>
<th>State</th>
<th>Pincode</th>
</tr>

<?php

while($row = $result->fetch_assoc())
{

echo "<tr>
<td>".$row['name']."</td>
<td>".$row['father_name']."</td>
<td>".$row['mobile']."</td>
<td>".$row['email']."</td>
<td>".$row['qualification']."</td>
<td>".$row['district']."</td>
<td>".$row['state']."</td>
<td>".$row['pincode']."</td>
</tr>";

}

?>

</table>
