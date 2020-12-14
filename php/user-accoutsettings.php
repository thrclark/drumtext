<!doctype html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Title</title>

<!-- Custom Fonts -->

<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dosis:200,300|Rasa&display=swap" rel="stylesheet">

<!-- Custom CSS -->
<link href="../css/main.css" rel="stylesheet" type="text/css">
</head>

<body id="page-top">

<!-- Navigation --> 
<a class="menu-toggle rounded" href="#"> <i class="fa fa-bars"></i> </a>
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand"> <a class="js-scroll-trigger" href="#page-top">Drumtext</a> </li>
        <li class="sidebar-nav-item"> <a class="js-scroll-trigger" href="user-home.php">My packages</a> </li>
        <li class="sidebar-nav-item"> <a class="js-scroll-trigger" href="user-accoutsettings.php">My account</a> </li>
        <li class="sidebar-nav-item"> <a class="js-scroll-trigger" href="mailto:">Contact</a> </li>
    </ul>
</nav>

<!-- Header -->

<header class="masthead d-flex" style="height: 0vh; min-height: 5rem; padding-top: 2rem">
    <div class="container text-center my-auto text-light">
        <h1 class="mb-1">DrumText</h1>
    </div>
</header>

<!-- About -->

<section class="content-section signup" id="signup">
    <div class="container packages">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between content-section-heading">
                    <h2 class="mb-5">Account settings</h2>
                    <div class="text-right"> <span class="badge badge-primary">Tom Clark</span> <br>
                        <a href="user-home.php" style="font-size: 1rem">my packages</a></div>
                </div>
                <h3 style="font-size: 1.5rem">Contact info</h3>
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <input label="Email" disabled="" maxlength="150" name="email" type="text" class="form-control" value="thrclark@gmail.com">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Phone</label>
                                        <input label="Phone" disabled="" name="formattedPhoneNumber" type="text" class="form-control" value="+1 (812) 369-9664">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">First Name</label>
                                        <input label="First Name" maxlength="50" name="firstName" type="text" class="form-control" value="Thomas">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Last Name</label>
                                        <input label="Last Name" maxlength="100" name="lastName" type="text" class="form-control" value="Clark">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="custom-control custom-switch">
                                        <input input="[object Object]" meta="[object Object]" name="mmsEnabled" type="checkbox" id="id-mmsEnabled" class="custom-control-input" value="true">
                                        <label title="" for="id-mmsEnabled" class="custom-control-label">Enable MMS</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2">
                                <button type="button" class="btn btn-sm btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
                <h3 style="font-size: 1.5rem">Payment</h3>
                <div class="card">
                    <div class="card-body">
                        <div class="mt-2">
                            <div>
                                <label style="width: 100%;">
                                Card details
                                <div class="StripeElement StripeElement--empty">
                                    <div class="__PrivateStripeElement" style="margin: 0px !important; padding: 0px !important; border: none !important; display: block !important; background: transparent !important; position: relative !important; opacity: 1 !important;">
                                        <iframe frameborder="0" allowtransparency="true" scrolling="no" name="__privateStripeFrame3395" allowpaymentrequest="true" src="https://js.stripe.com/v3/elements-inner-card-a2f6cd1867b6bb9c0c125933ec3533bb.html#style[base][color]=%23495057&amp;style[base][fontFamily]=%22Rasa%22%2C+serif&amp;style[base][fontSmoothing]=antialiased&amp;style[base][fontSize]=1.5rem&amp;style[base][::placeholder][color]=%23aab7c4&amp;style[base][height]=calc(1.5em+%2B+0.75rem+%2B+2px)&amp;style[base][padding]=0.375rem+0.75rem&amp;style[invalid][color]=%23dc3545&amp;style[invalid][iconColor]=%23dc3545&amp;wait=false&amp;rtl=false&amp;componentName=card&amp;keyMode=test&amp;apiKey=pk_test_51HSs1sGtb23dvQZvjwCXO4jh6PlEnKEWMbcapUB0unogu6l8QKFRjboBVhJYdBI80vECdZ4LCHpIQ34TFsAUICWq00gXL1C2F4&amp;origin=http%3A%2F%2Fdrumtext-stg.us-east-1.elasticbeanstalk.com&amp;referrer=http%3A%2F%2Fdrumtext-stg.us-east-1.elasticbeanstalk.com%2Fapp%2Fuser%2Fsettings&amp;controllerId=__privateStripeController3391" title="Secure card payment input frame" style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; user-select: none !important; transform: translateZ(0px) !important; height: 25.1875px;"></iframe>
                                        <input class="__PrivateStripeElement-input" aria-hidden="true" aria-label=" " autocomplete="false" maxlength="1" style="border: none !important; display: block !important; position: absolute !important; height: 1px !important; top: 0px !important; left: 0px !important; padding: 0px !important; margin: 0px !important; width: 100% !important; opacity: 0 !important; background: transparent !important; pointer-events: none !important; font-size: 16px !important;">
                                    </div>
                                </div>
                                </label>
                                <div class="mt-2">
                                    <button type="button" class="mr-3 btn btn-sm btn-primary">Save Card</button>
                                    <button type="button" class="btn btn-light btn-sm">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 style="font-size: 1.5rem">Change password</h3>
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Password</label>
                                        <input label="Password" note="Must be 8 characters or more" maxlength="100" name="password" type="password" class="form-control" value="">
                                        <small class="form-text text-muted">Must be 8 characters or more</small></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Confirm Password</label>
                                        <input label="Confirm Password" maxlength="100" name="confirmPassword" type="password" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button type="button" class="btn btn-sm btn-primary" disabled="">Change</button>
                            </div>
                        </form>
                    </div>
                </div>
                <h3 style="font-size: 1.5rem">Account deactivation</h3>
                <div class="card">
                    <div class="card-body">
                        <p><b>Warning:</b> After account deactivation you will no longer have access to download purchased packages. <br>
                            If you wish to reactivate your account at a later time, you will need to contact customer support.</p>
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input input="[object Object]" meta="[object Object]" name="enableDeactivateAccount" type="checkbox" id="id-enableDeactivateAccount" class="form-check-input" value="">
                                        <label title="" for="id-enableDeactivateAccount" class="form-check-label">I understand and wish to deactivate</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button disabled="" type="button" class="btn btn-primary btn-sm">Deactivate Account</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer text-center" id="contact">
    <div class="container">
        <ul class="list-inline mb-5">
            <li class="list-inline-item"> <a class="social-link rounded-circle text-white mr-3" href="#"> <i class="fa fa-facebook"></i> </a> </li>
            <li class="list-inline-item"> <a class="social-link rounded-circle text-white mr-3" href="#"> <i class="fa fa-twitter"></i> </a> </li>
            <li class="list-inline-item"> <a class="social-link rounded-circle text-white" href="#"> <i class="fa fa-instagram"></i> </a> </li>
        </ul>
        <p class="text-muted small mb-0">Copyright &copy; Drumtext 2020</p>
    </div>
</footer>

<!-- Scroll to Top Button--> 
<a class="scroll-to-top rounded js-scroll-trigger" href="#page-top"> <i class="fa fa-angle-up"></i> </a> 

<!-- Bootstrap core JavaScript --> 
<script src="../js/jquery.min.js"></script> 
<script src="../js/bootstrap.bundle.js"></script> 

<!-- Plugin JavaScript --> 
<script src="../js/jquery.easing.min.js"></script> 

<!-- Custom scripts for this template --> 
<script src="../js/stylish-portfolio.min.js"></script>
</body>
</html>

<!--'<div class="media text-muted pt-3">' + '<p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">' + '<strong class="d-block">'-->