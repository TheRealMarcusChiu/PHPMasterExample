<?php
// Nested functions are bad design
// Another call to one(); will cause an error
// because, this would redeclare function two() again

function one () {
    function two () {
        echo "two";
    }

    echo "one";
}

one();
// one();

?>