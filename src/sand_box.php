<?php

class One {

}

class Two {

}

class Something {
    static $instances;

    static function get_db_access_instance($type)
    {
        global $data_access_use_test_accessors;

        if ($data_access_use_test_accessors === true) {
            echo 'global $data_access_use_test_accessors = true'."<div/>";
        } else {
            echo 'global $data_access_use_test_accessors = false'."<div/>";
        }
    }

    function test($type) {
        self::$instances[$type] = new $type();
    }

    function printInstances() {
        var_dump(self::$instances);
        echo "<div/>";
    }
}

Something::get_db_access_instance("hello");
echo "<div/>";

$type = "Something";
$something = new $type();
$something->test($type);
$something->test("One");
$something->test("Two");
$something->test("Two");
$something->printInstances();


$main_mysql_info = "hello";
class DbConnFactory
{
    public static function get_main_db_conn(){
        global $main_mysql_info;
        self::get_db_conn($main_mysql_info);
    }

    public static function get_db_conn($mysql_info = null, $options = null){
        global $db_conn_implementation, $db_options, $main_mysql_info;

        if($mysql_info === null) {
            echo "mysql_info is null <div/>";
        } else {
            echo "mysql_info is not null<div/>";
        }

        if ($options === null) {
            echo "options is null<div/>";
        } else {
            echo "option is not null<div/>";
        }
    }
}
DbConnFactory::get_main_db_conn();


$time = time();
echo "<div/>time is: $time";

?>