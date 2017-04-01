<?php

require_once '../../../../vendor/autoload.php';


$serializer = JMS\Serializer\SerializerBuilder::create()->build();

$data = array("hello", "world");
// $data = new turkey();

// serialize
$jsonContent = $serializer->serialize($data, 'json');
echo $jsonContent; // or return it in a Response

// deserialize
$data = $serializer->deserialize($jsonContent, 'array', 'json');

// serialize again
$jsonContent = $serializer->serialize($data, 'json');
echo $jsonContent;


class turkey {

    private $one = "hello";
    private $two = "world";
}