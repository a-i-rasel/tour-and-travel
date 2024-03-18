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
    if (isset($_COOKIE['user'])) {
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


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Agency</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
    <section class="h-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4">Sign up</p>

                                    <form class="mx-1 mx-md-4" action="" method="post">

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" name="name" id="form3Example1c" class="form-control"
                                                    required />
                                                <label class="form-label" for="form3Example1c">Your Name</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="email" name="email" id="form3Example3c"
                                                    class="form-control" required />
                                                <label class="form-label" for="form3Example3c">Your Email</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" name="password" id="form3Example4c"
                                                    class="form-control" required />
                                                <label class="form-label" for="form3Example4c">Password</label>
                                            </div>
                                        </div>

                                        <!-- <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" id="form3Example4cd" class="form-control" />
                                                <label class="form-label" for="form3Example4cd">Repeat your
                                                    password</label>
                                            </div>
                                        </div> -->

                                        <div class="form-check d-flex justify-content-center mb-3" style="width: 380px;">
                                            <input class="form-check-input me-2" type="checkbox" value=""
                                                id="form2Example3c" />
                                            <label class="form-check-label" for="form2Example3">
                                                I agree all statements in <a href="#!">Terms of service</a>
                                            </label>
                                            <p class="small fw-bold mb-0">Already have an account? <a href="signin.php" class="link-danger">Login</a></p>
                                        </div>
                                       
                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <input type="submit" class="btn btn-primary btn-lg" name="Register"
                                                value="Register" />
                                        </div>

                                    </form>

                                </div>
                                
                            </div>
                            <div class="text-center">
                                <a href="index.php" class="text-center mt-5"><strong>Back To Home</strong></a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>