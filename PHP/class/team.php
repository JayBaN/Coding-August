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

    return "foobar";

}, $posts);


var_dump($modified);


?>