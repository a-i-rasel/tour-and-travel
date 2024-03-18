<?php
    require "vendor/autoload.php";

    // connect to the database
    $m = new MongoDB\Client();

    // select a database
    $db = $m->tourist;

    // create a collection
    $collection = $db->admin;
    // Check if the user is already logged in
    if (isset($_COOKIE['admin'])) {
        // header("Location: dashboard.php"); // Redirect to the main page if already logged in
        header("Location: ./admin/navber.php");
        exit();
    }



    // Check if the login form is submitted
    if (isset($_POST['login'])) {
        // Perform user authentication (replace with your actual authentication logic)
        $useremail = $_POST['email'];
        $password = $_POST['password'];
        
        // Example: Authenticate against a user database (replace with your own authentication logic)
        // For simplicity, using plain text password here. In a real-world scenario, use hashed passwords.
        // $cursor = $collection->find();
        $user = $collection->findOne(["useremail" => $useremail]);
        if ($useremail === $user['useremail'] && $password === $user["password"]) {
            // Set the user session variable
            //$_COOKIE['user'] = $user['username'];

            setcookie('admin', $useremail, time() + (86400 * 30)); // 86400 = 1 day
            // Redirect to the main page after successful login
            // header("Location: dashboard.php");
            header("Location: ./admin/navber.php");
            exit();
        } else {
            $error = "Invalid username or password.";
        }
    }
    // Display error message if authentication failed
    if (isset($error)) {
        echo '<p style="color: red;">' . $error . '</p>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4">Admin Login</p>

                                    <form class="mx-1 mx-md-4" action="" method="post">

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
                                       
                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <input type="submit" class="btn btn-primary btn-lg" name="login"
                                                value="Login" />
                                        </div>

                                    </form>

                                </div>
                                
                            </div>
                            <a href="index.php" class="text-center mt-5"><strong>Back To Home</strong></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>