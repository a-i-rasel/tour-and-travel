<?php
    require "vendor/autoload.php";

    // connect to the database
    $m = new MongoDB\Client();

    // select a database
    $db = $m->tourist;

    // create a collection
    $collection = $db->userInfo;
    $collection1 = $db->userbooking;
    $collection2 = $db->package;
    $collection3 = $db->userDesBook;

    if(isset($_POST['submit'])){
        $useremail = $_COOKIE['user'];
        // echo $useremail;
        $user = $collection->findOne(["useremail" => $useremail]);
        $username = $user['username'];
        $packId = $_POST['id'];
        $pacdetails = $collection2->findOne(["id" => $packId]);
        $des = $pacdetails['place'];
        $pric = $pacdetails['price'];
        $date = date("Y-m-d");
        $document = array(
            "username"=> $username,
            "useremail"=> $useremail,
            "desti"=> $des,
            "price"=> $pric,
            "packId"=> $packId,
            "date"=> $date,
        );
        $collection1->insertOne($document);
        echo "<script type='text/javascript'>alert('You have successfully book your tour!');
                setTimeout(() => {
                    window.location.replace('http://localhost/tour%20and%20travel/profile.php');
                  }, 100);</script>";
        // header("Location: index.php");
        // header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
        
    }

    if(isset($_POST['cancel'])){
        $id = $_POST['cancel'];
        $collection1->deleteOne(['_id'=> new MongoDB\BSON\ObjectId("$id")]);
        // header("Location: http://localhost/tour%20and%20travel/profile.php");
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    }

    $cursor = $collection1->find();
    // Convert the documents to an array
    $documents = iterator_to_array($cursor);

    // Output the data as JSON
    header('Content-Type: application/json');
    echo json_encode($documents);
    header('Access-Control-Allow-Origin: *');

?>