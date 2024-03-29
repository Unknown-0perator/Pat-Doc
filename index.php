<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pat-Doc</title>
    <!--Bootstrap CDN link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
    <!--Fontawesome CDN link-->
    <script src="https://kit.fontawesome.com/bdcc9ca60b.js" crossorigin="anonymous"></script>
    <!--StyleSheet-->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <!--Navbar-->
        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Pat-Doc</a>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!--About us-->
    <div>
    <div class="container">
        <h1>Pat<span class="highlight">ient</span>-Doc<span class="highlight">tor</span></h1>
        <h3>Who <span class="highlight">We Are?</span></h3>
        <h5>PatDoc (Appointment Management System) is a web-based application to make your
            Appointments easier and connect the patients with speacilized doctor in less time and accurate timing</h5>
        <h5>PatDoc‘s aim is to bring patients and doctors together by booking appointments online no matter where they
            are, when they need it, or which specialized doctor they want.
        </h5>
        <h3>Our <span class="highlight">Features</span></h3>
        <ul>
            <div class="row">
                <div class="col-md-6">
                    <li><i class="far fa-clock fa-2x"></i> Book Anytime</li>
                    <li><i class="fas fa-wifi fa-2x"></i> Online Booking</li>
                    <li><i class="fas fa-rocket fa-2x"></i> Easy to Use</li>
                </div>
                <div class="col-md-6">
                    <li><i class="fas fa-envelope fa-2x"></i> Notifications via Email</li>
                    <li><i class="fas fa-tasks fa-2x"></i> Managing Appointments Easily</li>
                    <li><i class="fas fa-history fa-2x"></i> Appointment History</li>
                </div>

            </div>

        </ul>
    </div>

    <!---Sign up (Or) Sign in -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-user-injured fa-5x"></i>
                        <h5 class="card-title">I am Patient</h5>
                        <a href="patient/patient_sign_up.php" class="btn btn-primary">Sign up</a>
                        <p class="card-text">If you are already registered </p>
                        <a href="patient/patient_sign_in.php">Sign In</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card text-center">

                    <div class="card-body">

                        <i class="fas fa-user-md fa-5x"></i>

                        <h5 class="card-title">I am Doctor</h5>
                        <a href="doctor/doctor_sign_up.php" class="btn btn-primary">Sign Up</a>
                        <p class="card-text">If you are already registered </p>
                        <a href="doctor/doctor_sign_in.php">Sign In</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!---Footer-->
<?php
include_once('include/footer.php');
?>
</body>

</html>