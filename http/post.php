<?php
// retrieve form data
$_POST = array(); //workaround for broken PHPstorm
parse_str(file_get_contents('php://input'), $_POST);

if( isset($_POST["name"]) && isset($_POST["age"]) ) {
    if (preg_match("/[^A-Za-z'-]/",$_POST['name'] )) {
        die ("name should be alpha only");
    }
    if (preg_match("/[^0-9'-]/",$_POST['age'] )) {
        die ("age should be numbers only");
    }
    echo "Welcome ". $_POST['name']. "<br />";
    echo "You are ". $_POST['age']. " years old.";

    exit();
}
?>
<html>
<body>

<form action = "<?php $_PHP_SELF ?>" method = "POST">
    Name: <input type = "text" name = "name" />
    Age: <input type = "text" name = "age" />
    <input type = "submit" />
</form>

</body>
</html>