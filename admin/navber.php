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
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 p-0 text-bg-dark vh-100 fixed">
                <h1 class="h3 p-3 text-center w-100 text-light">Traveler</h1>
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
                <div class="row row-cols-1 row-cols-md-2 g-4 w-100 p-3" id="desh1">
                    <div class="col" id="pack1">
                        <div class="card text-center m-3">
                            <div class="card-body">
                                <h5 class="card-title">Currently available Package</h5>
                                <p class="card-text h1" id="numOfPac"></p>
                                <script>
                                    fetch('../package.php')
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
                                            <form action="../package.php" method="post">
                                                <div class="row g-3">
                                                    <div class="col-md-12">
                                                        <div class="form-floating">
                                                            <input type="file" id="1" class="form-control bg-transparent" name="imgf" accept="image/*"
                                                            required>
                                                            <label for="1">Select img : </label>
                                                        </div>                                                        
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-floating">
                                                            <input type="text" id="3" class="form-control bg-transparent" name="idf" required>
                                                            <label for="3">Package-Code</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-floating">
                                                            <!-- <input type="text" id="2" class="form-select bg-transparent" name="placef" required> -->
                                                            <input class="form-control" list="datalistOptions" name="placef" id="exampleDataList" required>
                                                            <datalist id="datalistOptions">
                                                                <option value="Bagerhat">
                                                                <option value="Bandarban">
                                                                <option value="Barguna">
                                                                <option value="Barisal">
                                                                <option value="Bhola">
                                                                <option value="Bogra">
                                                                <option value="Brahmanbaria">
                                                                <option value="Chandpur">
                                                                <option value="Chittagong">
                                                                <option value="Chuadanga">
                                                                <option value="Comilla">
                                                                <option value="Cox'sBazar">
                                                                <option value="Dhaka">
                                                                <option value="Dinajpur">
                                                                <option value="Faridpur">
                                                                <option value="Feni">
                                                                <option value="Gaibandha">
                                                                <option value="Gazipur">
                                                                <option value="Gopalganj">
                                                                <option value="Habiganj">
                                                                <option value="Jaipurhat">
                                                                <option value="Jamalpur">
                                                                <option value="Jessore">
                                                                <option value="Jhalokati">
                                                                <option value="Jhenaidah">
                                                                <option value="Khagrachari">
                                                                <option value="Khulna">
                                                                <option value="Kishoreganj">
                                                                <option value="Kurigram">
                                                                <option value="Kushtia">
                                                                <option value="Lakshmipur">
                                                                <option value="Lalmonirhat">
                                                                <option value="Madaripur">
                                                                <option value="Magura">
                                                                <option value="Manikganj">
                                                                <option value="Maulvibazar">
                                                                <option value="Meherpur">
                                                                <option value="Munshiganj">
                                                                <option value="Mymensingh">
                                                                <option value="Naogaon">
                                                                <option value="Narail">
                                                                <option value="Narayanganj">
                                                                <option value="Narsingdi">
                                                                <option value="Natore">
                                                                <option value="Nawabganj">
                                                                <option value="Netrokona">
                                                                <option value="Nilphamari">
                                                                <option value="Noakhali">
                                                                <option value="Pabna">
                                                                <option value="Panchagarh">
                                                                <option value="Patuakhali">
                                                                <option value="Pirojpur">
                                                                <option value="Rajbari">
                                                                <option value="Rajshahi">
                                                                <option value="Rangamati">
                                                                <option value="Rangpur">
                                                                <option value="Satkhira">
                                                                <option value="Shariatpur">
                                                                <option value="Sherpur">
                                                                <option value="Sirajganj">
                                                                <option value="Sunamganj">
                                                                <option value="Sylhet">
                                                                <option value="Tangail">
                                                                <option value="Thakurgaon">
                                                            </datalist>
                                                            <label for="exampleDataList">Place</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-floating">
                                                            <input type="text" id="4" class="form-control bg-transparent" name="dayf" required>
                                                            <label for="4">Days</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-floating">
                                                            <input type="text" id="5" class="form-control bg-transparent" name="personf" required>
                                                            <label for="5">Person</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-floating">
                                                            <input type="text" id="6" class="form-control bg-transparent" name="pricef" required>
                                                            <label for="6">Price</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-floating">
                                                            <input type="text" id="7" class="form-control bg-transparent" name="ratingf" required>
                                                            <label for="7">Rating</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-floating">
                                                            <input type="text" id="8" class="form-control bg-transparent" name="desf" required>
                                                        <label for="8">Description</label>
                                                        </div>                                                        
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-floating">
                                                            <input type="text" id="9" class="form-control bg-transparent" name="showf" required>
                                                            <label for="9">shows</label>
                                                        </div>
                                                    </div>
                                                     
                                                    <div class="modal-footer">
                                                        <input type="submit" class="btn btn-primary" name="pacSave">
                                                        <button class="btn btn-secondary close">Cancel</button>
                                                    </div>
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
                                    fetch('../service.php')
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
                                            <form action="../service.php" method="post">
                                                <div class="row g-3">
                                                    <div class="col-md-4">
                                                        <div class="form-floating">
                                                            <input type="text" id="q" class="form-control bg-transparent" name="tittlef" required>
                                                            <label for="q">Titlle</label>
                                                        </div>
                                                    </div> 
                                                    <div class="col-md-4">
                                                        <div class="form-floating">
                                                            <input type="text" id="e" class="form-control bg-transparent" name="iconf" required>
                                                            <label for="e">iconClass</label>
                                                        </div>
                                                    </div> 
                                                    <div class="col-md-4">
                                                        <div class="form-floating">
                                                            <input type="text" id="r" class="form-control bg-transparent" name="showf" required>
                                                            <label for="r">Show</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-floating">
                                                            <input type="text" id="w" class="form-control bg-transparent" name="desf" required>
                                                            <label for="w">Description</label>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <input type="submit" class="btn btn-primary" name="servSave">
                                                        <button class="btn btn-secondary close">Cancel</button>
                                                    </div>
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
                                    fetch('../destination.php')
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
                                            <form action="../destination.php" method="post">
                                                <div class="row g-3">
                                                    <div class="col-md-12">
                                                        <div class="form-floating mt-2">
                                                            <input type="file" id="z" class="form-control bg-transparent" name="imgf" accept="image/*"
                                                            required>
                                                            <label for="z">Select img : </label>
                                                        </div>                                                        
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-floating">
                                                            <!-- <input type="text" id="x" class="form-control bg-transparent" name="locf" required> -->
                                                            <input list="country" id="x" name="locf" class="datalist-input form-control bg-transparent" />
                                                            <datalist id="country">
                                                                <option value="Afghanistan" />
                                                                <option value="Albania" />
                                                                <option value="Algeria" />
                                                                <option value="American Samoa" />
                                                                <option value="Andorra" />
                                                                <option value="Angola" />
                                                                <option value="Anguilla" />
                                                                <option value="Antarctica" />
                                                                <option value="Antigua and Barbuda" />
                                                                <option value="Argentina" />
                                                                <option value="Armenia" />
                                                                <option value="Aruba" />
                                                                <option value="Australia" />
                                                                <option value="Austria" />
                                                                <option value="Azerbaijan" />
                                                                <option value="Bahamas" />
                                                                <option value="Bahrain" />
                                                                <option value="Bangladesh" />
                                                                <option value="Barbados" />
                                                                <option value="Belarus" />
                                                                <option value="Belgium" />
                                                                <option value="Belize" />
                                                                <option value="Benin" />
                                                                <option value="Bermuda" />
                                                                <option value="Bhutan" />
                                                                <option value="Bolivia" />
                                                                <option value="Bosnia and Herzegovina" />
                                                                <option value="Botswana" />
                                                                <option value="Bouvet Island" />
                                                                <option value="Brazil" />
                                                                <option value="British Indian Ocean Territory" />
                                                                <option value="Brunei Darussalam" />
                                                                <option value="Bulgaria" />
                                                                <option value="Burkina Faso" />
                                                                <option value="Burundi" />
                                                                <option value="Cambodia" />
                                                                <option value="Cameroon" />
                                                                <option value="Canada" />
                                                                <option value="Cape Verde" />
                                                                <option value="Cayman Islands" />
                                                                <option value="Central African Republic" />
                                                                <option value="Chad" />
                                                                <option value="Chile" />
                                                                <option value="China" />
                                                                <option value="Christmas Island" />
                                                                <option value="Cocos (Keeling) Islands" />
                                                                <option value="Colombia" />
                                                                <option value="Comoros" />
                                                                <option value="Congo" />
                                                                <option value="Congo, The Democratic Republic of The" />
                                                                <option value="Cook Islands" />
                                                                <option value="Costa Rica" />
                                                                <option value="Cote D'ivoire" />
                                                                <option value="Croatia" />
                                                                <option value="Cuba" />
                                                                <option value="Cyprus" />
                                                                <option value="Czech Republic" />
                                                                <option value="Denmark" />
                                                                <option value="Djibouti" />
                                                                <option value="Dominica" />
                                                                <option value="Dominican Republic" />
                                                                <option value="Ecuador" />
                                                                <option value="Egypt" />
                                                                <option value="El Salvador" />
                                                                <option value="Equatorial Guinea" />
                                                                <option value="Eritrea" />
                                                                <option value="Estonia" />
                                                                <option value="Ethiopia" />
                                                                <option value="Falkland Islands (Malvinas)" />
                                                                <option value="Faroe Islands" />
                                                                <option value="Fiji" />
                                                                <option value="Finland" />
                                                                <option value="France" />
                                                                <option value="French Guiana" />
                                                                <option value="French Polynesia" />
                                                                <option value="French Southern Territories" />
                                                                <option value="Gabon" />
                                                                <option value="Gambia" />
                                                                <option value="Georgia" />
                                                                <option value="Germany" />
                                                                <option value="Ghana" />
                                                                <option value="Gibraltar" />
                                                                <option value="Greece" />
                                                                <option value="Greenland" />
                                                                <option value="Grenada" />
                                                                <option value="Guadeloupe" />
                                                                <option value="Guam" />
                                                                <option value="Guatemala" />
                                                                <option value="Guinea" />
                                                                <option value="Guinea-bissau" />
                                                                <option value="Guyana" />
                                                                <option value="Haiti" />
                                                                <option value="Heard Island and Mcdonald Islands" />
                                                                <option value="Holy See (Vatican City State)" />
                                                                <option value="Honduras" />
                                                                <option value="Hong Kong" />
                                                                <option value="Hungary" />
                                                                <option value="Iceland" />
                                                                <option value="India" />
                                                                <option value="Indonesia" />
                                                                <option value="Iran, Islamic Republic of" />
                                                                <option value="Iraq" />
                                                                <option value="Ireland" />
                                                                <option value="Israel" />
                                                                <option value="Italy" />
                                                                <option value="Jamaica" />
                                                                <option value="Japan" />
                                                                <option value="Jordan" />
                                                                <option value="Kazakhstan" />
                                                                <option value="Kenya" />
                                                                <option value="Kiribati" />
                                                                <option value="Korea, Democratic People's Republic of" />
                                                                <option value="Korea, Republic of" />
                                                                <option value="Kuwait" />
                                                                <option value="Kyrgyzstan" />
                                                                <option value="Lao People's Democratic Republic" />
                                                                <option value="Latvia" />
                                                                <option value="Lebanon" />
                                                                <option value="Lesotho" />
                                                                <option value="Liberia" />
                                                                <option value="Libyan Arab Jamahiriya" />
                                                                <option value="Liechtenstein" />
                                                                <option value="Lithuania" />
                                                                <option value="Luxembourg" />
                                                                <option value="Macao" />
                                                                <option value="Macedonia, The Former Yugoslav Republic of" />
                                                                <option value="Madagascar" />
                                                                <option value="Malawi" />
                                                                <option value="Malaysia" />
                                                                <option value="Maldives" />
                                                                <option value="Mali" />
                                                                <option value="Malta" />
                                                                <option value="Marshall Islands" />
                                                                <option value="Martinique" />
                                                                <option value="Mauritania" />
                                                                <option value="Mauritius" />
                                                                <option value="Mayotte" />
                                                                <option value="Mexico" />
                                                                <option value="Micronesia, Federated States of" />
                                                                <option value="Moldova, Republic of" />
                                                                <option value="Monaco" />
                                                                <option value="Mongolia" />
                                                                <option value="Montserrat" />
                                                                <option value="Morocco" />
                                                                <option value="Mozambique" />
                                                                <option value="Myanmar" />
                                                                <option value="Namibia" />
                                                                <option value="Nauru" />
                                                                <option value="Nepal" />
                                                                <option value="Netherlands" />
                                                                <option value="Netherlands Antilles" />
                                                                <option value="New Caledonia" />
                                                                <option value="New Zealand" />
                                                                <option value="Nicaragua" />
                                                                <option value="Niger" />
                                                                <option value="Nigeria" />
                                                                <option value="Niue" />
                                                                <option value="Norfolk Island" />
                                                                <option value="Northern Mariana Islands" />
                                                                <option value="Norway" />
                                                                <option value="Oman" />
                                                                <option value="Pakistan" />
                                                                <option value="Palau" />
                                                                <option value="Palestinian Territory, Occupied" />
                                                                <option value="Panama" />
                                                                <option value="Papua New Guinea" />
                                                                <option value="Paraguay" />
                                                                <option value="Peru" />
                                                                <option value="Philippines" />
                                                                <option value="Pitcairn" />
                                                                <option value="Poland" />
                                                                <option value="Portugal" />
                                                                <option value="Puerto Rico" />
                                                                <option value="Qatar" />
                                                                <option value="Reunion" />
                                                                <option value="Romania" />
                                                                <option value="Russian Federation" />
                                                                <option value="Rwanda" />
                                                                <option value="Saint Helena" />
                                                                <option value="Saint Kitts and Nevis" />
                                                                <option value="Saint Lucia" />
                                                                <option value="Saint Pierre and Miquelon" />
                                                                <option value="Saint Vincent and The Grenadines" />
                                                                <option value="Samoa" />
                                                                <option value="San Marino" />
                                                                <option value="Sao Tome and Principe" />
                                                                <option value="Saudi Arabia" />
                                                                <option value="Senegal" />
                                                                <option value="Serbia and Montenegro" />
                                                                <option value="Seychelles" />
                                                                <option value="Sierra Leone" />
                                                                <option value="Singapore" />
                                                                <option value="Slovakia" />
                                                                <option value="Slovenia" />
                                                                <option value="Solomon Islands" />
                                                                <option value="Somalia" />
                                                                <option value="South Africa" />
                                                                <option value="South Georgia and The South Sandwich Islands" />
                                                                <option value="Spain" />
                                                                <option value="Sri Lanka" />
                                                                <option value="Sudan" />
                                                                <option value="Suriname" />
                                                                <option value="Svalbard and Jan Mayen" />
                                                                <option value="Swaziland" />
                                                                <option value="Sweden" />
                                                                <option value="Switzerland" />
                                                                <option value="Syrian Arab Republic" />
                                                                <option value="Taiwan, Province of China" />
                                                                <option value="Tajikistan" />
                                                                <option value="Tanzania, United Republic of" />
                                                                <option value="Thailand" />
                                                                <option value="Timor-leste" />
                                                                <option value="Togo" />
                                                                <option value="Tokelau" />
                                                                <option value="Tonga" />
                                                                <option value="Trinidad and Tobago" />
                                                                <option value="Tunisia" />
                                                                <option value="Turkey" />
                                                                <option value="Turkmenistan" />
                                                                <option value="Turks and Caicos Islands" />
                                                                <option value="Tuvalu" />
                                                                <option value="Uganda" />
                                                                <option value="Ukraine" />
                                                                <option value="United Arab Emirates" />
                                                                <option value="United Kingdom" />
                                                                <option value="United States" />
                                                                <option value="United States Minor Outlying Islands" />
                                                                <option value="Uruguay" />
                                                                <option value="Uzbekistan" />
                                                                <option value="Vanuatu" />
                                                                <option value="Venezuela" />
                                                                <option value="Viet Nam" />
                                                                <option value="Virgin Islands, British" />
                                                                <option value="Virgin Islands, U.S" />
                                                                <option value="Wallis and Futuna" />
                                                                <option value="Western Sahara" />
                                                                <option value="Yemen" />
                                                                <option value="Zambia" />
                                                                <option value="Zimbabwe" />
                                                            </datalist>

                                                            <label for="x">Location</label>
                                                        </div>
                                                    </div> 
                                                    <div class="col-md-4">
                                                        <div class="form-floating">
                                                            <input type="text" id="c" class="form-control bg-transparent" name="perf" required>
                                                            <label for="c">Percentage</label>
                                                        </div>
                                                    </div> 
                                                    <div class="col-md-4">
                                                        <div class="form-floating">
                                                            <input type="text" id="v" class="form-control bg-transparent" name="showf" required>
                                                            <label for="v">Show</label>
                                                        </div>
                                                    </div> 
                                                    <div class="modal-footer">
                                                        <input type="submit" class="btn btn-primary" name="desSave">
                                                        <button class="btn btn-secondary close">Cancel</button>
                                                    </div>
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
            </div>
        </div>
    </div>


    <script>
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
    </script>
</body>

</html>