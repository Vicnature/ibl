<?php
$servername="localhost";
$username="root";
$password="";
$database_name="hotel";


$conn=mysqli_connect($servername,$username,$password,$database_name);
//now the connection
if(!$conn)
{
    die("Connection failed:" . mysqli_connect_error());
}

if(isset($_POST['save']))
{
    // $member_id=$_POST['member_id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $booking=$_POST['booking'];
    $message=$_POST['message'];

    $sql_query="INSERT INTO hotel (name,email,booking,message)
    VALUES ('$name','$email','$booking','$message')";

    if(mysqli_query($conn,$sql_query))
{
    echo "New details have been inserted successfully";
}
else
{
    echo "Error:" . $sqli ."".mysqli_error($conn);
}
mysqli_close($conn);
}

?>