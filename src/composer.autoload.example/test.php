<?php

require '../../vendor/autoload.php';

// classmap
$classmap = new ClassMapExample();
$classmap->test();

// files
globalTestFunction();

// psr4
$a = new PsrFour\Psr4A();
$a->test();
$b = new PsrFour\b\Psr4B();
$b->test();

// psr0
$a = new PsrZero\Psr0A();
$a->test();
$b = new PsrZero\b\Psr0B();
$b->test();