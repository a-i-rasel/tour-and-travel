<?php
    require "vendor/autoload.php";

    // connect to the database
    $m = new MongoDB\Client();

    // select a database
    $db = $m->tourist;

    // create a collection
    $collection = $db->destination;

    $id = $_POST['id'];
        // echo $id;
    $collection->deleteOne(['_id'=> new MongoDB\BSON\ObjectId("$id")]);

    // header("Location: dashboard.php");
    header("Location: ./admin/deshdesti.php");
    exit();
?>