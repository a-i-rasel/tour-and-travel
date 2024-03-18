<?php
    // require "vendor/autoload.php";
    require "classes/package.class.php";

    // connect to the database
    // $m = new MongoDB\Client();

    // // select a database
    // $db = $m->tourist;

    // // create a collection
    // $collection = $db->package;
    
    $id = $_POST['id'];

    $package = new Package();
    $result = $package->deletePackage($globals, $id);
    echo $result;

    // $id = $_POST['id'];
    //     // echo $id;
    // $collection->deleteOne(['_id'=> new MongoDB\BSON\ObjectId("$id")]);

    // // header("Location: dashboard.php");
    // header("Location: ./admin/deshpack.php");
    // exit();

?>     