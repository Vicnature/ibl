<?php
//     spl_autoload_register('myAutoLoader');
//     function myAutoLoader($classname){
//     $url=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URL'];
    
//     $path="classes/";
//     $extension=".class.php";
//     $fullpath=$path.$classname.$extension;
//     require_once $fullpath;
// }

//second autoloader
//It caters for a case where the class is being instantiated
//inside a folder like the includes folder
//(which is not within the root)
spl_autoload_register('myAutoLoader');
function myAutoLoader($className){
    $url=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    if(strpos($url,'includes')!==false){
        $path='../classes/';
    }
    else{
        $path='classes/';
    }
    $extension='.class.php';
    require_once $path.$className.$extension;
}
?>