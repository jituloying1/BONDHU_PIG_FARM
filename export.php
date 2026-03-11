<?php

$conn = new mysqli("localhost","root","","userform");

header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=userdata.xls");

$result = $conn->query("SELECT * FROM users");

echo "Name\tFather Name\tMobile\tEmail\tQualification\tDistrict\tState\tPincode\n";

while($row = $result->fetch_assoc())
{
echo $row['name']."\t".
$row['father_name']."\t".
$row['mobile']."\t".
$row['email']."\t".
$row['qualification']."\t".
$row['district']."\t".
$row['state']."\t".
$row['pincode']."\n";
}

?>
