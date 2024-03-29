<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Payment</title>


    <!-- CDN Links -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</head>

</head>

<body>
    <!--Navbar-->
    <?php
    include_once('patient\patient_navbar.php')
    ?>

    <div class="container light-style flex-grow-1 container-p-y">

        <legend style="text-align: left; padding-top:  2%; padding-bottom:1%;"><span style="color: blue;">Payment
                Method</span></legend>

        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list" href="#card"><b>Pay
                                Using Card</b></a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#pacos"><b> Pay Using
                                Pacos</b></a>

                    </div>
                </div>
                <div class="col-md-9 card">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account-general">
                            <hr class="border-light m-0">
                            <form>
                                <div>
                                    <h1
                                        style="text-align: left; padding-top:  2%; padding-bottom:1%; text-align: center;">

                                        <span style="color: orangered;"><i class="fab fa-cc-visa"></i></span>
                                        <span style="color:blue"><i class="fab fa-cc-amex"></i></span>
                                        <span style="color:red"><i class="fab fa-cc-mastercard"></i></span>
                                        <span style="color: Dodgerblue;"><i class="fab fa-cc-paypal"></i>
                                    </h1></span>
                                    <div style="clear: both;"></div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="name">Name on Card</label>
                                    <input type="text" class="form-control" placeholder="Your name"
                                        aria-describedby="Namehelp" id="name" name="name" required>
                                    <small id="Namehelp" class="form-text text-muted">As it appears on the card </small>
                                    <p class="help-block"></p>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="cardno">Card Number </label>

                                    <input type="text" class="form-control" placeholder="--- ---- ---- ---"
                                        aria-describedby="cardnohelp" id="cardno" name="cardno" required>
                                    <small id="cardnohelp" class="form-text text-muted">The 16 digits on the front of
                                        your credit card.</small>
                                </div>
                                <div class="form-group col-md-12">
                                    <div>
                                        <label for="edate">Expiration Date</label>
                                        <div class="form-inline" aria-describedby="Edatehelp">
                                            <select class="form-control" id="edate" required>
                                                <option selected>MM</option>
                                                <option value="01">01</option>
                                                <option value="02">02</option>
                                                <option value="03">03</option>
                                                <option value="04">04</option>
                                                <option value="05">05</option>
                                                <option value="06">06</option>
                                                <option value="07">07</option>
                                                <option value="08">08</option>
                                                <option value="09">09</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                            </select>

                                            <select class="form-control" id="edate" required>
                                                <option selected>YYYY</option>

                                                <option value="01">2022</option>
                                                <option value="01">2023</option>
                                                <option value="01">2024</option>
                                                <option value="01">2025</option>
                                                <option value="01">2026</option>
                                                <option value="01">2027</option>
                                                <option value="01">2028</option>
                                                <option value="01">2029</option>
                                                <option value="01">2030</option>
                                                <option value="01">2031</option>
                                            </select>


                                        </div>
                                        <small id="Edatehelp" class="form-text text-muted">The date your credit card
                                            expires. Find this on the front of your credit card.</small>

                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="cvc">Security Code</label>

                                    <input type="text" class="form-control" style="width: 120px;" placeholder="CCV"
                                        aria-describedby="ccvhelp" id="ccv" required>
                                    <small id="cvchelp" class="form-text text-muted">The last 3 digits displayed on the
                                        back of your credit card.</small>
                                    <div>
                                        <button style="margin-top: 2%;" class="btn btn-success">Confirm Payment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="pacos">
                            <div class="card-body pb-2">

                                <div class="form-group">
                                    <label class="form-label"><b>Enter The Code After Redemption</b></label>
                                    <input type="text" class="form-control" id="rdmcode">
                                    <div id="check" class="alert alert-danger msg" id="msg" role="alert">This Redemption
                                        Code doesn't exist </div>
                                </div>
                            </div>
                            <button style="margin-top: 2%; margin-left: 2%;" class="btn btn-success"
                                onclick="ConfirmStatus()">Confirm Payment</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="./payment.js"></script>
</body>

</html>