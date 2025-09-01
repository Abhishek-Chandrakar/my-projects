<?php 
    class User {
        private $id;
        private $username;
        private $password;

        function __construct($id, $username) {
            $this->id = $id;
            $this->username = $username;
        }

        function __destruct() {
            echo "User logged out!!! <br>";
        }

        function __set($property, $value) {
            if($property == "password") {
                $this->password = password_hash($value, PASSWORD_DEFAULT);
            } else {
                $this->$property = $value;
            }
        }   

        function __get($property) {
            if($property == "password") {
                return "****hidden*****";
            } elseif(property_exists($this, $property)) {
                return $this->property;
            } else {
                return "Property does not exist";
            }
        }
    }

    $user1 = new User(111, "abhishek");
    
    echo "username: " . $user1->username . "<br>";
    $user1->password;
?>