<?php

class Caller {
    private $x = array('a', 'b', 'c');

    public function __call($method, $args) {
        print "Method '$method()' called:<div/>";
        var_dump($args); echo "<div/>";
        return $this->x;
    }
}

$foo = new Caller();
$a = $foo->test(1, 2, 3);
var_dump($a);

?>