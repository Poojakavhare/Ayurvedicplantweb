<?php


$email = $_POST['email'];


$con=mysqli_connect("localhost","root","","gogreen");
echo "connect ";
if (!$con)

{
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "INSERT INTO subscribe ( email ) VALUES ('$email')";

if (mysqli_query($con, $sql)) 
{
  echo "New record created successfully";
} else 
{
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);

?>