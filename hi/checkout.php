<?php
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$town = $_POST['town'];
$state = $_POST['state'];
$country = $_POST['country'];
$pin = $_POST['pin'];
$note = $_POST['note'];



#$lastname = $_POST['lastname'];
/*$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$town = $_POST['town'];
$state = $_POST['state'];
$country = $_POST['country'];
$pin = $_POST['pin'];
$note = $_POST['note'];
*/




$con=mysqli_connect("localhost","root","","gogreen");
echo "connect ";
if (!$con)

{
  die("Connection failed: " . mysqli_connect_error());
}


#$sql = "INSERT INTO checkout ( name, lastname , email,phone, address,town,state ,country,pin,note) VALUES ('$name', '$lastname','$email','$phone','$address','$town','$state','$country','$pin',$note')";

$sql = "INSERT INTO checkout ( name , lastname , email , phone , address,town,state,country,pin,note) VALUES ('$name' ,'$lastname' ,'$email' ,'$phone' ,'$address','$town','$state','$country' , '$pin' ,'$note')";

if (mysqli_query($con, $sql)) 
{
  echo "new record inserted";
} else 
{
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);

?>