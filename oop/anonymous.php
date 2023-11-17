<?php
include_once "classes/simpleclass.php";
//this makes use of a normal class to instantiate an object
$obj=new SimpleClass();
$obj->helloworld();


//this is the anonymous object which is never
//stored on the browser.It gets deleted as soon
//as the object has been instantiated.
$newObj=new class(){
    public function helloworld(){
        echo "hello world";
    }
};

$newObj->helloworld();
?>