<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>Travel Agency</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>123 Street, Badda, Dhaka</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+012 345 6789</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@example.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Tourist</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <a href="services.php" class="nav-item nav-link">Services</a>
                    <a href="packages.php" class="nav-item nav-link">Packages</a>
                    <a href="destinations.php" class="nav-item nav-link">Destinations</a>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                    <?php
                        if(isset($_COOKIE['user'])){
                            echo '<a href="profile.php" class="nav-item nav-link active">Profile</a>';
                        }
                    ?>
                </div>
                <?php
                if(!isset($_COOKIE['user'])) {
                echo '<a href="signin.php" class="btn btn-primary rounded-pill py-2 px-4">Login</a>';                
                } else {
                echo '<a href="logout.php" class="btn btn-primary rounded-pill py-2 px-4">Logout</a>';
                }
                ?>
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Profile</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Profile Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Profile</h6>
            </div>
            <div class="row"  id="passChange-field">
                <h1 class="mb-5 text-center">Change Password</h1>
                <form action="admin.php" method="post" class="border p-5">
                    <label for="cpass" class="form-label">Current password : <input type="password" name="cpass" id="cpass"></label><br>
                    <label for="npass" class="form-label">New password : <input type="password" name="npass" id="npass"></label><br>
                    <label for="cnpass" class="form-label">Confirm password : <input type="password" name="cnpass" id="cnpass"></label><br>
                    <p id='alert'></p>
                    
                    <input type="submit" name="confirm" class="btn border">
                </form>                
            </div>
            <div class="row"  id="profile-field">
                <h1 class="mb-5 mt-5 text-center">Tour History</h1>                
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">Destination</th>
                        <th scope="col">Price</th>
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
                    fetch('tourhistory.php')
                        .then(response => response.json())
                        .then(data => {
                            let count=0;
                            let arr = new Array();
                            data.forEach(doc => {
                                let status = doc.status;
                                count++;
                                let a ="";
                                let action = "";
                                if(status == "paid"){
                                    a="Paid";
                                    action = "disabled";
                                } else{
                                    a="Pay";
                                    action = "";
                                }
                                arr.push(`<tr>
                                            <td>${doc.desti}</td>
                                            <td>${doc.price}</td>
                                            <td>${doc.packId}</td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1${count}">
                                                Cancel
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal1${count}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">package</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4>Are you sure you want to cancel the booking?</h4>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                                        <form action="userbook.php" method="post">                                
                                                            <button class="btn btn-primary mx-1" name="cancel" value="${doc._id.$oid}">Yes</button>
                                                            <input type="hidden" name="returnUrl" value="<?php echo htmlspecialchars($_SERVER['HTTP_REFERER']); ?>">
                                                        </form>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </td>
                                            <td><!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal${count}" ${action}>
                                                ${a}
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal${count}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">payment</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                    <form action="payment.php" method="post" class="row gx-3">
                                                        <div class="col-12">
                                                            <div class="d-flex flex-column">
                                                                <p class="text mb-1">Person Name</p>
                                                                <input class="form-control mb-3" type="text" placeholder="Name" value="Barry Allen" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="d-flex flex-column">
                                                                <p class="text mb-1">Card Number</p>
                                                                <input class="form-control mb-3" type="text" placeholder="1234 5678 435678" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="d-flex flex-column">
                                                                <p class="text mb-1">Expiry</p>
                                                                <input class="form-control mb-3" type="text" placeholder="MM/YYYY" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="d-flex flex-column">
                                                                <p class="text mb-1">CVV/CVC</p>
                                                                <input class="form-control mb-3 pt-2 " type="password" placeholder="***" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="mb-3 d-flex flex-column">
                                                                <button class="btn btn-primary p-2" name="paid" value="paid">pay ${doc.price}</button>
                                                                <input type="hidden" class="form-control" name="fpay" value="${doc._id.$oid}">
                                                            </div>
                                                        </div>
                                                    </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div></td>
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
            <div class="row"  id="destin-field">
                <h1 class="mb-5 mt-5 text-center">Book History</h1>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">Email</th>
                        <th scope="col">Date</th>
                        <th scope="col">Destination</th>
                        <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody id="rep1-tr">
                        <tr></tr>
                    </tbody>
                </table>
                <script>
                    fetch('tourhistory1.php')
                        .then(response => response.json())
                        .then(data => {
                            let count=0;
                            let arr = new Array();
                            data.forEach(doc => {
                                count++;
                                arr.push(`<tr>
                                            <td>${doc.email}</td>
                                            <td>${doc.date}</td>
                                            <td>${doc.destination}</td>
                                            <td><form action="userDesBook.php" method="post">                                
                                                    <button class="btn btn-primary mx-1" name="reject" value="${doc._id.$oid}">Cancel</button>
                                                    <input type="hidden" name="returnUrl" value="<?php echo htmlspecialchars($_SERVER['HTTP_REFERER']); ?>">
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
    </div>
    <!-- Profile End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Company</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">FAQs & Help</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, Badda, Dhaka</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-1.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/package-1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>