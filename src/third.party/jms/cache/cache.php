<?php


require_once '../../../../vendor/autoload.php';

$someWritableDir = "/Users/marcus.chiu/ComputerScience/PHP/PHPStorm/PHPStormProjects/Example/BasicPHP/src/third.party/jms/cache/tmp";
$builder = new JMS\Serializer\SerializerBuilder();
$serializer =
    JMS\Serializer\SerializerBuilder::create()
        ->setCacheDir($someWritableDir)
        ->setDebug(true)
        ->build();

$data = array("hello", "world");

$jsonContent = $serializer->serialize($data, 'json');
echo $jsonContent;

$data = $serializer->deserialize($jsonContent, 'array', 'json');

$jsonContent = $serializer->serialize($data, 'json');
echo $jsonContent;


class turkey {

    private $one = "hello";
    private $two = "world";
}