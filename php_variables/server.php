<?php

echo "super global variable that returns the filename of the file system based path to the current script<br/>";
echo '$_SERVER[\'PATH_TRANSLATED\'] = ' . $_SERVER['PATH_TRANSLATED'] . "<br/><br/>";

echo "super global variable that returns the filename of the currently executing script<br/>";
echo '$_SERVER["PHP_SELF"] = ' . $_SERVER["PHP_SELF"] . "<br/><br/>";

echo "super global variable that returns the script name<br/>";
echo '$_SERVER[\'SCRIPT_NAME\'] = ' . $_SERVER['SCRIPT_NAME'] . "<br/><br/>";

echo "super global variable that returns the file name<br/>";
echo '$_SERVER[\'SCRIPT_FILENAME\'] = ' . $_SERVER['SCRIPT_FILENAME'] . "<br/><br/>";

echo "super global variable that returns the URI of the page<br/>";
echo '$_SERVER[\'SCRIPT_URI\'] = ' . $_SERVER['SCRIPT_URI'] . "<br/><br/><br/><br/>";


echo "super global variable that returns the request method<br/>";
echo '$_SERVER["REQUEST_METHOD"] = ' . $_SERVER["REQUEST_METHOD"] . "<br/><br/>";

echo "super global variable that returns the time stamp of the start of the request<br/>";
echo '$_SERVER[\'REQUEST_TIME\'] = ' . $_SERVER['REQUEST_TIME'] . "<br/><br/><br/><br/>";


echo "super global variable that returns the server name<br/>";
echo '$_SERVER[\'SERVER_NAME\'] = ' . $_SERVER['SERVER_NAME'] . "<br/><br/>";

echo "super global variable that returns the server software<br/>";
echo '$_SERVER[\'SERVER_SOFTWARE\'] = ' . $_SERVER['SERVER_SOFTWARE'] . "<br/><br/>";

echo "super global variable that returns the server admin<br/>";
echo '$_SERVER[\'SERVER_ADMIN\'] = ' . $_SERVER['SERVER_ADMIN'] . "<br/><br/>";

echo "super global variable that returns the server protocol<br/>";
echo '$_SERVER[\'SERVER_PROTOCOL\'] = ' . $_SERVER['SERVER_PROTOCOL'] . "<br/><br/>";

echo "super global variable that returns the server address<br/>";
echo '$_SERVER[\'SERVER_ADDR\'] = ' . $_SERVER['SERVER_ADDR'] . "<br/><br/>";

echo "super global variable that returns the port used by the web server<br/>";
echo '$_SERVER[\'SERVER_PORT\'] = ' . $_SERVER['SERVER_PORT'] . "<br/><br/><br/><br/>";


echo "super global variable that returns the IP address of user viewing page<br/>";
echo '$_SERVER[\'REMOTE_ADDR\'] = ' . $_SERVER['REMOTE_ADDR'] . "<br/><br/>";

echo "super global variable that returns the Host name from where the user is viewing the page<br/>";
echo '$_SERVER[\'REMOTE_HOST\'] = ' . $_SERVER['REMOTE_HOST'] . "<br/><br/>";

echo "super global variable that returns the port being used on users machine to communicate with web server<br/>";
echo '$_SERVER[\'REMOTE_PORT\'] = ' . $_SERVER['REMOTE_PORT'] . "<br/><br/><br/><br/>";


echo "super global variable that returns the http host<br/>";
echo '$_SERVER[\'HTTP_HOST\'] = ' . $_SERVER['HTTP_HOST'] . "<br/><br/>";

echo "super global variable that returns the user agent<br/>";
echo '$_SERVER[\'HTTP_USER_AGENT\'] = ' . $_SERVER['HTTP_USER_AGENT'] . "<br/><br/>";

?>