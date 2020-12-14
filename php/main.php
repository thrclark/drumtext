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
        <li class="sidebar-nav-item"> <a class="js-scroll-trigger" href="#signup">Sign up/in</a> </li>
        <li class="sidebar-nav-item"> <a class="js-scroll-trigger" href="#about">About</a> </li>
        <li class="sidebar-nav-item"> <a class="js-scroll-trigger" href="#contact">Contact</a> </li>
    </ul>
</nav>

<!-- Header -->
<header class="masthead d-flex">
    <div class="container text-center my-auto text-light">
        <h1 class="mb-1">DrumText</h1>
        <div class="mb-5"> <em>Music Lessons with Tommy Igoe</em> </div>
        <a class="btn btn-primary my-5 mx-2 js-scroll-trigger" href="#signup">Sign up</a> <a class="btn btn-outline-primary my-5 mx-2" href="signin.php">Sign in</a> </div>
    <div class="overlay"></div>
</header>

<!-- About -->

<section class="content-section text-white signup" id="signup">
    <div class="container">
        <div class="content-section-heading text-center">
            <h2 class="mb-5">Signup</h2>
        </div>

        <div>
            <form>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input label="Email" maxlength="150" name="email" type="text" class="form-control is-invalid" value="">
                            <div class="invalid-feedback">Email is required</div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <input type="hidden">
                        <div class="form-group">
                            <label class="form-label">Phone</label>
                            <div class=" react-tel-input">
                                <input class=" form-control" placeholder="" type="tel" name="formattedPhoneNumber" value="+1">
                                <div class=" flag-dropdown">
                                    <div class="selected-flag" title="United States: + 1" tabindex="0" role="button" aria-haspopup="listbox">
                                        <div class="flag us">
                                            <div class="arrow"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label class="form-label">First Name</label>
                            <input label="First Name" maxlength="50" name="firstName" type="text" class="form-control" value="">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label class="form-label">Last Name</label>
                            <input label="Last Name" maxlength="100" name="lastName" type="text" class="form-control" value="">
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label class="form-label">Password</label>
                            <input label="Password" note="Must be 8 characters or more" maxlength="100" name="password" type="password" class="form-control" value="">
                            <small class="form-text text-muted">Must be 8 characters or more</small></div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label class="form-label">Confirm Password</label>
                            <input label="Confirm Password" maxlength="100" name="confirmPassword" type="password" class="form-control is-invalid" value="">
                            <div class="invalid-feedback">Please confirm your password</div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Credit Card</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                <div class="text-center mt-3">
                    <button type="button" class="btn btn-lg btn-primary"> Signup</button>
                    <p class="mt-5" style="font-size: .875rem">You are subscribing to receive promotional text messages (MMS &amp; SMS). <br>
                        Message &amp; data rates may apply.</p>
                </div>
            </form>
        </div>
    </div>
</section>
    
    <section class="content-section bg-light" id="about">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h1 class="mb-5">FROM TOMMY</h1>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
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