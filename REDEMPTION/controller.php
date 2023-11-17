<?php
include 'model.php';
if(isset($_POST["send_Order"])){
    if(!empty($_POST["name"])||
       !empty($_POST["email"])||
       !empty($_POST["number_of_rooms"])||
       !empty($_POST["preferences"])){

        $name=$_POST["name"];
        $email=$_POST["email"];
        $number_of_rooms=$_POST["number_of_rooms"];
        $preferences=$_POST["preferences"];
       } 
}
echo "Thankyou $name for sending your booking order. <br>";
echo "Your request is being processed.";


class CreateOrder extends Booking{
    public function order($name,$email,
    $number_of_rooms,$preferences){
        $this->setUser($name,$email,$number_of_rooms,$preferences);
    }
}

$order=new CreateOrder;
$order->order($name,$email,$number_of_rooms,$preferences);
?>