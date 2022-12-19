<?php
//class and object
/*

class Fruit
{
    // Properties
    public $name;
    public $color;

    // Methods
    function set_name($name)
    {
        $this->name = $name;
    }

    function get_name()
    {
        return $this->name;
    }

    function set_color($color)
    {
        $this->color = $color;
    }

    function get_color()
    {
        return $this->color;
    }
}

$apple = new Fruit();
$apple->set_name('Apple');
$apple->set_color('Red');

echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " . $apple->get_color();


//instance of
echo("<br>");
$apple = new Fruit();
var_dump($apple instanceof Fruit);
*/
?>
<?php
/*
//destructor
class Fruit {
public $name;
public $color;

function __construct($name, $color) {
$this->name = $name;
$this->color = $color;
}
function __destruct() {
echo "The fruit is {$this->name} and the color is {$this->color}.";
}
}

$apple = new Fruit("Apple", "red");
*/
?>


<?php
/*
class Fruit
{
    public $name;
    public $color;
    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    public function intro()
    {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}

// Strawberry is inherited from Fruit
class Strawberry extends Fruit
{
    public function message()
    {
        echo "Am I a fruit or a berry? ";
    }
}
$strawberry = new Strawberry("Strawberry", "red");
$strawberry->message();
$strawberry->intro();
*/
?>

//const
<?php
/*
class Goodbye {
    const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
}

echo Goodbye::LEAVING_MESSAGE;
*/
?>

//abstract class
<?php
/*
abstract class Car
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    abstract public function intro() : string;
}


class Audi extends Car
{
    public function intro() : string
    {
        return "Choose German quality! I'm an $this->name!";
    }
}

class Volvo extends Car
{
    public function intro() : string
    {
        return "Proud to be Swedish! I'm a $this->name!";
    }
}
class swift extends car
{
    public function intro() : string
    {
        return "proud to be indian! I'm a $this->name!";
    }
}

class Citroen extends Car
{
    public function intro() : string
    {
        return "French extravagance! I'm a $this->name!";
    }
}

$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";

$volvo = new volvo("Volvo");
echo $volvo->intro();
echo "<br>";

$citroen = new citroen("Citroen");
echo $citroen->intro();
echo "<br>";

$swift = new swift( name:"swift");
echo $swift->intro();
*/
?>

//interface
<?php
/*
interface Animal
{
    public function makeSound();
}

class Cat implements Animal
{
    public function makeSound()
    {
        echo "Meow";
    }
}

$animal = new Cat();
$animal->makeSound();
*/
?>
//static method

<?php
/*
class greeting
{
    public static function welcome()
    {
        echo "Hello priya aghera!";
    }
}
greeting::welcome();
*/
?>


//iterable
<?php
function printIterable(iterable $myIterable) {
    foreach($myIterable as $item) {
        echo $item;
    }
}

$arr = ["a", "b", "c"];
printIterable($arr);
?>









