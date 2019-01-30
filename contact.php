<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php include_once ("head.php")?>

<body>

<script src="form.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>

<!-- Navigation -->
<?php include_once ("navbar.php")?>

<header class="bg-image-half"style="background-image: url('img/contact.jpg');">
    <div class="container-fluid">
        <div class="celebrate-section row">

            <div class="col align-self-center">
                <hr class="border-white">
                <h1 class="celebrate-text text-white text-center">
                    Get In Touch
                </h1>
                <hr class="border-white">
            </div>
        </div>
    </div>
</header>


<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md text-center">
            <span class="contact-text">
                Love What you see?
            </span>
            <br>
            <span class="contact-title">let's get in touch!</span>
            <br>
            <span class="text-justify contact-body">
                Tell us more about your event or leave us comments on your stay!
                We would love to hear more.
            </span>
        </div>
        <div class="col-md-7">
            <div class="h-100">
                <div>
                    <form method="post" id="reused_form" >
                        <div class="card card-body">
                            <div class="form-row">
                                <div class="col-md form-group">
                                    <input id="name" type="text" name="Name" required maxlength="50" class="form-control form-control-lg p-4 bg-light font-oswald" placeholder="YOUR NAME (REQUIRED)">
                                </div>
                                <div class="col-md form-group">
                                    <input id="email" type="email" name="Email" required maxlength="50" class="form-control form-control-lg p-4 bg-light font-oswald" placeholder="EMAIL ADDRESS (REQUIRED)">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md form-group">
                                    <input id="phone_number" name="phone_number" required maxlength="15" type="text" class="form-control form-control-lg p-4 bg-light font-oswald" placeholder="PHONE NUMBER (REQUIRED)">
                                </div>
                                <div class="col-md form-group">
                                    <input id="preferred_contact_method" name="preferred_contact_method" required maxlength="50" type="text" class="form-control form-control-lg p-4 bg-light font-oswald" placeholder="PREFERRED CONTACT METHOD">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md form-group">
                                    <textarea class="form-control form-control-lg p-4 bg-light font-oswald" placeholder="TELL US MORE" id="message" name="Message" rows="5" maxlength="6000" required></textarea>
                                </div>
                            </div>
                            <div class="g-recaptcha" data-sitekey="6LcUknAUAAAAALlZTNYZGFdJ8LAopwCBM5A5NEbb"></div>

                        </div>
                        <div class="row">
                            <div class="col-md"></div>
                            <div class="col-md my-3">
                                <button class="btn btn-light btn-lg btn-block text-uppercase font-oswald" type="submit">
                                    Send it over <i class="fa fa-angle-double-right"></i>
                                </button>
                            </div>
                            <div class="col-md"></div>
                        </div>
                    </form>
                    <div id="success_message" style="display:none">
                        <h3>Submitted the form successfully!</h3>
                        <p> We will get back to you soon. </p>
                    </div>
                    <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
                </div>
            </div>

        </div>
    </div>
</div>

<br>
<br>
<br>

<?php include_once ("footer.php")?>


</body>
</html>
