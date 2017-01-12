<?php
// Include the SDK using the Composer autoloader
require '../../../vendor/autoload.php';

// Create AWS/SDK object
$sharedConfig = [
    'version' => 'latest',
    'region'  => 'us-east-1',
    // AUTO DEFINING YOUR AWS CREDENTIALS //
    // go to src/create_aws_sdk_object.php for more information
];
$sdk = new Aws\Sdk($sharedConfig);

// Use AWS/SDK object to create the S3Client object.
$s3Client = $sdk->createS3();

// an other way
//$s3Client = new Aws\S3\S3Client([
//    'version' => 'latest',
//    'region'  => 'us-east-1',
//    'credentials' => [
//        'key'    => 'key',
//        'secret' => 'secret',
//    ]
//]);

// Send a PutObject request and get the result object.
$result = $s3Client->putObject([
    'Bucket' => 'testkilimanjarit', // change accordingly
    'Key'    => 'my-key',
    'Body'   => 'this is the body!'
]);

// Download the contents of the object.
$result = $s3Client->getObject([
    'Bucket' => 'testkilimanjarit', // change accordingly
    'Key'    => 'my-key'
]);

// Print the body of the result by indexing into the result object.
echo $result['Body'];

?>