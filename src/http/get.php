<?php
if( isset($_GET["name"]) && isset($_GET["age"])) {
    if (preg_match("/[^A-Za-z'-]/",$_POST['name'] )) {
        die ("name should be alpha only");
    }
    if (preg_match("/[^0-9'-]/",$_POST['age'] )) {
        die ("age should be numbers only");
    }

    echo "Welcome ". $_GET['name']. "<br />";
    echo "You are ". $_GET['age']. " years old.";

    exit();
}
?>
<html>
<body>

<form action = "<?php $_PHP_SELF ?>" method = "GET">
    Name: <input type = "text" name = "name" />
    Age: <input type = "text" name = "age" />
    <input type = "submit" />
</form>

</body>
</html>