<?php
    class Dbh{
        private $host="localhost";
        private $user="root";
        private $password="";
        private $dbName="oop";

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

?>