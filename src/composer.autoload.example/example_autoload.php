<?php

require __DIR__ . '/../../vendor/autoload.php';

$hello = new MarcusChiu\MarcusChiu();
echo $hello->talk();

echo "<div/>";

$hello = new MarcusChiu\other\Dad();
echo $hello->talk();

echo "<div/>";

$hello = new MarcusChiu\other\Mom();
echo $hello->talk();

echo "<div/>";

$hello = new MarcusChiu\other\Erina();
echo $hello->talk();
?>