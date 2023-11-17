<?php
//this fetches data from the user
class Usersview extends Users{
    public function showUsers($firstname){
        $results=$this->getUser($firstname);

        //the $results variable is an associative array been passed over 
        //from the users(model) class and can used to display data on the browser
        echo "<br>this comes from usersview.class.php <br>";
        echo "Full name:" . $results[0]['users_firstname']. " " 
             . $results[0]['users_lastname'] . "<br>";
        echo "Date of birth:" . $results[0]['users_dateofbirth'];
    }
}

?>