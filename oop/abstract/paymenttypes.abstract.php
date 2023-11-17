<?php
//no object can be created from this class now.
//you can only reference it using other classes
abstract class visa{
    public function visaPayment(){
        return "perform a payment";
    }
    

    //if any class references this class(visa),
    //they must have a getPayment() method
    abstract public function getPayment();
}
?>