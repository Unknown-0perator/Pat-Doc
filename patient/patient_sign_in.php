<?php
include("..\include\config.php");
if(isset($_POST['submit']))
{
$ret=mysqli_query($con,"SELECT * FROM patient_user WHERE email='".$_POST['username']."' and password='".SHA1($_POST['password'])."'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="Logged In";

$host=$_SERVER['HTTP_HOST'];
$uip=$_SERVER['REMOTE_ADDR'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
} else {
  ?>
  <script>alert("Wrong password or email")</script>
  <?php
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style_signin.css">
</head>

<body>
    <h1 class="header">Patient Login | <span>Pat-Doc</span></h1>
    <main class="cont1">
        <form method="POST" class="form-wrapper">
            <fieldset class="fs-wrapper">
                <legend class="legend-wrapper">Sign In To Your Account</legend>
                <div class="cont2">
                    <label class="lbl1" for="email"><b>Email</b></label>
                    <input class="inp1" type="email" name="username" id="email">
                </div>
                <div class="cont3">
                    <label class="lbl1" for="password"><b>Password</b></label>
                    <input class="inp2" type="password" name="password" id="pass" required>
                </div>
                <label class="lbl2"><a href="./patient_forgetPassword.php" class="href1">Forgot your password?</a></label>
            </fieldset>
            <div class="signin">
                <button class="btn1" name="submit" type="submit">Sign In</button>
            </div>
            <hr id="wrapper">
            <div class="target1">
                <p class="signup">Don't Have An Account Yet?<a href="./patient_sign_up.php" class="href2">&nbsp; Sign
                        up</a>&nbsp; |
                    &nbsp; <a href="../index.html" class="href2">Home </a></p>
                <p class="footer">© PatDoc 2022. All rights reserved</p>
            </div>
        </form>
    </main>
</body>

</html>