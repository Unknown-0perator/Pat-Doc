<?php
session_start();
error_reporting(0);
include('..\include\config.php');
include('.\patient_checkLogin.php');
check_login();
?>
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
        <?php
include_once('.\patient_navbar.php')
?>
    </header>
      <!-- Header-->
  <section>
    <div style="padding: 2%; margin-top:15%">
      <h2 class="text-dark">Welcome <span class="text-primary" id="header"> <?php $query=mysqli_query($con,"select fullName from patient_user where id='".$_SESSION['id']."'");
while($row=mysqli_fetch_array($query))
{
	$user_name= $row['fullName'];
  echo strtoupper($user_name);
}?></span></h2>
    </div>
  </section>

  <!-- Cards --->
  <section>
    <div style="padding-top: 5%; padding-left: 2%; padding-right: 2%;">
      <div class="row">
        <div class="col-md-3 r1">
          <div class="card text-white bg-warning">
            <div class="card-body">
              <h5 class="card-title">My Appointments &nbsp;&nbsp;<i class="fas fa-book-medical fa-2x"></i></h5>

              <a href="./patient_appointment.php" class="btn btn-info">Appointment History</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 r1">
          <div class="card text-white bg-success">
            <div class="card-body">
              <h5 class="card-title">Book My Appointment &nbsp;&nbsp;<i class="far fa-calendar-check fa-2x"></i></h5>

              <a href="./patient_bookAppointment.php" class="btn btn-light">Book Appointment</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 r1">
          <div class="card text-white bg-secondary">
            <div class="card-body">
              <h5 class="card-title">My Medical History &nbsp;&nbsp;<i class="fas fa-notes-medical fa-2x"></i></h5>

              <a href="./patient_medHistory.php" class="btn btn-light">Medical History</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 r1">
          <div class="card text-white bg-primary">
            <div class="card-body">
              <h5 class="card-title">Know more about Pills &nbsp;&nbsp;<i class="fas fa-search fa-2x"></i></h5>

              <a href="patient_pillIdentifier.html" class="btn btn-dark">Pill Identifier</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 r1">
          <div class="card text-white bg-dark">
            <div class="card-body">
              <h5 class="card-title">Check Drug Interaction &nbsp;&nbsp;<i class="fas fa-capsules fa-2x"></i></h5>

              <a href="patient_drugInteraction.html" class="btn btn-info">Drug Interaction Checker</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 r1 r2">
          <div class="card text-white bg-info">
            <div class="card-body">
              <h5 class="card-title">My Profile &nbsp;&nbsp;<i class="fas fa-id-badge fa-2x"></i></i></h5>

              <a href="./patient_editProfile.php" class="btn btn-dark">Update Profile</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 r1">
          <div class="card text-white bg-dark">
            <div class="card-body">
              <h5 class="card-title">Covid-19 Tracker &nbsp;&nbsp;<i class="fas fa-capsules fa-2x"></i></h5>

              <a href="covid19.php" class="btn btn-info">Drug Interaction Checker</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End -->
</body>
</html>
