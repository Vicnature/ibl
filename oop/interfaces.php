<?php
//the interface can be used to represent  all the three payment types
//it defines the rules that each class implementing it must have
//in this case,all the classes must have the payNow function.
interface PaymentInterface{
    public function payNow();
}


interface LoginInterface{
    public function loginFirst();

}


   
   class Paypal implements PaymentInterface,LoginInterface{
        public function payNow(){}
        public function loginFirst(){}
        public function paymentProcess(){
            $this->loginFirst();
            $this->payNow();
        }
    }


    class Visa implements PaymentInterface{
        public function payNow(){}
        public function paymentProcess(){
            $this->payNow();
        }
    }


    class Cash implements PaymentInterface{
        public function payNow(){}
        public function paymentProcess(){
            $this->payNow();
        }
    }

//this class must meet all the demands of the paymentinterface and the loginInterface
    class BankTransfer implements PaymentInterface,LoginInterface{
        public function loginFirst(){}
        public function payNow(){}
        public function paymentProcess(){
            $this->loginFirst();
            $this->payNow();
        }
    }


    class BuyProduct{
        //Right now,paymentinterface can accept any class chosen
        //it groups them and acts as a universal type declaration
        public function pay(PaymentInterface $paymentType){
            $paymentType->paymentProcess();
        }
    }

    $paymentType=new Cash();
    $buyProduct=new BuyProduct();

    //this line passes in the cash object as an argument to the 
    //buyproduct class therefore,the buyproduct class can 
    //implement all the methods of the cash object.
    $buyproduct->pay($paymentType);