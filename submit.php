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

$photo = $_FILES['photo']['name'];
$signature = $_FILES['signature']['name'];
$marksheet = $_FILES['marksheet']['name'];
$caste = $_FILES['caste_certificate']['name'];

move_uploaded_file($_FILES['photo']['tmp_name'],"uploads/".$photo);
move_uploaded_file($_FILES['signature']['tmp_name'],"uploads/".$signature);
move_uploaded_file($_FILES['marksheet']['tmp_name'],"uploads/".$marksheet);
move_uploaded_file($_FILES['caste_certificate']['tmp_name'],"uploads/".$caste);

$sql="INSERT INTO users(name,father_name,mobile,email,address,qualification,district,state,pincode,photo,signature,marksheet,caste_certificate)

VALUES('$name','$father','$mobile','$email','$address','$qualification','$district','$state','$pincode','$photo','$signature','$marksheet','$caste')";

$conn->query($sql);

echo "Form Submitted Successfully";

?>
