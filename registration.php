<?php

session_start();
header('location:index.html');

$con = mysqli_connect('localhost','root');

if($con){
    echo"connection succesfull";
}
else{
    echo"no connection";
}
mysqli_select_db($con,'mydb');

$name = $_POST['name'];
$email = $_POST['email-id'];
$pass = $_POST['password'];

$q = " select * from mytable where name='$name' && email='$email' && pass='$pass' ";//simple email and pass table name

$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);

if($num==1){
    echo"dupicate data";
}
else{
    $qy=" insert into mytable(name,email,pass) values ('$name','$email','$pass')";//name and pass table name
    mysqli_query($con,$qy);
    
}

?>