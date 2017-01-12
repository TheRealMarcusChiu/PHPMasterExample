<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,               "https://httpbin.org/post" );
curl_setopt($ch, CURLOPT_RETURNTRANSFER,    true );
curl_setopt($ch, CURLOPT_POST,              1 );

// curl_setopt($handle, CURLOPT_POSTFIELDS, $data); takes the $data in two formats which determines how the post data will be encoded.
// 1. $data as an array(): The data will be sent as multipart/form-data which is not always accepted by the server.
// $data = array('name' => 'Ross', 'php_master' => true);
// curl_setopt($handle, CURLOPT_POSTFIELDS, $data);
// 2. $data as url encoded string: The data will be sent as application/x-www-form-urlencoded, which is the default encoding for submitted html form data.
// $data = array('name' => 'Ross', 'php_master' => true);
// curl_setopt($handle, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_POSTFIELDS,        http_build_query(array('postvar1' => 'value1', 'postvar2' => 'value2')));

// set the HTTP headers
curl_setopt($ch, CURLOPT_HTTPHEADER,        array('Content-Type: application/x-www-form-urlencoded'));

$result = curl_exec($ch);
curl_close ($ch);

echo $result;

?>
