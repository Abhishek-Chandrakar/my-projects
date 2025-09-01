<?php 
abstract class Database {
    public $connection;
    public $connectionActive;
    

    abstract function setConnection($dbName);
    abstract function getConnection();
}

class DBConnection extends Database {
    function setConnection($dbName) {
        $this->connectionActive = true;
        $this->connection = "Connection handler to Database <br>";
    }

    function getConnection() {
         if($this->connectionActive){
            return $this->connection;
         }
    }
}

$db1 = new DBConnection();
$db1->setConnection("Test");
echo $db1->getConnection();

