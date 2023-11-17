<?php

class BuyProduct extends Visa{
    public function getPayment(){
        //references the visapayment method within the buyproduct class
        //or any other class which  extends it
        return $this->visaPayment();
    }
}