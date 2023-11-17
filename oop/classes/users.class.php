<?php
//this is the model and it only interacts with the database
class Users extends Dbh{
    //the firstname parameter is passed into the function by
    //any class that references this method
    protected function getUser($firstname){
        $sql="SELECT * FROM users WHERE users_firstname=?";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$firstname]);
        $results=$stmt->fetchAll();

        //this passes the info. fetched from the database
        //as an array to the view.(userview class extends this class)
        return $results;
    }


    protected function setUser($firstname,$lastname,$dob){
        $sql="INSERT INTO users(users_firstname,
              users_lastname,users_dateofbirth)
              VALUES(?,?,?)";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$firstname,$lastname,$dob]);
        $results=$stmt->fetchAll();
    }
}
?>