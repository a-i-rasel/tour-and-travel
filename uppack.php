<?php
     require "vendor/autoload.php";
     require "classes/package.class.php";

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
        $pid = $_GET['pid'];
        $day = $_GET['day'];
        $person = $_GET['person'];
        $price = $_GET['price'];
        $rating = $_GET['rating'];
        $des = $_GET['des'];
        $show = $_GET['show'];

        $package = new Package();
        $package->setPackage($id, $im, $place, $pid, $day, $person, $price, $rating, $des, $show);
        $result = $package->getPackage($globals);
        echo $result;

        // $collection->updateOne(['_id'=> new MongoDB\BSON\ObjectId("$id")],array('$set'=>(array("img"=> "${im}", "place"=> $place, "id"=> $pid, "days"=> $day, "person"=> $person, "price"=> $price, "rating"=> $rating, "description"=>$des, "show"=> $show))));
        // // header("Location: dashboard.php");
        // header("Location: ./admin/deshpack.php");
        // exit();
    }
     if(isset($_POST['id'])){ 
         $ids = $_POST['id'];
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        form{
            width: fit-content;
            margin: auto;
        }
    </style>
</head>
<body class="bg-secondary">
    <h1 class="text-center p-2">Update Package</h1>
    <form action="" method="get" class="card p-3 w-50">        
        <label for="im">img : <input type="file" class="form-control" name="im" id="im" accept="image/*" required></label>       
        <div class="row gx-2">
            <div class="col-6">
                <label for="place">place : </label>
                <input type="text" class="form-control" name="place" id="place" required>
            </div>
            <div class="col-6">
                <label for="id">id :</label>
                <input type="text" class="form-control" name="pid" id="pid" required>
            </div>
        </div>
        <div class="row gx-4">
            <div class="col-3">
                <label for="day">days : <input type="text" class="form-control" name="day" id="day" required></label>
            </div>
            <div class="col-3">
                <label for="person">person : <input type="text" class="form-control" name="person" id="person" required></label>
            </div>
            <div class="col-3">
                <label for="price">price : <input type="text" class="form-control" name="price" id="price" required></label>
            </div>
            <div class="col-3">
                <label for="rating">rating : <input type="text" class="form-control" name="rating" id="rating" required></label>
            </div>
        </div>       
        
        <label for="des">description : <input type="text" class="form-control" name="des" id="des" required></label>
        <!-- <label for="show">Featured : <input type="text" name="show" id="show" placeholder="0/1" required></label><br> -->
        <label for="show">Featured : <input type="radio" name="show" id="show1" value="1" default><label for="show1" class="px-2">true</label><input type="radio" name="show" id="show2" value="0"><label for="show2" class="px-2">false</label></label><br>
        <input type="hidden" name="id" value="<?php echo $ids; ?>">
        <input type="submit" class="btn btn-primary" name="submit"><br>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
   <?php 

    }
?> 


