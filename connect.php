<?php
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$password=$_POST['password'];

//
$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
die('connection Failed :'.$conn->connect_error);
}else{
$stmt = $conn->prepare("insert into contsct(name,email,password,address)values(?,?,?,?<)");
  $stmt->bind_param("ssssi",$name,$email,$password,$address);
  $stmt->close();
  $conn->close();
}
?>
