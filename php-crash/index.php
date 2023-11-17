<?php
 //arrayfunctions
 $fruits=['apple','orange'];

 echo count($fruits);
 echo "hello";
 setcookie ('name','brad',time()+86400);
 setcookie('name','walah',time()+86400);
 if(isset($_COOKIE['name'])){
    echo  $_COOKIE['name'];
 }
 ?> 