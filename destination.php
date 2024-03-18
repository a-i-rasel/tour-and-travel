<?php
     require "vendor/autoload.php";

     // connect to the database
     $m = new MongoDB\Client();
 
     // select a database
     $db = $m->tourist;
 
     // create a collection
     $collection = $db->destination;

     // insert a document
    if(isset($_POST['desSave'])){
        $img = $_POST['imgf'];
        $loc = $_POST['locf'];
        $per = $_POST['perf'];
        $show = $_POST['showf'];
        
        $document = array(
            "img"=> $img,
            "loc"=> $loc,
            "per"=> $per,
            "show"=> $show,
        );
        $collection->insertOne($document);
        header("Location: ./admin/navber.php");
        // header("Location: dashboard.php");
        exit();
    }

     $cursor = $collection->find();

    // Convert the documents to an array
    $documents = iterator_to_array($cursor);

    // Output the data as JSON
    header('Content-Type: application/json');
    echo json_encode($documents);
    header('Access-Control-Allow-Origin: *');

?>