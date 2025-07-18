<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject =$_POST['subject'];
$message =$_POST['message'];




$con=mysqli_connect("localhost","root","","gogreen");
echo "connect ";
if (!$con)

{
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "INSERT INTO finalcontact (name,email ,  subject, message) VALUES ('$name', '$email','$subject','$message')";

if (mysqli_query($con, $sql)) 
{
  echo "New record created successfully";
} else 
{
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);

?>