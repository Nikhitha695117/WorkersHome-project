<?php
$name=$_POST['cname'];
$age=$_POST['age'];
$adhaar=$_POST['adhaar'];
$gender=$_POST['Gender'];
$email=$_POST['email'];
$work=$_POST['work'];
$special=$_POST['special'];
$experience=$_POST['experience'];
$amount=$_POST['amount'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$alt=$_POST['alt'];
$username=$_POST['username'];
$password=$_POST['password'];
$conpassword=$_POST['conpassword'];
$db=mysqli_connect("localhost","root","","customer");
if($db->connect_error)
{
die("connection failed:");
}
else
{
$query="insert into worker(name,gender,age,email,adhaar,work,special,experience,amount,address,contact,altnum,username,password) values('$name','$gender',$age,'$email',$adhaar,'$work','$special',$experience,$amount,'$address',$contact,$alt,'$username','$password')";
mysqli_query($db,$query);
header('location:workerl.html');
}
mysqli_close();
?>
