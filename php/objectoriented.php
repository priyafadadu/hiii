<?php

class car  //class
{
    public $name;   //access modifier
    public $color;

    function __construct($name,$color) //constructor
    {
        $this->name = $name;
        $this->color = $color;
    }
    function __destruct()  //destructor
    {
        echo "The car is {$this->name}.";
    }
    function get_name()   //method
    {
        return $this->name;
    }
    public function intro()
    {
        echo "The car is {$this->name} and the color is {$this->color}.";
    }
}
class audi extends car   //interface
{
    public function message()
    {
        echo "I am a car in audi model ";
    }
}
abstract class cars   //abstract class
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    abstract public function introduction() : string;
}
class alto extends cars
{
    public function introduction() : string
    {
        return "Choose German quality! I'm an $this->name!";
    }
}

class volvo extends cars
{
    public function introduction() : string
    {
        return "Proud to be Swedish! I'm a $this->name!";
    }
}

class citroen extends cars
{
    public function introduction() : string
    {
        return "French extravagance! I'm a $this->name!";
    }
}
class kia extends cars
{
    public function introduction(): string
    {
       return "made in india! I'm a $this->name!";
    }
}
interface animal
{
    public function makeSound();
}

class cat implements animal
{
     public function makeSound()
     {
          echo " Meow ";
     }
}

class dog implements animal
{
    public function makeSound()
    {
        echo " Bark ";
    }
}

class mouse implements animal
{
    public function makeSound()
    {
        echo " Squeak ";
    }
}
class lion implements animal
{
    public function makeSound()
    {
        echo " howww" ;
    }
}
class visit

{
    const LEAVING_MESSAGE = "Thank you for visiting in car showroom";   //const
}
class display
{
    public static function welcome()   //static method
    {
        echo "Hello priya";
    }

    public function __construct()
    {
        self::welcome();
    }
    public static $value = 3.14159;   //static properties
}
trait message1
{
    public function msg1()
    {
        echo "OOP is a object oriented programming";
    }
}

class Welcome
{
    use message1;
}

   $bmw = new car("bmw");
   echo $bmw->get_name();
   $swift = new car("swift");
   echo $swift->get_name();

   $audi = new audi("audi","white");
   $audi->message();
   $audi->intro();

   echo visit::LEAVING_MESSAGE;

   $alto = new alto("alto");
   $alto->introduction();
   $volvo = new volvo("volvo");
   $volvo->introduction();
   $citroen = new citroen("citroen");
   $citroen->introduction();
   $kia = new ciaz("kia");
   $kia->introduction();

   $cat = new cat();
   $dog = new dog();
   $mouse = new mouse();
   $lion = new lion();
   $animals = array($cat,$dog,$mouse,$lion);
   foreach($animals as $animal)
   {
      $animal->makeSound();
   }

new display();
echo display::$value;
$obj = new welcome();
$obj->msg1();

?>







