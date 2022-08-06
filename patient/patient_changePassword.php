<?php
session_start();
error_reporting(0);
include('..\include\config.php');
check_login();

$currentTime = date( 'd-m-Y h:i:s A', time () );
if(isset($_POST['submit']))
{
$sql=mysqli_query($con,"SELECT password FROM  patient_user where password='".SHA1($_POST['cpass'])."' && id='".$_SESSION['id']."'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
 $con=mysqli_query($con,"update patient_user set password='".SHA1($_POST['npass'])."', updationDate='$currentTime' where id='".$_SESSION['id']."'");
$_SESSION['msg1']="Password Changed Successfully !!";
}
else
{
$_SESSION['msg1']="Old Password not match !!";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Patient Login</title>
 <!-- JQuery CND Links -->

 <script src="../vendor/js/jquery-3.5.1.js"></script>

<!--Bootstrap CDN link-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>
<!--Fontawesome CDN link-->
<script src="https://kit.fontawesome.com/bdcc9ca60b.js" crossorigin="anonymous"></script>
<!--StyleSheet-->
<link rel="stylesheet" href="../style_dashboard.css">
  
  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.gstatic.com"><link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
  
<script type="text/javascript">
    function valid()
    {
    if(document.chngpwd.cpass.value=="")
    {
    alert("Current Password Filed is Empty !!");
    document.chngpwd.cpass.focus();
    return false;
    }
    else if(document.chngpwd.npass.value=="")
    {
    alert("New Password Filed is Empty !!");
    document.chngpwd.npass.focus();
    return false;
    }
    else if(document.chngpwd.cfpass.value=="")
    {
    alert("Confirm Password Filed is Empty !!");
    document.chngpwd.cfpass.focus();
    return false;
    }
    else if(document.chngpwd.npass.value!= document.chngpwd.cfpass.value)
    {
    alert("Password and Confirm Password Field do not match  !!");
    document.chngpwd.cfpass.focus();
    return false;
    }
    return true;
    }
</script>
</head>

<body>
  <!-- Form -->
  <h1 class="header">Patient | <span>PatDoc</span></h1>
  <main class="cont1">
    <form role="form" name="chngpwd" method="post" onSubmit="return valid();" class="form-wrapper">
      <fieldset class="fs-wrapper">
        <legend class="legend-wrapper">Change Your Password</legend>
        <p class="text-danger"><?php echo htmlentities($_SESSION['msg1']);?>
								<?php echo htmlentities($_SESSION['msg1']="");?></p>
        <div class="cont2">
            <label class="lbl1" for="password"><b>Current Password</b></label>
            <input class="inp2" type="password" name="cpass" id="password" required>
          </div>
        <div class="cont2">
          <label class="lbl1" for="password"><b>New Password</b></label>
          <input class="inp2" type="password" name="npass" id="password" required>
        </div>
        <div class="cont3">
          <label class="lbl1" for="password"><b>Confirm New Password</b></label>
          <input class="inp2" type="password" name="cfpass" id="password" required>
        </div>
       
      </fieldset>
      <div class="signin">
      <button class="btn1" type="submit" name="submit">Change</button>
      </div>
      <hr id="wrapper">
      <div class="target1">
        <p class="signup">Don't want to change password <a href="./EditProfile.php" class="href2">&nbsp; Profile</a> &nbsp; |
          &nbsp; <a href="./Dashboard.php" class="href2">Dashboard </a></p>
        <p class="footer">© PatDoc 2022. All rights reserved</p>
      </div>
    </form>
  </main>
 
  <!-- End -->
</body>

</html>