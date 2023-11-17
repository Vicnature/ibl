<?php

Class FirstClass{
    const EXAMPLE="You can't change this!";

    public static function test(){
        $testing="This is a test!";
        return $testing;
    }
}

$a=FirstClass::test();
echo $a;


class SecondClass extends FirstClass{

    public static $staticProperty="A static property!";

    public static function anotherTest(){
        echo parent::EXAMPLE;
        echo self::$staticProperty;
    }
}

$b=Secondclass::anotherTest();
echo $b;
?>