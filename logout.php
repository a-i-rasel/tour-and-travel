<?php

    setcookie("user", "", time() - (86400 * 30));
    if(isset($_POST["alogout"])){
        setcookie("admin", "", time() - (86400 * 30));
        header("Location: adminlogin.php");
        exit();
    }

    // Redirect to the main page after logout
    header("Location: signin.php");
    exit();
?>
