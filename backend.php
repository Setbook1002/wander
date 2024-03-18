<?php
//Database connection
$_SERVERname="localhost";
$username="root";//change this to your database username
$password="";//change this to your database password
$database="agricultural";//change this to your database name
//create connection
$conn=new mysqli($_SERVERname,$username,$password,$database);
//create connection
if($conn->connect_error){
    die("connection failed:".$connect_error);
}
//Get from data
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$product=$_POST['product'];
//insert data into database
$sql="INSERT INTO customer_order (name,email,password,phone,addrress,product) VALUES('$name','$email','$password','$phone','$address','$product')";
if($conn->query($sql)==TRUE){
    echo"Order place successfully";
}
else{
    echo"error:".$sql."<br>".$conn->error;
}
//close connection
$conn->close();
?>