<?php
     require "vendor/autoload.php";

     // connect to the database
     $m = new MongoDB\Client();
 
     // select a database
     $db = $m->tourist;
 
     // create a collection
     $collection = $db->package;
     $collection1 = $db->destination;
     $collection2 = $db->service;

     if(isset($_POST['id'])){
        $id = $_POST['id'];
        $cursor = $collection->find(['_id'=> new MongoDB\BSON\ObjectId("$id")]);

        if($cursor){
            foreach($cursor as $data){
            // echo $data['show'];
            if($data['show']=="1"){
                $collection->updateOne(['_id'=> new MongoDB\BSON\ObjectId("$id")],array('$set'=>(array("show"=>"0"))));
            } else{
                $collection->updateOne(['_id'=> new MongoDB\BSON\ObjectId("$id")],array('$set'=>(array("show"=>"1"))));
            }
            header("Location: ./admin/deshpack.php");
            // header("Location: dashboard.php");
            exit();
            }
        }
     }
     if(isset($_POST['id1'])){
        $id1 = $_POST['id1'];
        $cursor1 = $collection1->find(['_id'=> new MongoDB\BSON\ObjectId("$id1")]);
        if($cursor1){
                foreach($cursor1 as $data){
                // echo $data['show'];
                if($data['show']=="1"){
                    $collection1->updateOne(['_id'=> new MongoDB\BSON\ObjectId("$id1")],array('$set'=>(array("show"=>"0"))));
                } else{
                    $collection1->updateOne(['_id'=> new MongoDB\BSON\ObjectId("$id1")],array('$set'=>(array("show"=>"1"))));
                }
                // header("Location: dashboard.php");
                header("Location: ./admin/deshdesti.php");
                exit();
            }
        }

     }
     if(isset($_POST['id2'])){
        $id2 = $_POST['id2'];
        $cursor2 = $collection2->find(['_id'=> new MongoDB\BSON\ObjectId("$id2")]);
        if($cursor2){
                foreach($cursor2 as $data){
                // echo $data['show'];
                if($data['show']=="1"){
                    $collection2->updateOne(['_id'=> new MongoDB\BSON\ObjectId("$id2")],array('$set'=>(array("show"=>"0"))));
                } else{
                    $collection2->updateOne(['_id'=> new MongoDB\BSON\ObjectId("$id2")],array('$set'=>(array("show"=>"1"))));
                }
                header("Location: ./admin/deshserv.php");
                // header("Location: dashboard.php");
                exit();
            }
        }

     }

     
     
    
    
    
?>     