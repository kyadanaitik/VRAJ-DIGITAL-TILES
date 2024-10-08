<?php
$con = mysqli_connect('localhost','root');
$name =  $
if($con){
  echo "Conenction Successful";
}else {
  echo "No Conenction";
}

mysqli_select_db($con,'vrajdata');

$user = $_POST["user"];
$email = $_POST["email"];
$Mobile = $_POST["Mobile"];
$message = $_POST["message"];
echo "$name";89km, 

$query = "insert into contectdata(user,email,Mobile,message)
values('$user','$email','$Mobile','$message')";

mysqli_query($con,$query);



 ?>
