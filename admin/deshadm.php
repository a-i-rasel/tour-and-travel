<?php
    if(!isset($_COOKIE['admin'])){
        header("Location: ../adminlogin.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 p-0 text-bg-dark vh-100">
                <h1 class="h3 p-3 text-center text-light">Traveler</h1>
                <nav class="nav flex-column">
                    <a href="navber.php" class="nav-link">
                        <li class="list-group-item d-flex justify-content-between align-items-center text-light">
                            Dashboard
                            <span class="badge text-bg-primary badge-pill">14</span>
                        </li>
                    </a>
                    <a href="deshserv.php" class="nav-link">
                        <li class="list-group-item d-flex justify-content-between align-items-center text-light">
                            Services
                            <span class="badge text-bg-secondary badge-pill">4</span>
                        </li>
                    </a>
                    <a href="deshdesti.php" class="nav-link">
                        <li class="list-group-item d-flex justify-content-between align-items-center text-light">
                            Destination
                            <span class="badge text-bg-warning">4</span>
                        </li>
                    </a>
                    <a href="deshpack.php" class="nav-link">
                        <li class="list-group-item d-flex justify-content-between align-items-center text-light">
                            Packages
                            <span class="badge text-bg-secondary badge-pill">3</span>
                        </li>
                    </a>
                    <a href="deshrepo.php" class="nav-link">
                        <li class="list-group-item d-flex justify-content-between align-items-center text-light">
                            Report
                            <span class="badge text-bg-primary">11</span>
                        </li>
                    </a>
                    <a href="deshcus.php" class="nav-link">
                        <li class="list-group-item d-flex justify-content-between align-items-center text-light"
                            role="button" id="query">
                            Customer Query
                            <span class="badge text-bg-dark"><i class="fa-solid fa-clipboard-question"></i></span>
                        </li>
                    </a>
                    <a href="deshuselis.php" class="nav-link">
                        <li class="list-group-item d-flex justify-content-between align-items-center text-light"
                            role="button" id="userList">
                            User list
                        </li>
                    </a>
                    <a href="deshadm.php" class="nav-link">
                        <li class="list-group-item d-flex justify-content-between align-items-center text-light"
                            role="button" id="admin">
                            Admin Profile
                        </li>
                    </a>
                </nav>
            </div>
            <div class="col-10 p-0 m-0">
                <nav class="navbar bg-body-tertiary">
                    <div class="container-fluid w-100">
                        <!-- <form class="d-flex w-100" role="search" style="width: -webkit-fill-available;"> -->
                        <div class="col-11">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        </div>
                        <div class="col-1">
                            <form action="../logout.php" method="post">
                                <button class="btn btn-outline-success ms-1" name="alogout" type="submit">Signout</button></a>
                            </form>
                        </div>
                        <!-- </form> -->
                    </div>
                </nav>
                <div class="container" id="admin-box">
                    <div class="col" id="user-body">
                        <h1 class="text-center p-2">Admin Profile</h1>
                        <form action="../admin.php" method="post" class="border p-5" style="width: min-content; margin: auto;">
                            <label for="cpass" class="form-label">Current password : <input type="password" name="cpass" id="cpass"></label><br>
                            <label for="npass" class="form-label">New password : <input type="password" name="npass" id="npass" required></label><br>
                            <label for="cnpass" class="form-label">Confirm password : <input type="password" name="cnpass" id="cnpass"></label><br>
                            <p id='alert'></p>
                            <div class="text-center">
                                <input type="submit" name="submit" class="btn btn-outline-primary border">
                            </div>                            
                        </form>
                    </div>    
                </div>
            </div>
        </div>
    </div>


    <script>
        
    </script>
</body>

</html>