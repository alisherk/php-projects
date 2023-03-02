<?php

//classes
class User
{
    private $email;
    private $name;

    //creating a constructor
    public function __construct($name, $email)
    {
        $this->email = $email;
        $this->name = $name;
    }

    public function login()
    {
        //echo $this->name . 'logged in';
        echo "$this->name logged in:";
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        if (is_string($name) && strlen($name) > 1) {
            $this->name = $name;
            return "name has been updated to $name";
        }
        return 'not valid name';
    }

}

//$userOne = new User();

//$userOne->login(); 

//echo $userOne->name; //this does not work as we don't have a value yet

//$userTwo = new User('yoshi', 'yoshi@yahoo.com');
//echo $userTwo->name; 
//echo $userTwo->email;
//$userTwo->login();
//echo $userTwo->getName();
//echo $userTwo->setName('Hamza')

class Vehicle
{
    public $make;
    public $model;

    public function __construct($make, $model)
    {
        $this->make = $make;
        $this->model = $model;
    }

    public function getMakeAndModel()
    {
        return $this->make . ' ' . $this->model;
    }
}

class Car extends Vehicle
{
    public $type;

    public function __construct($make, $model, $type)
    {
        parent::__construct($make, $model);
        $this->type = $type;
    }

    public function getDetails()
    {
        return $this->getMakeAndModel() . ' ' . $this->type;
    }
}

$myCar = new Car('Toyota', 'Corolla', 'Sedan');
echo $myCar->getDetails();

interface Shape
{
    public function getArea();
}

class Circle implements Shape
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

$circle = new Circle(5);
echo $circle->getArea();

//Abstract class
abstract class Shape1
{
    abstract protected function area();
}

class Square extends Shape1
{
    protected $side;

    public function __construct($side)
    {
        $this->side = $side;
    }

    protected function area()
    {
        return $this->side * $this->side;
    }
}

$square = new Square(5);
echo $square->area(); // 25

//Static keyword 

class Math
{
    public static function add($a, $b)
    {
        return $a + $b;
    }
}

// Access the static method without creating an instance of the class
echo Math::add(2, 3); // Output: 5

/* 
In PHP, the :: operator is used to access class constants and static methods. For example, 
if a class MyClass has a static method named myStaticMethod, you can call it using MyClass::myStaticMethod(). 
If a class has a constant named MY_CONSTANT, you can access its value using MyClass::MY_CONSTANT.
*/

?>