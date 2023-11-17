<?php


session_start();
$_SESSION['username']='wawawawa';

pre_r($_SESSION);

function pre_r($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}