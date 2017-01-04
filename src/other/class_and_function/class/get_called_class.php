<?php
class ClassOne {
    static public function method() {
        echo get_called_class();
    }
}

class ClassTwo extends ClassOne {

}

ClassOne::method();
echo "<div/>";
ClassTwo::method();