<?php
class HelloWorld {

    private $world;

    public function __construct() {
        $this->world = "Earth";
    }

    public function sayHelloTo($name) {
        return 'Hello ' . $name . ". Welcome to " . $this->world;
    }

    public function setWorld($world) {
        $this->world = $world;
    }
}

$reflectionMethod = new ReflectionMethod('HelloWorld', 'sayHelloTo');

$world_temp = new HelloWorld();
$response = $reflectionMethod->invokeArgs($world_temp, array('Mike'));
echo $response . "<div/>";

$world_temp->setWorld("Saturn");
$response = $reflectionMethod->invokeArgs($world_temp, array('Mike'));
echo $response . "<div/>";