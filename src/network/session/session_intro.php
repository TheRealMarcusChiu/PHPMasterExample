<!--
The location of the temporary file is determined by a setting in
the php.ini file called session.save_path. Before using any session
variable make sure you have setup this path.

if session.save_path has no value "/tmp" is used
string sys_get_temp_dir ( void )
-->

<?php
session_start();
if( isset( $_SESSION['counter'] ) ) {
    $_SESSION['counter'] += 1;
}else {
    $_SESSION['counter'] = 1;
}
?>

<html>
<head>
    <title>Setting up a PHP session</title>
</head>

<body>
<?php
$msg = "You have visited this page <b>" . $_SESSION['counter'] . "</b> in this session.";
echo ($msg)."<br/><br/>";

$path = sys_get_temp_dir();
echo "Directory path used for temporary files<br/>";
echo "sys_get_temp_dir — $path<br/><br/>";
?>

<h4>When a session is started following things happen:</h4>
<ul>
    <li>PHP first creates a unique identifier for that particular session which is a random string of 32 hexadecimal numbers such as 3c7foj34c3jj973hjkop2fc937e3443.</li>
    <li>A cookie called <b>'PHPSESSID'</b> is automatically sent to the user's computer to store unique session identification string.</li>
    <li>A file is automatically created on the server in the designated temporary directory and bears the name of the unique identifier prefixed by sess_ ie sess_3c7foj34c3jj973hjkop2fc937e3443.</li>
</ul>
<br/>
<h4>Turning on Auto Session</h4>
<p>
    You don't need to call start_session() function to start a session when a user visits your site if you can set <b>session.auto_start</b> variable to 1 in <b>php.ini</b> file.
</p>

</body>
</html>