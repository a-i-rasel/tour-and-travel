<?php
     require "vendor/autoload.php";

     // connect to the database
     $m = new MongoDB\Client();
 
     // select a database
     $db = $m->tourist;
 
     // create a collection
     $collection = $db->package;

     if(isset($_GET['submit'])){
        $id=$_GET['id'];
        $im = $_GET['im'];
        $place = $_GET['place'];
        $day = $_GET['day'];
        $person = $_GET['person'];
        $price = $_GET['price'];
        $rating = $_GET['rating'];
        $des = $_GET['des'];
        $collection->updateOne(['_id'=> new MongoDB\BSON\ObjectId("$id")],array('$set'=>(array("img"=> $im, "place"=> $place, "days"=> $day, "person"=> $person, "price"=> $price, "rating"=> $rating, "description"=>$des))));
        header("Location: dashboard.php");
    }

?>     