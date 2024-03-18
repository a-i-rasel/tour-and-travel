<?php
    require "vendor/autoload.php";

    // connect to the database
    $m = new MongoDB\Client();

    // select a database
    $db = $m->tourist;

    // create a collection
    $collection = $db->userbooking;

    if(isset($_POST['paid'])){
        $id = $_POST['fpay'];
        $collection->updateOne(['_id'=> new MongoDB\BSON\ObjectId("$id")],array('$set'=>(array("status"=>"paid"))));
        // echo $id;
        header("Location: http://localhost/tour%20and%20travel/profile.php");
    }

?>