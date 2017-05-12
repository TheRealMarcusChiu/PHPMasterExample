<?php
// Use $this to refer to the current object
// Use self to refer to the current class

class a {
    private $non_static_member = 1;
    private static $static_member = 2;

    // example use of $this and self
    function correctMethod() {
        echo $this->non_static_member;
        echo self::$static_member;
    }

    // incorrect way
//    function incorrectMethod() {
//        echo self::non_static_member;
//        echo $this->$static_member;
//    }
}