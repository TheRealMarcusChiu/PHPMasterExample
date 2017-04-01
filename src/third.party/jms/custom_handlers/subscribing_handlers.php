<?php

require_once '../../../../vendor/autoload.php';

date_default_timezone_set('America/Los_Angeles');

use JMS\Serializer\Handler\SubscribingHandlerInterface;
use JMS\Serializer\GraphNavigator;
use JMS\Serializer\JsonSerializationVisitor;
use JMS\Serializer\Context;

class MyHandler implements SubscribingHandlerInterface
{
    public static function getSubscribingMethods()
    {
        return array(
            array(
                'direction' => GraphNavigator::DIRECTION_SERIALIZATION,
                'format' => 'json',
                'type' => 'DateTime',
                'method' => 'serializeDateTimeToJson',
            ),
        );
    }

    public function serializeDateTimeToJson(JsonSerializationVisitor $visitor, \DateTime $date, array $type, Context $context)
    {
        return "hello";//$date->format($type['params'][0]);
    }
}


$serializer =
    JMS\Serializer\SerializerBuilder::create()
        ->addDefaultHandlers()
        ->configureHandlers(function(JMS\Serializer\Handler\HandlerRegistry $registry) {
            $registry->registerSubscribingHandler(new MyHandler());
        })
        ->build();

$date = new DateTime();

// serialize
$jsonContent = $serializer->serialize($date, 'json');
echo $jsonContent;