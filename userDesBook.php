<?php
    require "vendor/autoload.php";

    // connect to the database
    $m = new MongoDB\Client();

    // select a database
    $db = $m->tourist;

    // create a collection
    $collection = $db->userDesBook;

    // if(isset($_POST['submit'])){
    //     $useremail = $_COOKIE['user'];
    //     // echo $useremail;
    //     $user = $collection->findOne(["useremail" => $useremail]);
    //     $username = $user['username'];
    //     $desId = $_POST['id'];
    //     $document = array(
    //         "username"=> $username,
    //         "useremail"=> $useremail,
    //         "packId"=> "ObjectId('${desId}')",
    //     );
    //     $collection->insertOne($document);
    //     header("Location: index.php");
    // }

    if(isset($_POST['submit'])){
        $useremail = $_COOKIE['user'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $date = $_POST['date'];
        $dest = $_POST['selectOption'];
        $msg = $_POST['msg'];
        $document = array(
            "user"=> $useremail,
            "name"=> $name,
            "email"=> $email,
            "date"=> $date,
            "destination"=> $dest,
            "msg"=> $msg,
        );
        $collection->insertOne($document);
        // header("Location: " . $_SERVER['HTTP_REFERER']);
        header("Location: index.php");
        exit();
    }

    if(isset($_POST['reject'])){
        $id = $_POST['reject'];
        $collection->deleteOne(['_id'=> new MongoDB\BSON\ObjectId("$id")]);
        // header("Location: dashboard.php");
        header("Location: " . $_SERVER['HTTP_REFERER']);
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