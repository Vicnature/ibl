<?php
session_start();
$_SESSION['username']='clevertechie';
$_SESSION['role']='admin';

echo 'session variables have been set';

pre_r($_SESSION);

function pre_r($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
?>

<a href="second.php">go to two</a>