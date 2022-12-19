<?php
/*
$myXMLData =
    "<?xml version='1.0' encoding='UTF-8'?>
<note>
<to>Tove</to>
<from>Jani</from>
<heading>Reminder</heading>
<body>Don't forget me this weekend!</body>
</note>";

$xml=simplexml_load_string($myXMLData) or die("Error: Cannot create object");
print_r($xml);
*/
?>

//simplexml-get node values
<?php
/*
$xml=simplexml_load_file("note.xml") or die("Error: Cannot create object");
echo $xml->to . "<br>";
echo $xml->from . "<br>";
echo $xml->heading . "<br>";
echo $xml->body;
*/
?>

//load the xml file
<?php
/*
$xmlDoc = new DOMDocument();
$xmlDoc->load("note.xml");

print $xmlDoc->saveXML();
*/
?>

<?php
/*
$xml=simplexml_load_file("books.xml") or die("Error: Cannot create object");
foreach($xml->children() as $books)
{
    echo $books->title . ", ";
    echo $books->author . ", ";
    echo $books->year . ", ";
    echo $books->price . "<br>";
}
*/
?>


//load the xml
<?php
/*
$xmlDoc = new DOMDocument();
$xmlDoc->load("books.xml");

print $xmlDoc->saveXML();
echo "<br>";
*/
?>


//constructor

<?php
/*
class flower
{
    public $name;
    public $color;

    function __construct($name)
    {
        $this->name = $name;
    }
    function get_name()
    {
        return $this->name;
    }
}

$rose = new flower("rose");
echo $rose->get_name();
$lotus = new flower("lotus");
echo $lotus->get_name();
$sunflower = new flower("sunflower");
echo $sunflower->get_name();
*/
?>


//destructor
<?php
/*
class flower
{
    public $name;
    public $color;

    function __construct($name)
    {
        $this->name = $name;
    }
    function __destruct()
    {
        echo "The flower is {$this->name}.";
    }
}

$rose = new flower("rose");
$lotus = new flower("lotus");
*/
?>


//inheritance
<?php
/*
class flower
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

class rose extends flower
{
    public function message()
    {
        echo "Am I a flower or a rose ";
    }
}
$rose = new rose("rose", "red");
$rose->message();
$rose->intro();
*/
?>

//constant
<?php
/*
class visit

{
    const LEAVING_MESSAGE = "Thank you for visiting in website";
}

echo visit::LEAVING_MESSAGE;
*/
?>

//abstract class and method

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
*/
?>

\\interface
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
        echo " Meow ";
    }
}

class Dog implements Animal
{
    public function makeSound()
    {
        echo " Bark ";
    }
}

class Mouse implements Animal
{
    public function makeSound()
    {
        echo " Squeak ";
    }
}
class lion implements Animal
{
    public function makeSound()
    {
        echo " howww ";
    }
}

$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$lion = new lion();
$animals = array($cat, $dog, $mouse,$lion);

foreach($animals as $animal)
{
    $animal->makeSound();
}
*/
?>

//trait
<?php
/*
trait message1
{
    public function msg1()
    {
        echo "OOP is fun! ";
    }
}

class Welcome
{
    use message1;
}

$obj = new Welcome();
$obj->msg1();
*/
?>


<?php
/*
class greeting
{
     public static function welcome()
     {
        echo "Hello priya aghera";
     }

     public function __construct()
    {
     self::welcome();
    }
}

new greeting();
*/
?>

<?php
/*
class pi
{
    public static $value = 3.14159;
}

echo pi::$value;
*/
?>

//iterable
<?php
/*
function printIterable(iterable $myIterable) {
    foreach($myIterable as $item) {
        echo $item;
    }
}

$arr = ["priya", "neel", "shreya","deep"];
printIterable($arr);
*/
?>

<?php
/*
namespace Html;
class Table
{
    public $title = "";
    public $numRows = 0;
    public function message()
    {
        echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
    }
}
$table = new Table();
$table->title = "My table";
$table->numRows = 5;
*/
?>


<html>
<body>

<?php
/*
$table->message();
*/
?>

</body>
</html>



<?php

setcookie("username", "welcome", time()+30*24*60*60);
echo("<br>");
echo $_COOKIE["username"];
echo $_COOKIE["cookie_value"];


?>


