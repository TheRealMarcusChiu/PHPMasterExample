<?php

require_once '../../../../vendor/autoload.php';

use JMS\Serializer\Annotation\Type;

// this is needed to autoload JMS\Serializer\Annotation\Type
$type = new Type;

$serializer = JMS\Serializer\SerializerBuilder::create()->build();

$data = new turkey();


// serialize
$jsonContent = $serializer->serialize($data, 'json');
echo $jsonContent . "<div/>";

// deserialize
$data = $serializer->deserialize($jsonContent, 'turkey', 'json');

// serialize again
$jsonContent = $serializer->serialize($data, 'json');
echo $jsonContent . "<div/>";


class turkey {
    /**
     * @Type("string")
     */
    private $one = "hello";

    /**
     * @Type("string")
     */
    private $two = "world";

    /**
     * Number of wings
     * @Type("integer")
     */
    private $num_wings = 2;
}