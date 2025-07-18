<?php

$uname = $_POST['uname'];
$pass = $_POST['pass'];



$con=mysqli_connect("localhost","root","","gogreen");
#echo "connect ";
if (!$con)

{
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "INSERT INTO logindetails (uname, pass) VALUES ('$uname', '$pass')";

if (mysqli_query($con, $sql)) 
{
  echo' <script tupe="text/javascript">';
   echo 'function p(){ window.open("checkout.html")}' ;
   echo '</script>';
  echo "insserted";
} else 
{
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);

?>