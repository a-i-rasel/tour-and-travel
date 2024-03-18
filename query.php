<?php
    require "vendor/autoload.php";

    // connect to the database
    $m = new MongoDB\Client();

    // select a database
    $db = $m->tourist;

    // create a collection
    $collection = $db->query;

    if(isset($_POST["qid"])){
        $qid = $_POST["qid"];
        $collection->updateOne(['_id'=> new MongoDB\BSON\ObjectId("$qid")],array('$set'=>(array("status"=>"read"))));
        // header("Location: dashboard.php");
        header("Location: ./admin/deshcus.php");
        exit();
    }
    if(isset($_POST["qdid"])){
        $qdid = $_POST["qdid"];
        $collection->deleteOne(['_id'=> new MongoDB\BSON\ObjectId("$qdid")]);
        // header("Location: dashboard.php");
        header("Location: ./admin/deshcus.php");
        exit();
    }

    $cursor = $collection->find();

    $documents = iterator_to_array($cursor);

    // Output the data as JSON
    header('Content-Type: application/json');
    echo json_encode($documents);
    header('Access-Control-Allow-Origin: *');
?>