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
    $fname = $_POST['fname'];
    $lname  = $_POST['lname'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];

    $sql_query = "INSERT Into insaurance(fname, lname, age, email, password ,gender, address, city, pincode) values('$fname', '$lname', '$age','$email','$password' ,'$gender' ,'$address','$city','$pincode')";

    if(mysqli_query($conn,$sql_query))
    {
        echo "New Details inserted successfuly";
    }
    else
    {
        echo "Error:" .$sql . "" . mysqli_error($conn);

    }
    mysqli_close($conn);

}
?>
