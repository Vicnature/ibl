<?php
    include 'includes/class-autoload.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // $testobj=new Test();
    // $testobj->getUsers();

    $testobj2=new Test();

    //Daniel and Nelsen are sent over as arguments 
    //and received by the getUserStmt function.
    //they are used bu the execute method as well as filling in 
    //the placeholders "?" in the $sql statement
    $testobj2->getUsersStmt("Daniel","Nelsen");


    $testobj3=new UsersView();
    $testobj3->showUsers("Krist");

    $testobj4=new UsersController();
    $testobj4->CreateUser("Krist","Penaldo","1834-01-12");
    ?>
</body>
</html>