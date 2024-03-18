<?php
    if(!isset($_COOKIE['admin'])){
        header("Location: adminlogin.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .box {
            position: relative;
        }

        .containerbackground {
            margin: 0;
            position: absolute;
            font-size: 5rem;
            width: 30rem;
            top: 270px;
            right: -170px;
            z-index: -1;
            transform: rotate(-270deg);
            -webkit-transform: rotate(-270deg);
            color: rgb(197, 166, 166);
        }

        .list-group li {
            border: 0;
        }

        .hide {
            display: none;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            margin: auto;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
            -webkit-animation-name: fadeIn;
            /* Fade in the background */
            -webkit-animation-duration: 0.4s;
            animation-name: fadeIn;
            animation-duration: 0.4s
        }

        /* Modal Content */
        .modal-content {
            margin: auto;
            background-color: #fefefe;
            width: 50%;
            -webkit-animation-name: slideIn;
            -webkit-animation-duration: 0.4s;
            animation-name: slideIn;
            animation-duration: 0.4s
        }

        /* The Close Button */
        .close {
            color: white;
            float: right;
            /* font-size: 28px; */
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-header {
            padding: 2px 16px;
            background-color: #5cb85c;
            color: white;
        }

        .modal-header h2 {
            margin: auto;
        }

        .modal-body {
            padding: 2px 16px;
        }

        .modal-footer {
            padding: 2px 16px;
            /* background-color: #5cb85c; */
            color: white;
            justify-content: center;
        }

        /* Add Animation */
        @-webkit-keyframes slideIn {
            from {
                bottom: -300px;
                opacity: 0
            }

            to {
                bottom: 0;
                opacity: 1
            }
        }

        @keyframes slideIn {
            from {
                bottom: -300px;
                opacity: 0
            }

            to {
                bottom: 0;
                opacity: 1
            }
        }

        @-webkit-keyframes fadeIn {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }
    </style>
</head>

<body>

    <div class="box">
        <div class="row m-0">
            <div class="containerbackground">
                Admin Panel
            </div>
            <div class="col-2 p-0">
                <h1 class="h3 p-2 text-center text-light bg-dark">Traveler</h1>
                <div class="row line">
                    <div class="col-12">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center" role="button"
                                id="desh" onclick="deshOpen()">
                                Dashboard
                                <span class="badge text-bg-primary badge-pill">14</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center" role="button"
                                id="serv" onclick="servOpen()">
                                Services
                                <span class="badge text-bg-secondary badge-pill">4</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center" role="button"
                                id="dest" onclick="destOpen()">
                                Destination
                                <span class="badge text-bg-warning">4</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center" role="button"
                                id="pack" onclick="packOpen()">
                                Packages
                                <span class="badge text-bg-secondary badge-pill">3</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center" role="button"
                                id="report" onclick="repOpen()">
                                Report
                                <span class="badge text-bg-primary">11</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center" role="button"
                                id="query" onclick="queOpen()">
                                Customer Query
                                <span class="badge text-bg-dark"><i class="fa-solid fa-clipboard-question"></i></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center" role="button"
                                id="userList" onclick="userOpen()">
                                User list
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center" role="button"
                                id="admin" onclick="adminOpen()">
                                Admin Profile
                            </li>
                        </ul>
                        <p class="mt-3 d-flex justify-content-around align-items-center text-body-tertiary">Saved
                            report <strong><span class="badge text-bg-light">+</span></strong></p>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Current month
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Last quater
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Year-end-sale
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-10">
                <div class="row">
                    <div class="col-12 p-0">
                        <nav class="navbar bg-body-tertiary d-flex">
                            <div class="row w-100">
                                <div class="col-11">
                                    <input type="search" class="ps-2 w-100 h-100 border-0" placeholder="search">
                                </div>
                                <div class="col-1">
                                    <a href="logout.php"><button class="btn btn-outline-success"
                                            type="submit">Signout</button></a>
                                </div>
                            </div>
                        </nav>
                        <div class="row row-cols-1 row-cols-md-2 g-4" id="desh1" style="width:90%;">
                            <div class="col" id="pack1">
                                <div class="card text-center m-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Currently available Package</h5>
                                        <p class="card-text h1" id="numOfPac"></p>
                                        <script>
                                            fetch('package.php')
                                                .then(response => response.json())
                                                .then(data => {
                                                    const p = document.getElementById("numOfPac");
                                                    let count = 0;
                                                    data.forEach(doc => {
                                                        count++;
                                                    });
                                                    p.innerHTML = count;
                                                })
                                                .catch(error => console.error('Error fetching data:', error));
                                        </script>
                                        <!-- <a href="" class="btn btn-primary">Add Package</a> -->
                                        <!-- Trigger/Open The Modal -->
                                        <button class="btn btn-primary" id="myBtn">Add Package</button>

                                        <!-- The Modal -->
                                        <div id="myModal" class="modal">

                                            <!-- Modal content -->
                                            <div class="modal-content text-center">
                                                <div class="modal-header">
                                                    <h2>Package</h2>
                                                    <span class="close h2">&times;</span>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="package.php" method="post">
                                                        select img : <input type="file" name="imgf" accept="image/*"
                                                            required><br>
                                                        place : <input type="text" name="placef" required><br>
                                                        id : <input type="text" name="idf" required><br>
                                                        days : <input type="text" name="dayf" required><br>
                                                        person : <input type="text" name="personf" required><br>
                                                        price : <input type="text" name="pricef" required><br>
                                                        rating : <input type="text" name="ratingf" required><br>
                                                        description : <input type="text" name="desf" required><br>
                                                        show : <input type="text" name="showf" required><br><br>
                                                        <div class="modal-footer">
                                                            <input type="submit" class="btn btn-primary" name="pacSave">
                                                            <button class="btn btn-secondary close">Cancel</button>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-body-secondary"></small>
                                    </div>
                                </div>
                            </div>
                            <div class="col" id="serv1">
                                <div class="card text-center m-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Currently available Service</h5>
                                        <p class="card-text h1" id="numOfServ"></p>
                                        <script>
                                            fetch('service.php')
                                                .then(response => response.json())
                                                .then(data => {
                                                    const p = document.getElementById("numOfServ");
                                                    let count = 0;
                                                    data.forEach(doc => {
                                                        count++;
                                                    });
                                                    p.innerHTML = count;
                                                })
                                                .catch(error => console.error('Error fetching data:', error));
                                        </script>
                                        <!-- <a href="#" class="btn btn-primary">Add Service</a> -->
                                        <!-- Trigger/Open The Modal -->
                                        <button class="btn btn-primary" id="myBtn1">Add Service</button>

                                        <!-- The Modal -->
                                        <div id="myModal1" class="modal">

                                            <!-- Modal content -->
                                            <div class="modal-content text-center">
                                                <div class="modal-header">
                                                    <h2>Service</h2>
                                                    <span class="close h2">&times;</span>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="service.php" method="post">
                                                        tittle : <input type="text" name="tittlef" required><br>
                                                        description : <input type="text" name="desf" required><br>
                                                        iconClass : <input type="text" name="iconf" required><br>
                                                        show : <input type="text" name="showf" required><br><br>
                                                        <div class="modal-footer">
                                                            <input type="submit" class="btn btn-primary"
                                                                name="servSave">
                                                            <button class="btn btn-secondary close">Cancel</button>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-body-secondary"></small>
                                    </div>
                                </div>
                            </div>
                            <div class="col" id="dest1">
                                <div class="card text-center m-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Currently available Destination</h5>
                                        <p class="card-title h1" id="numOfDes"></p>
                                        <script>
                                            fetch('destination.php')
                                                .then(response => response.json())
                                                .then(data => {
                                                    const p = document.getElementById("numOfDes");
                                                    let count = 0;
                                                    data.forEach(doc => {
                                                        count++;
                                                    });
                                                    p.innerHTML = count;
                                                })
                                                .catch(error => console.error('Error fetching data:', error));
                                        </script>
                                        <!-- <a href="#" class="btn btn-primary">Add Destination</a> -->
                                        <!-- Trigger/Open The Modal -->
                                        <button class="btn btn-primary" id="myBtn2">Add Destination</button>

                                        <!-- The Modal -->
                                        <div id="myModal2" class="modal">

                                            <!-- Modal content -->
                                            <div class="modal-content text-center">
                                                <div class="modal-header">
                                                    <h2>Destination</h2>
                                                    <span class="close h2">&times;</span>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="destination.php" method="post">
                                                        select img : <input type="file" name="imgf" accept="image/*"
                                                            required><br>
                                                        loc : <input type="text" name="locf" required><br>
                                                        per : <input type="text" name="perf" required><br>
                                                        show : <input type="text" name="showf" required><br><br>
                                                        <div class="modal-footer">
                                                            <input type="submit" class="btn btn-primary" name="desSave">
                                                            <button class="btn btn-secondary close">Cancel</button>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-body-secondary"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container hide" id="pac-box">
                            <!-- <div class="d-flex justify-content-end m-3">
                                <button class="btn btn-primary mx-1">Edit Package</button>
                                <button class="btn btn-primary mx-1">Delete Package</button>
                            </div> -->
                            <!-- <div class="row g-4" id="pack-body" style="width: 90%;"> -->
                            <div class="row" id="pack-body" style="width: 90%;">
                                <h1 class="text-center">Packages</h1>
                                <div class="table-responsive">
                                    <table class="table table-bordered align-middle">
                                        <thead>
                                        <tr>
                                            <th scope="col">image</th>
                                            <th scope="col">id</th>
                                            <th scope="col">Place</th>
                                            <th scope="col">Days</th>
                                            <th scope="col">Person</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">IsFeatured</th>
                                            <th scope="col">Change Featured</th>
                                            <th scope="col">Edit Package</th>
                                            <th scope="col">Delete Package</th>
                                        </tr>
                                        </thead>
                                        <tbody id="pac-tr">
                                            <tr></tr>
                                        </tbody>
                                    </table>  
                                </div>  
                                <script>
                                    fetch('package.php')
                                        .then(response => response.json())
                                        .then(data => {
                                            let count=0;
                                            let arr = new Array();
                                            data.forEach(doc => {
                                                count++;
                                                // console.log(doc._id.$oid);
                                                // arr.push(`<div class="col-4">
                                                //     <div class="overflow-hidden">
                                                //         <img class="img-fluid" src="${doc.img}" alt="Place image">
                                                //     </div>
                                                //     <div class="d-flex border-bottom">
                                                //         <small class="flex-fill text-center border-end py-2"><i
                                                //             class="fa fa-map-marker-alt text-primary me-2"></i>${doc.place}</small>
                                                //         <small class="flex-fill text-center border-end py-2"><i
                                                //             class="fa fa-calendar-alt text-primary me-2"></i>${doc.days}</small>
                                                //         <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>${doc.person}</small>
                                                //     </div>
                                                //     <div class="text-center p-1">
                                                //         <h3 class="mb-0">${doc.price}</h3>
                                                //         <p>${doc.description}</p>    
                                                //     </div>
                                                //     <div class="text-center p-0">
                                                //         <h6 class="mb-0">IsFeatured : ${doc.show}</h3>
                                                //         <div class="text-center p-0">
                                                //             Change featured:
                                                //             <form action="upfeat.php" method="post">
                                                //                 <button class="btn btn-primary mx-1" name="id" value="${doc._id.$oid}">0/1</button>
                                                //             </form>
                                                //         </div>  
                                                //     </div> 
                                                //     <div class="d-flex justify-content-end m-1">
                                                //         <form action="uppack.php" method="post">
                                                //             <button class="btn btn-primary mx-1" name="id" value="${doc._id.$oid}">Edit Package</button>
                                                //         </form>
                                                //         <form action="delpack.php" method="post">                                
                                                //             <button class="btn btn-primary mx-1" name="id" value="${doc._id.$oid}">Delete Package</button>
                                                //         </form>
                                                //     </div>
                                                // </div>`);
                                                arr.push(`<tr>
                                                            <td>${doc.img}</td>
                                                            <td>${doc.id}</td>
                                                            <td>${doc.place}</td>
                                                            <td>${doc.days}</td>
                                                            <td>${doc.person}</td>
                                                            <td>${doc.price}</td>
                                                            <td>${doc.description}</td>
                                                            <td>${doc.show}</td>
                                                            <td><form action="upfeat.php" method="post">
                                                                    <button class="btn btn-primary mx-1" name="id" value="${doc._id.$oid}">0/1</button>
                                                                </form>
                                                            </td>
                                                            <td><form action="uppack.php" method="post">
                                                                    <button class="btn btn-primary mx-1" name="id" value="${doc._id.$oid}">Edit Package</button>
                                                                </form>
                                                            </td>
                                                            <td><form action="delpack.php" method="post">                                
                                                                    <button class="btn btn-primary mx-1" name="id" value="${doc._id.$oid}">Delete Package</button>
                                                                </form>
                                                            </td>
                                                        </tr>`);
                                            });
                                            // const field = document.getElementById("pack-body");
                                            const field = document.getElementById("pac-tr");
                                            field.innerHTML = arr.join("");
                                        })
                                        .catch(error => console.error('Error fetching data:', error));
                                </script>
                            </div>
                        </div>
                        <div class="container hide" id="des-box">
                            <!-- <div class="d-flex justify-content-end m-3">
                                <button class="btn btn-primary mx-1">Edit Package</button>
                                <button class="btn btn-primary mx-1">Delete Package</button>
                            </div> -->
                            <!-- <div class="row g-4" id="des-body" style="width: 90%;"> -->
                            <div class="row" id="des-body" style="width: 90%;">
                                <h1 class="text-center">Destination</h1>
                                <div class="table-responsive">
                                    <table class="table table-bordered align-middle">
                                        <thead>
                                        <tr>
                                            <th scope="col">Image</th>
                                            <th scope="col">Location</th>
                                            <th scope="col">Percentage</th>
                                            <th scope="col">IsFeatured</th>
                                            <th scope="col">Change Featured</th>
                                            <th scope="col">Edit Package</th>
                                            <th scope="col">Delete Package</th>
                                        </tr>
                                        </thead>
                                        <tbody id="des-tr">
                                            <tr></tr>
                                        </tbody>
                                    </table>  
                                </div>   
                                <script>
                                    fetch('destination.php')
                                        .then(response => response.json())
                                        .then(data => {
                                            let count=0;
                                            let arr = new Array();
                                            data.forEach(doc => {
                                                count++;
                                                // console.log(doc._id.$oid);
                                                // arr.push(`<div class="col-6">
                                                //     <a class="position-relative d-block overflow-hidden" href="">
                                                //         <img class="img-fluid" src="${doc.img}" alt="">
                                                //             <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2" id="per2">${doc.per}</div>
                                                //             <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2" id="loc2">${doc.loc}</div>
                                                //     </a>
                                                //     <div class="text-center p-0">
                                                //         <h6 class="mb-0">IsFeatured : ${doc.show}</h3>
                                                //         <div class="text-center p-0">
                                                //             Change featured:
                                                //             <form action="upfeat.php" method="post">
                                                //                 <button class="btn btn-primary mx-1" name="id1" value="${doc._id.$oid}">0/1</button>
                                                //             </form>
                                                //         </div>  
                                                //     </div>
                                                //     <div class="d-flex justify-content-center m-1">
                                                //         <form action="updes.php" method="post">
                                                //             <button class="btn btn-primary mx-1" name="id" value="${doc._id.$oid}">Edit Package</button>
                                                //         </form>
                                                //         <form action="deldes.php" method="post">                    
                                                //             <button class="btn btn-primary mx-1" name="id" value="${doc._id.$oid}">Delete Package</button>
                                                //         </form>
                                                //     </div>
                                                // </div>`);
                                                arr.push(`<tr>
                                                            <td>${doc.img}</td>
                                                            <td>${doc.loc}</td>
                                                            <td>${doc.per}</td>
                                                            <td>${doc.show}</td>
                                                            <td><form action="upfeat.php" method="post">
                                                                    <button class="btn btn-primary mx-1" name="id1" value="${doc._id.$oid}">0/1</button>
                                                                </form>
                                                            </td>
                                                            <td><form action="updes.php" method="post">
                                                                <button class="btn btn-primary mx-1" name="id" value="${doc._id.$oid}">Edit Package</button>
                                                            </form>
                                                            </td>
                                                            <td><form action="deldes.php" method="post">                    
                                                                <button class="btn btn-primary mx-1" name="id" value="${doc._id.$oid}">Delete Package</button>
                                                            </form>
                                                            </td>
                                                        </tr>
                                                `);
                                            });
                                            // const field = document.getElementById("des-body");
                                            const field = document.getElementById("des-tr");
                                            field.innerHTML = arr.join("");
                                        })
                                        .catch(error => console.error('Error fetching data:', error));
                                </script>
                            </div>
                        </div>
                        <div class="container hide" id="ser-box">
                            <!-- <div class="d-flex justify-content-end m-3">
                                <button class="btn btn-primary mx-1">Edit Package</button>
                                <button class="btn btn-primary mx-1">Delete Package</button>
                            </div> -->
                            <!-- <div class="row g-4" id="ser-body" style="width: 90%;"> -->
                            <div class="row" id="ser-body" style="width: 90%;">
                                <h1 class="text-center">Services</h1>
                                <div class="table-responsive">
                                    <table class="table table-bordered align-middle">
                                        <thead>
                                        <tr>
                                            <th scope="col">Tittle</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">IconClass</th>
                                            <th scope="col">IsFeatured</th>
                                            <th scope="col">Change Featured</th>
                                            <th scope="col">Edit Package</th>
                                            <th scope="col">Delete Package</th>
                                        </tr>
                                        </thead>
                                        <tbody id="ser-tr">
                                            <tr></tr>
                                        </tbody>
                                    </table>   
                                </div> 
                                <script>
                                    fetch('service.php')
                                        .then(response => response.json())
                                        .then(data => {
                                            let count=0;
                                            let arr = new Array();
                                            data.forEach(doc => {
                                                count++;
                                                // console.log(doc._id.$oid);
                                                // arr.push(`<div class="col-4">
                                                //     <div class="service-item rounded pt-3">
                                                //         <div class="p-4 text-center">
                                                //             <i class="${doc.iconClass} text-primary mb-4"></i>
                                                //             <h5>${doc.tittle}</h5>
                                                //             <p>${doc.description}</p>
                                                //         </div>
                                                //     </div>
                                                //     <div class="text-center p-0">
                                                //         <h6 class="mb-0">IsFeatured : ${doc.show}</h3>
                                                //         <div class="text-center p-0">
                                                //             Change featured:
                                                //             <form action="upfeat.php" method="post">
                                                //                 <button class="btn btn-primary mx-1" name="id2" value="${doc._id.$oid}">0/1</button>
                                                //             </form>
                                                //     </div>  
                                                //     </div>
                                                //     <div class="d-flex justify-content-end m-1">
                                                //         <form action="upser.php" method="post">
                                                //             <button class="btn btn-primary mx-1" name="id" value="${doc._id.$oid}">Edit Package</button>
                                                //         </form>   
                                                //         <form action="delser.php" method="post">            
                                                //             <button class="btn btn-primary mx-1" name="id" value="${doc._id.$oid}">Delete Package</button>
                                                //         </form>
                                                //     </div>
                                                // </div>`);
                                                arr.push(`<tr>
                                                            <td>${doc.tittle}</td>
                                                            <td>${doc.description}</td>
                                                            <td>${doc.iconClass}</td>
                                                            <td>${doc.show}</td>
                                                            <td><form action="upfeat.php" method="post">
                                                                    <button class="btn btn-primary mx-1" name="id2" value="${doc._id.$oid}">0/1</button>
                                                                </form>
                                                            </td>
                                                            <td><form action="upser.php" method="post">
                                                                <button class="btn btn-primary mx-1" name="id" value="${doc._id.$oid}">Edit Package</button>
                                                            </form>
                                                            </td>
                                                            <td><form action="delser.php" method="post">                    
                                                                <button class="btn btn-primary mx-1" name="id" value="${doc._id.$oid}">Delete Package</button>
                                                            </form>
                                                            </td>
                                                        </tr>
                                                `);
                                            });
                                            // const field = document.getElementById("ser-body");
                                            const field = document.getElementById("ser-tr");
                                            field.innerHTML = arr.join("");
                                        })
                                        .catch(error => console.error('Error fetching data:', error));
                                </script>
                            </div>
                        </div>
                        <div class="container hide" id="rep-box">
                            <!-- <div class="d-flex justify-content-end m-3">
                                <button class="btn btn-primary mx-1">Edit Package</button>
                                <button class="btn btn-primary mx-1">Delete Package</button>
                            </div> -->
                            <!-- <div class="row g-4" id="ser-body" style="width: 90%;"> -->
                            <div class="print-option">
                                <button class="btn btn-outline-success float-end my-2" onclick="window.print()"><i class="fa fa-print"></i></button>
                            </div>
                            <div class="row" id="rep-body" style="width: 90%;">
                                <h1 class="text-center">Booked Package</h1>
                                <table class="table table-bordered align-middle">
                                    <thead>
                                      <tr>
                                        <th scope="col">UserName</th>
                                        <th scope="col">UserEmail</th>
                                        <th scope="col">packId</th>
                                        <th scope="col">Booking</th>
                                        <th scope="col">status</th>
                                      </tr>
                                    </thead>
                                    <tbody id="rep-tr">
                                        <tr></tr>
                                    </tbody>
                                </table>    
                                <script>
                                    fetch('userbook.php')
                                        .then(response => response.json())
                                        .then(data => {
                                            let count=0;
                                            let a= "";
                                            let arr = new Array();
                                            data.forEach(doc => {
                                                count++;
                                                if(doc.status == "paid"){
                                                    a="Paid";
                                                } else {
                                                    a="Not paid yet";
                                                }
                                                arr.push(`<tr>
                                                            <td>${doc.username}</td>
                                                            <td>${doc.useremail}</td>
                                                            <td>${doc.packId}</td>
                                                            <td><form action="userbook.php" method="post">                                
                                                                    <button class="btn btn-primary mx-1" name="cancel" value="${doc._id.$oid}">Cancel</button>
                                                                </form></td>
                                                            <td>${a}</td>
                                                        </tr>
                                                `);
                                            });
                                            // const field = document.getElementById("rep-body");
                                            const field = document.getElementById("rep-tr");
                                            field.innerHTML = arr.join("");
                                        })
                                        .catch(error => console.error('Error fetching data:', error));
                                </script>
                            </div>
                            <div class="row" id="rep1-body" style="width: 90%;">
                                <h1 class="text-center">Booked Destination</h1>
                                <table class="table table-bordered align-middle">
                                    <thead>
                                      <tr>
                                        <th scope="col">UserName</th>
                                        <th scope="col">UserEmail</th>
                                        <th scope="col">Prefer Email</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Destination</th>
                                        <th scope="col">Msg</th>
                                        <th scope="col">Booking</th>
                                      </tr>
                                    </thead>
                                    <tbody id="rep1-tr">
                                        <tr></tr>
                                    </tbody>
                                </table>
                                <script>
                                    fetch('userDesBook.php')
                                        .then(response => response.json())
                                        .then(data => {
                                            let count=0;
                                            let arr = new Array();
                                            data.forEach(doc => {
                                                count++;
                                                arr.push(`<tr>
                                                            <td>${doc.name}</td>
                                                            <td>${doc.user}</td>
                                                            <td>${doc.email}</td>
                                                            <td>${doc.date}</td>
                                                            <td>${doc.destination}</td>
                                                            <td>${doc.msg}</td>
                                                            <td><form action="userDesBook.php" method="post">                                
                                                                    <button class="btn btn-primary mx-1" name="reject" value="${doc._id.$oid}">Reject</button>
                                                                </form></td>
                                                        </tr>
                                                `);
                                            });
                                            // const field = document.getElementById("rep-body");
                                            const field = document.getElementById("rep1-tr");
                                            field.innerHTML = arr.join("");
                                        })
                                        .catch(error => console.error('Error fetching data:', error));
                                </script>
                            </div>
                        </div>
                        <div class="container hide" id="query-box">
                            <div class="row" id="que-body" style="width: 90%;">
                            <h1 class="text-center">Customer Query</h1>
                                <div class="table-responsive">
                                    <table class="table table-bordered align-middle">
                                        <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Subject</th>
                                            <th scope="col">Message</th>
                                            <th scope="col">Status</th>
                                            <th scope="col"></th>
                                        </tr>
                                        </thead>
                                        <tbody id="que-tr">
                                            <tr></tr>
                                        </tbody>
                                    </table>   
                                </div> 
                                <script>
                                    fetch('query.php')
                                        .then(response => response.json())
                                        .then(data => {
                                            let count=0;
                                            let status;
                                            let a;
                                            let arr = new Array();
                                            data.forEach(doc => {
                                                count++;
                                                if(doc.status == "read"){
                                                    a = "disabled";
                                                    status = "Have Read";
                                                } else {
                                                    a = "";
                                                    status = "Read";
                                                }
                                                arr.push(`<tr>
                                                            <td>${doc.name}</td>
                                                            <td>${doc.mail}</td>
                                                            <td>${doc.sub}</td>
                                                            <td>${doc.msg}</td>
                                                            <td><form action="query.php" method="post">
                                                                <button class="btn btn-outline-primary mx-1" name="qid" value="${doc._id.$oid}" ${a}>${status}</button>
                                                            </form>
                                                            </td>
                                                            <td><form action="query.php" method="post">                    
                                                                <button class="btn btn-primary mx-1" name="qdid" value="${doc._id.$oid}">Delete query</button>
                                                            </form>
                                                            </td>
                                                        </tr>
                                                `);
                                            });
                                            // const field = document.getElementById("ser-body");
                                            const field = document.getElementById("que-tr");
                                            field.innerHTML = arr.join("");
                                        })
                                        .catch(error => console.error('Error fetching data:', error));
                                </script>
                            </div>
                        </div>
                        <div class="container hide" id="user-box">
                            <!-- <div class="d-flex justify-content-end m-3">
                                <button class="btn btn-primary mx-1">Edit Package</button>
                                <button class="btn btn-primary mx-1">Delete Package</button>
                            </div> -->
                            <!-- <div class="row g-4" id="ser-body" style="width: 90%;"> -->
                            <div class="row" id="user-body" style="width: 90%;">
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
                                    fetch('userInfo.php')
                                        .then(response => response.json())
                                        .then(data => {
                                            let count=0;
                                            let arr = new Array();
                                            data.forEach(doc => {
                                                count++;
                                                // console.log(doc._id.$oid);
                                                // arr.push(`<div class="col-4">
                                                //     <div class="service-item rounded pt-3">
                                                //         <div class="p-4 text-center">
                                                //             <i class="${doc.iconClass} text-primary mb-4"></i>
                                                //             <h5>${doc.tittle}</h5>
                                                //             <p>${doc.description}</p>
                                                //         </div>
                                                //     </div>
                                                //     <div class="text-center p-0">
                                                //         <h6 class="mb-0">IsFeatured : ${doc.show}</h3>
                                                //         <div class="text-center p-0">
                                                //             Change featured:
                                                //             <form action="upfeat.php" method="post">
                                                //                 <button class="btn btn-primary mx-1" name="id2" value="${doc._id.$oid}">0/1</button>
                                                //             </form>
                                                //     </div>  
                                                //     </div>
                                                //     <div class="d-flex justify-content-end m-1">
                                                //         <form action="upser.php" method="post">
                                                //             <button class="btn btn-primary mx-1" name="id" value="${doc._id.$oid}">Edit Package</button>
                                                //         </form>   
                                                //         <form action="delser.php" method="post">            
                                                //             <button class="btn btn-primary mx-1" name="id" value="${doc._id.$oid}">Delete Package</button>
                                                //         </form>
                                                //     </div>
                                                // </div>`);
                                                arr.push(`<tr>
                                                            <td>${doc.username}</td>
                                                            <td>${doc.useremail}</td>
                                                            <td>${doc.password}</td>
                                                            <td><form action="deluser.php" method="post">                                
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
                        <div class="container hide" id="admin-box">
                            <div class="row" id="user-body" style="width: 90%;">
                                <h1 class="text-center p-2">Admin Profile</h1>
                                <form action="admin.php" method="post" class="border p-5">
                                    <label for="cpass" class="form-label">Current password : <input type="password" name="cpass" id="cpass"></label><br>
                                    <label for="npass" class="form-label">New password : <input type="password" name="npass" id="npass" required></label><br>
                                    <label for="cnpass" class="form-label">Confirm password : <input type="password" name="cnpass" id="cnpass"></label><br>
                                    <p id='alert'></p>
                                    
                                    <input type="submit" name="submit" class="btn border">
                                </form>
                            </div>    
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script>
        function deshOpen() {
            const desh1 = document.querySelector("#desh1");
            desh1.classList.remove("hide");
            const pacbox = document.querySelector("#pac-box");
            pacbox.classList.add("hide");
            const serbox = document.querySelector("#ser-box");
            serbox.classList.add("hide");
            const desbox = document.querySelector("#des-box");
            desbox.classList.add("hide");
            const repbox = document.querySelector("#rep-box");
            repbox.classList.add("hide");
            const userbox = document.querySelector("#user-box");
            userbox.classList.add("hide");
            const adminbox = document.querySelector("#admin-box");
            adminbox.classList.add("hide");            
            const quebox = document.querySelector("#query-box");
            quebox.classList.add("hide");            
        }
        function servOpen() {            
            const desh1 = document.querySelector("#desh1");
            desh1.classList.add("hide");
            const pacbox = document.querySelector("#pac-box");
            pacbox.classList.add("hide");
            const serbox = document.querySelector("#ser-box");
            serbox.classList.remove("hide");
            const desbox = document.querySelector("#des-box");
            desbox.classList.add("hide");
            const repbox = document.querySelector("#rep-box");
            repbox.classList.add("hide");
            const userbox = document.querySelector("#user-box");
            userbox.classList.add("hide");
            const adminbox = document.querySelector("#admin-box");
            adminbox.classList.add("hide");
            const quebox = document.querySelector("#query-box");
            quebox.classList.add("hide");
        }
        function packOpen() {           
            const desh1 = document.querySelector("#desh1");
            desh1.classList.add("hide");
            const pacbox = document.querySelector("#pac-box");
            pacbox.classList.remove("hide");
            const serbox = document.querySelector("#ser-box");
            serbox.classList.add("hide");
            const desbox = document.querySelector("#des-box");
            desbox.classList.add("hide");
            const repbox = document.querySelector("#rep-box");
            repbox.classList.add("hide");
            const userbox = document.querySelector("#user-box");
            userbox.classList.add("hide");
            const adminbox = document.querySelector("#admin-box");
            adminbox.classList.add("hide");
            const quebox = document.querySelector("#query-box");
            quebox.classList.add("hide");
        }
        function destOpen() {            
            const desh1 = document.querySelector("#desh1");
            desh1.classList.add("hide");
            const pacbox = document.querySelector("#pac-box");
            pacbox.classList.add("hide");
            const serbox = document.querySelector("#ser-box");
            serbox.classList.add("hide");
            const desbox = document.querySelector("#des-box");
            desbox.classList.remove("hide");
            const repbox = document.querySelector("#rep-box");
            repbox.classList.add("hide");
            const userbox = document.querySelector("#user-box");
            userbox.classList.add("hide");
            const adminbox = document.querySelector("#admin-box");
            adminbox.classList.add("hide");
            const quebox = document.querySelector("#query-box");
            quebox.classList.add("hide");
        }
        function repOpen(){
            const desh1 = document.querySelector("#desh1");
            desh1.classList.add("hide");
            const pacbox = document.querySelector("#pac-box");
            pacbox.classList.add("hide");
            const serbox = document.querySelector("#ser-box");
            serbox.classList.add("hide");
            const desbox = document.querySelector("#des-box");
            desbox.classList.add("hide");
            const repbox = document.querySelector("#rep-box");
            repbox.classList.remove("hide");
            const userbox = document.querySelector("#user-box");
            userbox.classList.add("hide");
            const adminbox = document.querySelector("#admin-box");
            adminbox.classList.add("hide");
            const quebox = document.querySelector("#query-box");
            quebox.classList.add("hide");
        }
        function userOpen(){
            const desh1 = document.querySelector("#desh1");
            desh1.classList.add("hide");
            const pacbox = document.querySelector("#pac-box");
            pacbox.classList.add("hide");
            const serbox = document.querySelector("#ser-box");
            serbox.classList.add("hide");
            const desbox = document.querySelector("#des-box");
            desbox.classList.add("hide");
            const repbox = document.querySelector("#rep-box");
            repbox.classList.add("hide");
            const userbox = document.querySelector("#user-box");
            userbox.classList.remove("hide");
            const adminbox = document.querySelector("#admin-box");
            adminbox.classList.add("hide");
            const quebox = document.querySelector("#query-box");
            quebox.classList.add("hide");
        }
        function adminOpen(){
            const desh1 = document.querySelector("#desh1");
            desh1.classList.add("hide");
            const pacbox = document.querySelector("#pac-box");
            pacbox.classList.add("hide");
            const serbox = document.querySelector("#ser-box");
            serbox.classList.add("hide");
            const desbox = document.querySelector("#des-box");
            desbox.classList.add("hide");
            const repbox = document.querySelector("#rep-box");
            repbox.classList.add("hide");
            const userbox = document.querySelector("#user-box");
            userbox.classList.add("hide");
            const adminbox = document.querySelector("#admin-box");
            adminbox.classList.remove("hide");
            const quebox = document.querySelector("#query-box");
            quebox.classList.add("hide");
        }
        function queOpen(){
            const desh1 = document.querySelector("#desh1");
            desh1.classList.add("hide");
            const pacbox = document.querySelector("#pac-box");
            pacbox.classList.add("hide");
            const serbox = document.querySelector("#ser-box");
            serbox.classList.add("hide");
            const desbox = document.querySelector("#des-box");
            desbox.classList.add("hide");
            const repbox = document.querySelector("#rep-box");
            repbox.classList.add("hide");
            const userbox = document.querySelector("#user-box");
            userbox.classList.add("hide");
            const adminbox = document.querySelector("#admin-box");
            adminbox.classList.add("hide");
            const quebox = document.querySelector("#query-box");
            quebox.classList.remove("hide");
        }

        // Get the modal
        var modal = document.getElementById("myModal");
        var modal1 = document.getElementById("myModal1");
        var modal2 = document.getElementById("myModal2");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");
        var btn1 = document.getElementById("myBtn1");
        var btn2 = document.getElementById("myBtn2");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        var span1 = document.getElementsByClassName("close")[1];
        var span2 = document.getElementsByClassName("close")[2];
        var span3 = document.getElementsByClassName("close")[3];
        var span4 = document.getElementsByClassName("close")[4];
        var span5 = document.getElementsByClassName("close")[5];

        // When the user clicks the button, open the modal 
        btn.onclick = function () {
            modal.style.display = "block";
        }
        btn1.onclick = function () {
            modal1.style.display = "block";
        }
        btn2.onclick = function () {
            modal2.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }
        span1.onclick = function () {
            modal.style.display = "none";
        }
        span2.onclick = function () {
            modal1.style.display = "none";
        }
        span3.onclick = function () {
            modal1.style.display = "none";
        }
        span4.onclick = function () {
            modal2.style.display = "none";
        }
        span5.onclick = function () {
            modal2.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        // window.onclick = function (event) {
        //     if (event.target == modal) {
        //         modal.style.display = "none";
        //     }
        // }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>