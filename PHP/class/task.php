<?php

class Transaction {

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

}





// $task = new Transaction(100,2);

// echo $task->add(1,1);


$user = "root";
$db = "db_practice";

try {
    $pdo = new PDO("mysql:host=127.0.0.1;dbname={$db}","{$user}",'');
} catch (PDOException $e) {
    die ($e->getMessage());
}


?>
