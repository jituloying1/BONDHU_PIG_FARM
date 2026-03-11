<?php

$conn = new mysqli("localhost","root","","userform");

$name = $_POST['name'];
$father = $_POST['father_name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$address = $_POST['address'];
$qualification = $_POST['qualification'];
$district = $_POST['district'];
$state = $_POST['state'];
$pincode = $_POST['pincode'];

$sql="INSERT INTO users(name,father_name,mobile,email,address,qualification,district,state,pincode)

VALUES('$name','$father','$mobile','$email','$address','$qualification','$district','$state','$pincode')";

$conn->query($sql);

echo "Form Submitted Successfully";

?>
