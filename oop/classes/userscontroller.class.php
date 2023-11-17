<!-- This substitutes the test.class.php -->
<?php
//updates the database
class UsersController extends Users{
    public function createUser($firstname,$lastname,$dob){
        $this->setUser($firstname,$lastname,$dob);
    }
}
?>