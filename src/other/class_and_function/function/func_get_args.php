<?php
// Returns an array comprising a function's argument list

function method($service_url, $transfer_protocol, $transfer_type='') {
    $scope_args = func_get_args();
    var_dump($scope_args);
}

method("hello", ",", "world");

?>