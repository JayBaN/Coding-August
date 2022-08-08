<?php

class Transaction {

    public $file;
    protected $user = "1122120";
    private $pass = "gogo";

    public function __construct($amount,$description) {
        echo $this->add($amount,$description);
    }

    public function test() {
        echo "Im working@";
    }

    public function add($value, $value2) {
        $total = $value + $value2;
        return $total;
    }

    public static function print() {
        echo "test me";
    }


}



$task = new Transaction(100,2);

// echo $task->add(1,1);
echo $task::print();



$user = "root";
$db = "db_practice";

try {
    $pdo = new PDO("mysql:host=127.0.0.1;dbname={$db}","{$user}",'');
} catch (PDOException $e) {
    die ($e->getMessage());
}


?>
