<?php
// Include the SDK using the Composer autoloader
require '../../../vendor/autoload.php';

$search_end_point = 'https://search-jesus-pcd4bjnkk3df3umdxvbd6bod3m.us-west-2.cloudsearch.amazonaws.com';
$document_end_point = 'https://doc-jesus-pcd4bjnkk3df3umdxvbd6bod3m.us-west-2.cloudsearch.amazonaws.com';

$sharedConfig = [
    'version' => 'latest',
    'region'  => 'us-west-2',
    // AUTO DEFINING YOUR AWS CREDENTIALS //
    // go to src/create_aws_sdk_object.php for more information
];
$sdk = new Aws\Sdk($sharedConfig);

// Use AWS/SDK object to create the CloudSearchDomainClient object.
$csDomainClient = $sdk->createCloudSearchDomain(array('endpoint' => $search_end_point));

// Use the search operation
$facets = array ('city' => array('sort' => 'count', 'size' => 5));
$result = $csDomainClient->search(array(
    'query'         => 'Joseph Gordon-Levitt',
    'filterQuery'	=> "year:2013",
    'start' => 0,
    'size' => 50
));
var_dump($result);
