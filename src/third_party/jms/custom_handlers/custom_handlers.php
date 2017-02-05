<?php

require_once '../../../../vendor/autoload.php';

$serializer =
    JMS\Serializer\SerializerBuilder::create()
        ->addDefaultHandlers()
        ->configureHandlers(function(JMS\Serializer\Handler\HandlerRegistry $registry) {
            $registry->registerHandler('serialization', 'MyObject', 'json',
                function($visitor, MyObject $obj, array $type) {
                    $r = $obj->getName();
                    return $r;
                }
            );
        })
        ->build();

class MyObject {

    private $name = "jesus christ";

    public function getName() {
        return $this->name;
    }
}

/////////////////////////////
// TEST THE CUSTOM HANDLER //
/////////////////////////////

$data = new MyObject();

// serialize
$jsonContent = $serializer->serialize($data, 'json');
echo $jsonContent;

// deserialize
$data = $serializer->deserialize($jsonContent, 'MyObject', 'json');

// serialize again
$jsonContent = $serializer->serialize($data, 'json');
echo $jsonContent;