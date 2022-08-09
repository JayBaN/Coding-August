<?php
class Team {

    protected $name;

    protected $members = [];

    public function __construct() {

        // $this->name = $name;   
        // $this->members = $members;         
    
    }

    public static function start(...$params) {
        var_dump($params);
        return new static($params);       
    
    }

    public function name() {

        return $this->name;
    }

    public function members() {

        return $this->members;

    }

    public function add($name) {

        $this->members[] = $name;
        
    }

    public function manager() {



    }



}


// $lakers = new Team('Lakers', ['Robert Horry','Derek Fisher']);
// $lakers = new Team();

// $lakers = Team::start('Lakers', ['Robert Horry','Derek Fisher']);

// $lakers->add('Kobe');
// $lakers->add('Shaq');

// var_dump($lakers->members())


class CoffeeMaker {

    
    public function brew() {

    }

}

class SpecialtyCoffeeMaker extends CoffeeMaker {
    
    public function brewLatte() {

    }
}


class Post {

    public $title;
    public $published;


    public function __construct($title,$published) {   
        
        $this->$title = $title;
        $this->published = $published;


    }

}

$posts = [

    new Post('My first post', true),
    new Post('My second post', true),
    new Post('My third post', true),
    new Post('My fourth post', false),
];


$unpublishedPosts = array_filter($posts, function ($post) {

        return $post->published === false;

});


$modified = array_map(function ($post){

    $post->published = true;

    return $post;

}, $posts);


// var_dump($modified);



class Cars {

    public $car;
    protected $price;

    public function __construct($name) {

        $this->car = $name;

    }

    public function price($price) {
        $this->price = $price;
    }

}

class Customer {

    public $name;
    public $age;
    protected $gender;

    public function __construct($name,$age,$gender)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    } 

}

class Rental {


}


$personalCar = new Cars('Ferrari');
$personalCar->price('25,000');

print_r($personalCar);

foreach($personalCar as $key => $value) {
    echo "The $key is: $value \n" ;
}


?>