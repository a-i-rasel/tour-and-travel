<?php
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



    // Check if the login form is submitted
    if (isset($_POST['Login'])) {
        // Perform user authentication (replace with your actual authentication logic)
        $useremail = $_POST['uemail'];
        $password = $_POST['upass'];
        
        // Example: Authenticate against a user database (replace with your own authentication logic)
        // For simplicity, using plain text password here. In a real-world scenario, use hashed passwords.
        // $cursor = $collection->find();
        $user = $collection->findOne(["useremail" => $useremail]);
        if ($useremail === $user['useremail'] && $password === $user["password"]) {
            // Set the user session variable
            //$_COOKIE['user'] = $user['username'];

            setcookie('user', $useremail, time() + (86400 * 30)); // 86400 = 1 day
            // Redirect to the main page after successful login
            header("Location: index.php");
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
    <title>Travel Agency</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">

                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form class="mx-1 mx-md-4" action="" method="post">
                        <div class="d-flex flex-row align-items-center justify-content-center">
                            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4">Sign In</p>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" name="uemail" id="form3Example3" class="form-control form-control-lg"
                                placeholder="Enter a valid email address" />
                            <label class="form-label" for="form3Example3">Email address</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" name="upass" id="form3Example4" class="form-control form-control-lg"
                                placeholder="Enter password" />
                            <label class="form-label" for="form3Example4">Password</label>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                <label class="form-check-label" for="form2Example3">
                                    Remember me
                                </label>
                            </div>
                            <!-- <a href="#!" class="text-body">Forgot password?</a> -->
                        </div>

                        <div class="text-center mt-2 pt-2">
                            <input type="submit" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;" name="Login" value="Login" />
                            <p class="text-lg-start small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="reg.php" class="link-danger">Register</a></p>
                            
                        </div>

                    </form>

                </div>
                <div class="container d-flex justify-content-center">
                    <a href="index.php" class="text-center mt-5 mx-5"><strong>Back To Home</strong></a>
                    <a href="adminlogin.php" class="text-center mt-5 mx-5"><strong>Admin Login</strong></a>
                </div>
                
            </div>
        </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>