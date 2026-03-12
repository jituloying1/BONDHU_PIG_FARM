<?php

$name=$_POST['name'];
$father=$_POST['father'];
$mother=$_POST['mother'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$qualification=$_POST['qualification'];

$file="applications.csv";

$data=[$name,$father,$mother,$email,$phone,$qualification];

$fp=fopen($file,'a');

fputcsv($fp,$data);

fclose($fp);

echo "<h2>Application Submitted Successfully</h2>";

?>
