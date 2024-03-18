<?php
    require "vendor/autoload.php";

    // connect to the database
    $m = new MongoDB\Client();

    // select a database
    $db = $m->tourist;

    // create a collection
    $collection = $db->admin;
    $collection1 = $db->userInfo;
    // admin password change
    if(isset($_POST['submit'])){
        $cpass = $_POST['cpass'];
        $npass = $_POST['npass'];
        $cnpass = $_POST['cnpass'];
        if($npass == $cnpass){
            $admin = $collection->findOne(['password' => $cpass]);
            if($admin){
                $collection->updateOne(['password'=> $cpass], ['$set'=>['password' => $npass]]);
                $message = "Update Password Successful";
                echo "<script type='text/javascript'>alert('$message');
                setTimeout(() => {
                    // window.location.replace('http://localhost/tour%20and%20travel/dashboard.php');
                    window.location.replace('http://localhost/tour%20and%20travel/admin/deshadm.php');
                  }, 100);</script>";
                
            } else {
                $message = "Current Password is not match";
                echo "<script type='text/javascript'>alert('$message');
                setTimeout(() => {
                    // window.location.replace('http://localhost/tour%20and%20travel/dashboard.php');
                    window.location.replace('http://localhost/tour%20and%20travel/admin/deshadm.php');
                  }, 100);</script>";
                // header("Location: dashboard.php");
            }
        } else {
            $message = "New pass and confirm password are not match";
            echo "<script type='text/javascript'>alert('$message');
            setTimeout(() => {
                // window.location.replace('http://localhost/tour%20and%20travel/dashboard.php');
                window.location.replace('http://localhost/tour%20and%20travel/admin/deshadm.php');
              }, 100);</script>";
            // header("Location: dashboard.php");
        }
    }
    // user password change
    if(isset($_POST['confirm'])){
        $cpass = $_POST['cpass'];
        $npass = $_POST['npass'];
        $cnpass = $_POST['cnpass'];
        $useremail = $_COOKIE['user'];
        if($npass == $cnpass){
            $user = $collection1->findOne(['useremail' => $useremail]);
            if($user['password']==$cpass){
                $collection1->updateOne(['useremail'=>$useremail], ['$set'=>['password' => $npass]]);
                $message = "Update Password Successful";
                echo "<script type='text/javascript'>alert('$message');
                setTimeout(() => {
                    window.location.replace('http://localhost/tour%20and%20travel/profile.php');
                  }, 100);</script>";
                // header("Location: profile.php");
            } else {
                $message = "Current Password is not match";
                echo "<script type='text/javascript'>alert('$message');
                setTimeout(() => {
                    window.location.replace('http://localhost/tour%20and%20travel/profile.php');
                  }, 100);
                  </script>";
                // header("Location: profile.php");
            }
        } else {
            $message = "New pass and confirm password are not match";
            echo "<script type='text/javascript'>alert('$message');
            setTimeout(() => {
                window.location.replace('http://localhost/tour%20and%20travel/profile.php');
              }, 100);</script>";
            // header("Location: profile.php");
        }
    }
?>