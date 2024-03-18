<?php
    require "vendor/autoload.php";

    // connect to the database
    $m = new MongoDB\Client();

    // select a database
    $db = $m->tourist;

    // create a collection
    $collection = $db->userbooking;

    $useremail = $_COOKIE['user'];
    
    $cursor = $collection->find(["useremail" => $useremail]);

    // Convert the documents to an array
    $documents = iterator_to_array($cursor);

    // Output the data as JSON
    header('Content-Type: application/json');
    echo json_encode($documents);
    header('Access-Control-Allow-Origin: *');

?>