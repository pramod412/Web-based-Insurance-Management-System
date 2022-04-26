<?php

$servername= "localhost";
$username= "root";
$password= "";
$database_name= "insaurance_system";

$conn =mysqli_connect($servername,$username,$password,$database_name);

if(!$conn)
{
    die("connection Failed:" . mysqli_connect_error());
}
if(isset($_POST['save']))
{
    $email = $_POST['uname'];
    $password = $_POST['password'];
   

    $sql_query = "INSERT Into login( uname, password) values('$uname', '$password')";

    if(mysqli_query($conn,$sql_query))
    {
        echo "login successfull";
    }
    else
    {
        echo "Entered password is incorrect"; 

    }
    mysqli_close($conn);

}
?>

