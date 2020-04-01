<?php

session_start();

$con = mysqli_connect('localhost','root');

if($con){
    echo"connection succesfull";
}
else{
    echo"no connection";
}
mysqli_select_db($con,'mydb');

$email = $_POST['email-id'];
$pass = $_POST['password'];

$q = " select * from mytable where email='$email' && pass='$pass' ";//email and pass table name

$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);

if($num==1){
    
    //$_SESSION['username']=$name;
    header('location:main.html');
}
else{
    header('location:index.html');
}

?>