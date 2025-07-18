<?php

$name = $_POST['name'];
$email = $_POST['email'];
$comment =$_POST['comment'];




$con=mysqli_connect("localhost","root","","gogreen");
echo "connect ";
if (!$con)

{
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "INSERT INTO comment1 (name,email ,  comment) VALUES ('$name', '$email','$comment')";

if (mysqli_query($con, $sql)) 
{
  echo "New record created successfully";
} else 
{
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);

?>