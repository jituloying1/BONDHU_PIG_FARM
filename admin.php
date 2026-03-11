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
<th>Photo</th>
<th>Signature</th>
<th>Marksheet</th>
<th>Caste Certificate</th>
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

<td><a href='uploads/".$row['photo']."' target='_blank'>View</a></td>

<td><a href='uploads/".$row['signature']."' target='_blank'>View</a></td>

<td><a href='uploads/".$row['marksheet']."' target='_blank'>Download</a></td>

<td><a href='uploads/".$row['caste_certificate']."' target='_blank'>Download</a></td>

</tr>";

}

?>

</table>
