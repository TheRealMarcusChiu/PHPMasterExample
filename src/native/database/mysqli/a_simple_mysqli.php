<?php

// Connecting to and selecting a MySQL database named example
// Hostname, username, password, db name
$mysqli = new mysqli('127.0.0.1', 'root', 'password', 'example');

if ($mysqli->connect_errno) {
    // The connection failed. What do you want to do?
    // You could contact yourself (email?), log the error, show a nice page, etc.
    // You do not want to reveal sensitive information

    // Something you should not do on a public site, but this example will show you
    // anyways, is print out MySQL error related information -- you might log this
    echo "Error: Failed to make a MySQL connection, here is why: \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";

    // You might want to show them something nice, but we will simply exit
    exit;
}

// Perform an SQL query
$sql = "SELECT * from user";
if (!$result = $mysqli->query($sql)) {
    // The query failed.
    echo "Sorry, the website is experiencing problems.";

    echo "Error: Our query failed to execute and here is why: \n";
    echo "Query: " . $sql . "\n";
    echo "Errno: " . $mysqli->errno . "\n";
    echo "Error: " . $mysqli->error . "\n";
    exit;
}

// succeeded, but do we have a result?
if ($result->num_rows === 0) {
    echo "no rows to display";
    exit;
}

// fetch it into an associated array where the array's keys are the table's column names
$user = $result->fetch_assoc();
echo "name: " . $user['name'] . "<div/>submission date: " . $user['submission_date'] . "<div/>";

// The script will automatically free the result and close the MySQL
// connection when it exits, but let's just do it anyways
$result->free();
$mysqli->close();

?>