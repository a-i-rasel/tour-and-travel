<?php
    require "vendor/autoload.php";

    // connect to the database
    $m = new MongoDB\Client();

    // select a database
    $db = $m->mydb;

    // create a collection
    $collection = $db->myDatabase;
    
    // bring data from user register form
    // if(isset($_POST['Register'])){
    //     echo $_POST['name']."<br>";
    //     echo $_POST['email']."<br>";
    //     echo $_POST['password']."<br>";
    // }

    // insert into the database
    if(isset($_POST['Register'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        
        $document = array(
            "name"=> $name,
            "email"=> $email,
            "password"=> $pass
        );
        $collection->insertOne($document);
        header("Location: signin.html");
    }

    // update a single data
    // $collection->updateOne(array("name"=>"rasel"),array('$set'=>(array("password"=>"test@123"))));

    // delete a collection from database
    // $collection->deleteOne(array("name"=>""));

    // get all the data in a database collection
    // $cursor = $collection->find();
    // foreach($cursor as $data){
    //     echo $data["name"] . "<br>";
    //     echo $data["email"] . "<br>";
    //     echo $data["password"] . "<br><br>";
    // }

    // after login 
    if(isset($_POST['Login'])){
        $email = $_POST['uemail'];
        $pass = $_POST['upass'];
        // echo $email . "<br>";
        // echo $pass;
        // logical and operation to find the data
        // $filter = [
        //     '$and' => [
        //         ['email' => $email],
        //         ['password' => $pass],
        //     ],
        // ];
        
        // $cursor = $collection->find($filter);
        
        $user = $collection->findOne(["email" => $email]);

        // Check if a user was found
        if ($user) {
            // Verify the password
            if ($pass == $user["password"]) {
                // Authentication successful
                echo "Login successful. Welcome, {$user['name']}!";
                header("Location: dashboard.html");
            } else {
                // Incorrect password
                $msg = "Incorrect password. Please try again.";
                echo "<script type='text/javascript'>alert('$msg');</script>";
            }
        } else {
            // User not found
            $msg = "User not found. Please check your username.";
            echo "<script type='text/javascript'>alert('$msg');</script>";
        }
        
        // if($cursor->ObjectId){
        //     echo "login success";
        // }else{
        //     echo "login failed";
        // }

    }


?>