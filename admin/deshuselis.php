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
        .table-responsive{
            height: 75vh;
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
                <div class="container" id="user-box">
                    <div class="col p-2" id="user-body">
                        <h1 class="text-center">User List</h1>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">UserName</th>
                                <th scope="col">UserEmail</th>
                                <th scope="col">UserPass</th>
                                <th scope="col">Delete User</th>
                                </tr>
                            </thead>
                            <tbody id="user-tr">
                                <tr></tr>
                            </tbody>
                        </table>    
                        <script>
                            fetch('../userInfo.php')
                                .then(response => response.json())
                                .then(data => {
                                    let count=0;
                                    let arr = new Array();
                                    data.forEach(doc => {
                                        count++;
                                        
                                        arr.push(`<tr>
                                                    <td>${doc.username}</td>
                                                    <td>${doc.useremail}</td>
                                                    <td>${doc.password}</td>
                                                    <td><form action="../deluser.php" method="post">                                
                                                            <button class="btn btn-primary mx-1" name="id" value="${doc._id.$oid}">Delete User</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                        `);
                                    });
                                    
                                    const field = document.getElementById("user-tr");
                                    field.innerHTML = arr.join("");
                                })
                                .catch(error => console.error('Error fetching data:', error));
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        
    </script>
</body>

</html>