<?php
    require "vendor/autoload.php";

    // connect to the database
    $m = new MongoDB\Client();

    // select a database
    $db = $m->tourist;

    // create a collection
    $collection = $db->service;
    // $filter = ["tittle"=>"WorldWide Tours"];

    // insert a document
    if(isset($_POST['servSave'])){
        $tittle = $_POST['tittlef'];
        $description = $_POST['desf'];
        $iconClass = $_POST['iconf'];
        $show = $_POST['showf'];
        
        $document = array(
            "tittle"=> $tittle,
            "description"=> $description,
            "iconClass"=> $iconClass,
            "show"=> $show,
        );
        $collection->insertOne($document);
        header("Location: ./admin/navber.php");
        // header("Location: dashboard.php");
        exit();
    }

    $cursor = $collection->find();
    // foreach($cursor as $data){
    //     echo $data["tittle"];
    // }
    // Convert the documents to an array
    $documents = iterator_to_array($cursor);

    // Output the data as JSON
    header('Content-Type: application/json');
    echo json_encode($documents);
    header('Access-Control-Allow-Origin: *');


    // $cursor1 = $collection->findOne(array("tittle"=>"WorldWide Tours"));
    // echo json_encode($cursor1);   
    // echo $cursor["tittle"] . "<br>";
    // echo $cursor["description"] . "<br>";

    // $cursor2 = $collection->findOne(array("tittle"=>"Hotel Reservation"));
    // echo json_encode($cursor2);
    // echo $cursor["tittle"] . "<br>";
    // echo $cursor["description"] . "<br>";

    // $cursor3 = $collection->findOne(array("tittle"=>"Travel Guides"));
    // echo json_encode($cursor3);
    // echo $cursor["tittle"] . "<br>";
    // echo $cursor["description"] . "<br>";

    // $cursor4 = $collection->findOne(array("tittle"=>"Event Management"));
    // echo json_encode($cursor4);
    // echo $cursor["tittle"] . "<br>";
    // echo $cursor["description"] . "<br>";

    // $cursor = array($cursor1,$cursor2,$cursor3,$cursor4);
    // foreach($cursor as $data){
    //     echo $data["tittle"] . "<br>";
    //     echo $data["description"] . "<br>";
    // }
    // echo json_encode($cursor);

?>