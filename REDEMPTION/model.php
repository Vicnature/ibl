<?php
 class Dbh{
    private $host="localhost";
    private $user="root";
    private $password="";
    private $dbName="oceanstar";

    protected function connect(){
        //this specifies the type of database 
        //and type of host
        $dsn='mysql:host='.$this->host .
        ';dbname='.$this->dbName;
        
        //create new PDO connection.The username 
        //and password are specified
        $pdo=new PDO($dsn,$this->user,$this->password);
        
        
        //shows how the data will be 
        //pulled from the database
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,
                           PDO::FETCH_ASSOC);

        //return the connection
        return $pdo;
    }
}


class Booking extends Dbh{
    //the firstname parameter is passed into the function by
    //any class that references this method
    protected function setUser($name,$email,
    $number_of_rooms,$preferences){
        $sql="INSERT INTO oceanstar(name,
              email,number_of_rooms,preferences)
              VALUES(?,?,?,?)";
        $booking=$this->connect()->prepare($sql);
        $booking->execute([$name,$email,$number_of_rooms,$preferences]);
        // $results=$booking->fetchAll();
    }
}
?>