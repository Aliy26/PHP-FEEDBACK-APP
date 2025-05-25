<?php

/* 
                    Object Oriented Programming

From PHP5 onwards you can write PHP in either a procedural or object oriented way. 
OOP consists of classes that can hold "properties" and "methods". 
Objects can be created from classes.

Access Modifiers: public, private, protected

//  public - can be accessed from anywhere
//  private - can only be accessed from inside the class
//  protected - can only be accessed from inside the class and by inheriting classes

*/

class User {
    // Properties are attributes that belong to a class
    public $name;
    public $email;
    public $password;

    // A constructor is a method that runs when an object is created
    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    // Method is a function that belongs to a class
    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }
}

// Instantiate a user object

$user1 = new User("Aliy", "umaraliy092@gmail.com", "postman");
$user2 = new User("Muoviya", "muoviya@gmail.com", "postman");

// $user1->name = "Aliy";


$user1->set_name("Brad");
$user2->set_name("John");

// var_dump($user1);

// echo $user1->name;
// echo $user2->name;


// echo $user1->get_name();
// echo $user2->get_name();

// echo $user1->email;

// Inheritence

class Employee extends User {
    public $title;
    public function __construct($name, $email, $password, $title) {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

 public function get_title() {
    return $this->title;
 }
}

$employee1 = new Employee("Sara", "sara@gmail.com", "434343", "Manager");

echo $employee1->get_title();

 


