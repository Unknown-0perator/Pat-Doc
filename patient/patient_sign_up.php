<?php
include('..\include\config.php');
if(isset($_POST['submit']))
{
$fname=$_POST['name'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['phno'];
$password=SHA1($_POST['password']);
$query=mysqli_query($con,"insert into patient_user(fullname,address,gender,email,phone,password) values('$fname','$address','$gender','$email','$phone','$password')");
if($query)
{
	echo "<script>alert('Successfully Registered. You can login now');</script>";

}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style_signup.css">
</head>

<body>
    <!-- Form -->
    <h1>Pat<span class="span-color">ient</span>-Doc<span class="span-color">tor</span></h1>
    <main class="cont1">
        <form name="registration" id="registration" method="POST" class="form-wrapper" onSubmit="return valid();">
            <fieldset class="fs-wrapper">
                <legend class="legend-wrapper">Create A New Account</legend>
                <div class="cont2">
                    <label class="lbl" for="Name">Full Name</label>
                    <input class="inp1" type="text" name="name" required id="name">
                </div>

                <div class="cont2">
                    <label class="lbl gen" for="gender">Gender</label>
                    <input class="gen" type="radio" name="gender" id="male" value="male"> Male
                    <input class="gen" type="radio" name="gender" id="female" value="female"> Female
                </div>
                <div class="cont2">
                    <label class="lbl" for="address">Address</label>
                    <input class="inp1" type="text" name="address" required id="addr">
                </div>
                <div class="cont2">
                    <label class="lbl" for="usrname">Email</label>
                    <input class="inp1" type="email" name="email" required id="email" onBlur="userAvailability()">
                    <span id="user-availability-status1" style="font-size:12px;"></span>
                </div>
                <div class="cont2">
                    <label class="lbl" for="phno">Contact Number</label>
                    <input class="inp2" type="tel" name="phno" required id="phno">
                </div>
                <div class="cont2">
                    <label class="lbl" for="password">Password</label>
                    <input class="inp2" type="password" name="password" required id="pass">
                </div>
                <div class="cont2">
                    <label class="lbl" for="password">Confirm Password</label>
                    <input class="inp2" type="password" name="confirmpassword" required id="pass">
                </div>
            </fieldset>
            <div class="signin">
                <button class="btn1" name="submit" type="submit">Sign Up</button>
            </div>
            <hr id="wrapper">
            <div class="target1">
                <p class="signup">Already have a Account?! <a href="./patient_sign_in.php" class="href2">&nbsp; SignIn</a></p>
                <p class="footer">© PatDoc 2022. All rights reserved</p>
            </div>
        </form>
    </main>
    <script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "patient_checkAvailability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>	
</body>

</html>