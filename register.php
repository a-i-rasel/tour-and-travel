<?php
session_start();

    require "vendor/autoload.php";

    // connect to the database
    $m = new MongoDB\Client();

    // select a database
    $db = $m->tourist;

    // create a collection
    $collection = $db->userInfo;

    // Check if the user is already logged in
    if (isset($_SESSION['user'])) {
        header("Location: index.php"); // Redirect to the main page if already logged in
        exit();
    }

// Check if the registration form is submitted
if (isset($_POST['Register'])) {
    // Perform user registration (replace with your actual registration logic)
    $username = $_POST['name'];
    $useremail = $_POST['email'];
    $password = $_POST['password'];

    // Example: Save user information to a database (replace with your own registration logic)
    // For simplicity, using plain text password here. In a real-world scenario, use hashed passwords.

    // Assuming you have a database connection
    $user = $collection->findOne(["useremail" => $useremail]);
    if(isset($user)){
        echo '<p style="color: red;">This acoount is already registered</p>';
    }else{
        $document = array(
        "username"=> $username,
        "useremail"=> $useremail,
        "password"=> $password
        );
        $collection->insertOne($document);
        
        header("Location: index.php");
        exit();
    }
    

}
?>

