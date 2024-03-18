<?php
     require "vendor/autoload.php";

     // connect to the database
     $m = new MongoDB\Client();
 
     // select a database
     $db = $m->tourist;
 
     // create a collection
     $collection = $db->destination;
     if(isset($_GET['submit'])){
        $id=$_GET['id'];
        $im = $_GET['im'];
        $loc = $_GET['loc'];
        $per = $_GET['per'];
        $show = $_GET['show'];
        
        $collection->updateOne(['_id'=> new MongoDB\BSON\ObjectId("$id")],array('$set'=>(array("img"=> "${im}", "loc"=> $loc, "per"=> $per, "show"=> $show))));
        // header("Location: dashboard.php");
        header("Location: ./admin/deshdesti.php");
        exit();
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
    <h1 class="text-center p-2">Update Destination</h1>
    <form action="" method="get" class="card p-3">        
        <label for="im">img : <input type="file" class="form-control" name="im" id="im" accept="image/*" required></label><br> 
        <label for="loc">loc : <input type="text" class="form-control" name="loc" id="loc" required></label><br>
        <label for="per">per : <input type="text" class="form-control" name="per" id="per" required></label><br>
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


