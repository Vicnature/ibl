<?php

class Test extends Dbh{

    public function getUsers(){
       $sql="SELECT * FROM USERS";

       //use the connect method from the Dbh class
       $stmt=$this->connect()->query($sql);

       //no need to specify the fetch mode here
       while($row=$stmt->fetch()){
        echo $row['users_firstname'] . '<br>';

       }
    }

        //with prepared statements
    public function getUsersStmt($firstname,$lastname){
        //the question marks are placeholders.They will be filled later
        //the statement is run in the dbase first and info will be inserted later
        //prevents users from injecting something into the database
        $sql="SELECT * FROM USERS WHERE users_firstname= ? 
        AND users_lastname= ?";

        //this is the prepared statement
        $stmt=$this->connect()->prepare($sql);

        //this executes the statement
        $stmt->execute([$firstname,$lastname]);

        $names=$stmt->fetchAll();
        foreach($names as $name){
            echo $name['users_firstname'] . "<br>";
        }
    }



    public function setUsersStmt($firstname,$lastname,$dob){
        $sql="INSERT INTO users(users_firstname,
              users_lastname,users_dateofbirth)
              VALUES(?,?,?)";

        //this is the prepared statement
        $stmt=$this->connect()->prepare($sql);

        //this executes the statement
        $stmt->execute([$firstname,$lastname,$dob]);
    }

}