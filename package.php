<?php
     require "vendor/autoload.php";

     // connect to the database
     $m = new MongoDB\Client();
 
     // select a database
     $db = $m->tourist;
 
     // create a collection
     $collection = $db->package;

     // insert a documenet
     if(isset($_POST['pacSave'])){
        $img = $_POST['imgf'];
        $id = $_POST['idf'];
        $place = $_POST['placef'];
        $days = $_POST['dayf'];
        $person = $_POST['personf'];
        $price = $_POST['pricef'];
        $rating = $_POST['ratingf'];
        $description = $_POST['desf'];
        $show = $_POST['showf'];
        
        $document = array(
            "img"=> $img,
            "id"=> $id,
            "place"=> $place,
            "days"=> $days,
            "person"=> $person,
            "price"=> $price,
            "rating"=> $rating,
            "description"=> $description,
            "show"=> $show,
        );
        $collection->insertOne($document);
        header("Location: ./admin/navber.php");
        // header("Location: dashboard.php");
        exit();
    }

    // $collection->deleteOne(array("_id"=>$id));

    $cursor = $collection->find();

    // Convert the documents to an array
    $documents = iterator_to_array($cursor);

    // Output the data as JSON
    header('Content-Type: application/json');
    echo json_encode($documents);
    header('Access-Control-Allow-Origin: *');

?>

