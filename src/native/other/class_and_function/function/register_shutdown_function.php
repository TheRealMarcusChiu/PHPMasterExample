<?php

function echo_something() {
	echo "hello world";
}

// Register a function for execution on shutdown
register_shutdown_function('echo_something');