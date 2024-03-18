<?php
    require "vendor/autoload.php";

    // connect to the database
    $m = new MongoDB\Client();

    // select a database
    $db = $m->tourist;

    // create a collection
    $collection = $db->userInfo;
    $collection1 = $db->admin;
    // Check if the user is already logged in
    if (isset($_SESSION['user'])) {
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
            $_SESSION['user'] = $user['username'];
            // Redirect to the main page after successful login
            header("Location: index.php");
            exit();
        } else {
            $error = "Invalid username or password.";
        }
    }
    if (isset($_POST['Login'])) {
        // Perform user authentication (replace with your actual authentication logic)
        $useremail = $_POST['uemail'];
        $password = $_POST['upass'];

        // Example: Authenticate against a user database (replace with your own authentication logic)
        // For simplicity, using plain text password here. In a real-world scenario, use hashed passwords.
        // $cursor = $collection->find();
        $admin = $collection1->findOne(["useremail" => $useremail]);
        if ($useremail === $user['useremail'] && $password === $user["password"]) {
            // Set the user session variable
            $_SESSION['user'] = $user['username'];
            // Redirect to the main page after successful login
            header("Location: index.php");
            exit();
        } else {
            $error = "Invalid username or password.";
        }
    }
?>

<?php
// Display error message if authentication failed
if (isset($error)) {
    echo '<p style="color: red;">' . $error . '</p>';
}
?>

