<?php

class Transaction {

    public $file = "Windows";
    protected $user = "1122120";
    private $pass = "gogo";

    public function __construct($amount,$description) {
        echo $this->add($amount,$description);
    }

    public function test() {
        return $this->pass;
    }

    public function add($value, $value2) {
        $total = $value + $value2;
        return $total;
    }

    public static function print() {
        return self::$user;
    }

    protected function tryMe() {
        echo "protected worked";
    }

    private function tryMeAgain() {
        echo "private function worked";
    }
}

class Customer extends Transaction {
    
    public function toDoList() {
        echo $this->tryMe();
    }

}


$task = new Transaction(0,0);
$customer = new customer(0,0);
// echo $task->add(1,1);

//Calling a static method from class
// echo Transaction::print();

echo $customer->toDoList();
// echo $customer->tryMe();



$user = "root";
$db = "db_practice";

try {
    $pdo = new PDO("mysql:host=127.0.0.1;dbname={$db}","{$user}",'');
} catch (PDOException $e) {
    die ($e->getMessage());
}


?>
