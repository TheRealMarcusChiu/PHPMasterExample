<?php
// Include the SDK using the Composer autoloader
require '../../../vendor/autoload.php';

// Use the us-west-2 region and latest version of each client.
$sharedConfig = [
    'version' => 'latest',
    'region'  => 'us-east-1',

    // DEFINING YOUR AWS CREDENTIALS //
    // goto ~/.aws folder of you home directory and create a file named 'credentials'
    // and paste something like below into it

    // COPY THIS //
    //    [default]
    //      aws_access_key_id = your key here
    //      aws_secret_access_key = your secret key here
    //
    //    [project1]
    //      aws_access_key_id = your key here
    //      aws_secret_access_key = your secret key here
    // COPY END //

    // running this script will take the default credentials from the file you created automatically
    // so no need to explicitly define them like here below
//    'credentials' => [
//        'key'    => 'key',
//        'secret' => 'secret',
//    ]
];

// Create an SDK class used to share configuration across clients.
$sdk = new Aws\Sdk($sharedConfig);


// CREATING CLIENTS //

// Use AWS/SDK object to create the S3Client object.
$s3Client = $sdk->createS3();

// Use AWS/SDK object to create the CloudSearchDomainClient object.
$cloudSearchClient = $sdk->createCloudSearchDomain();
