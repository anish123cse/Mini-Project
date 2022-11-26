<?php
$name=$_POST['email'];
$pass=$_POST['pass'];
if(isset($_POST['submit']))
{
    $con=mysqli_connect("localhost","root","","login");
    if(!$con)
    {
        echo "Not connected ";
    }
    else{
        echo "Connected";
    }
    $sql="insert into login(Email,Password) values ('$name','$pass')";
    if(mysqli_query($con,$sql))
    {
        echo "Successfully Insert";
    }
    
}