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

// Upload a document to AWS CloudSearch
$id = 777;
$directors = array("Jesus Christ");
$release_date = "2013-01-18T00:00:00Z";
$rating = 7.4;
$genres = array("religion", "truth");
$image_url = "http://wallpapercave.com/wp/YIRxsjw.jpg";
$plot = "jesus died and rose on the third day";
$ranking = 1;
$running_time_secs = 6000;
$actors = array("Jesus Christ", "Holy Spirit", "Father");
$year = 2000;

$batch[] = array(
    'type'        => 'add',
    'id'          => $id,
    'fields'      => array(
        'directors' => $directors,
        'release_date' => $release_date,
        'rating' => $rating,
        'genres' => $genres,
        'image_url' => $image_url,
        'plot' => $plot,
        //'ranking' = 1,
        'running_time_secs' => $running_time_secs,
        'actors' => $actors,
        'year' => $year)
);

$result = $csDomainClient->uploadDocuments(array(
    'documents'     => json_encode($batch),
    'contentType'   => 'application/json'
));

var_dump($result);