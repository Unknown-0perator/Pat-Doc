<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap CDN link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style_dashboard.css">
    <title>Dashboard</title>
</head>

<body>
    <header>
        <!--Navbar-->
        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Pat-Doc</a>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="doctor_dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-primary">Sign Out</button>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Header-->
    <section>
        <div style="padding: 2%; margin-top: 8%;">
            <h2 class="text-dark">Welcome <span class="text-primary">Doctor</span><span class="text-primary"
                    id="header">Unknown-0perator</span></h2>
        </div>
    </section>

    <!-- Functionalities Cards --->
    <section>
        <div style="padding-top: 5%; padding-left: 2%; padding-right: 2%;">
            <div class="row">
                <div class="col-md-3 r1">
                    <div class="card text-white bg-info">
                        <div class="card-body">
                            <h5 class="card-title">Appointments &nbsp;&nbsp;<i class="fas fa-notes-medical fa-2x"></i>
                            </h5>

                            <a href="#" class="btn btn-dark">Appointment History</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 r1">
                    <div class="card text-white bg-secondary">
                        <div class="card-body">
                            <h5 class="card-title">Search &nbsp;&nbsp;<i class="fas fa-search fa-2x"></i></h5>

                            <a href="#" class="btn btn-primary">Find Patient</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 r1">
                    <div class="card text-white bg-warning">
                        <div class="card-body">
                            <h5 class="card-title">Patients &nbsp;&nbsp;<i class="fas fa-book-medical fa-2x"></i></h5>

                            <a href="#" class="btn btn-info">Patient Document</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 r1">
                    <div class="card text-white bg-primary">
                        <div class="card-body">
                            <h5 class="card-title">Know more about Pills &nbsp;&nbsp;<i class="fas fa-search fa-2x"></i>
                            </h5>

                            <a href="doctor_pillIdentifier.html" class="btn btn-dark">Pill Identifier</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 r1">
                    <div class="card text-white bg-dark">
                        <div class="card-body">
                            <h5 class="card-title">Check Drug Interaction &nbsp;&nbsp;<i
                                    class="fas fa-capsules fa-2x"></i></h5>

                            <a href="#" class="btn btn-info">Drug Interaction Checker</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 r1">
                    <div class="card text-white bg-success">
                        <div class="card-body">
                            <h5 class="card-title">Profile &nbsp;&nbsp;<i class="fas fa-user-md fa-2x"></i></h5>

                            <a href="#" class="btn btn-light">Update Profile</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 r1 r2">
                    <div class="card text-white custom-bg">
                        <div class="card-body">
                            <h5 class="card-title">Insights &nbsp;&nbsp;<i class="fas fa-chart-area fa-2x"></i></h5>

                            <a href="#" class="btn btn-light">See Pill Usage</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>