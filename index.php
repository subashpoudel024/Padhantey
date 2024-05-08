<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS  -->
    <link rel="stylesheet" href="css/all.min.css">
    
     <!-- Google Font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>Padhantey</title>
</head>
<body>
    <!-- Start Navigation  -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark pl-10 fixed-top">
        <div class="container-fluid pl-5">
            <a class="navbar-brand" href="index.php">Padhantey</a>
            <span class="navbar-text">Learn and Implement</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link custom-nav-item " aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-nav-item" href="#">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-nav-item" href="#">Payment Status</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link custom-nav-item" aria-disabled="true">My Profile</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link custom-nav-item " aria-disabled="true">Logout</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link custom-nav-item" aria-disabled="true">Login</a>
                    </li>
                    <li class="nav-item custom-nav-item">
                    <a class="nav-link" aria-disabled="true">Signup</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link custom-nav-item" aria-disabled="true">Feedback</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link custom-nav-item" aria-disabled="true">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navigation  -->

    <!-- Start Video Background -->
    <div class="container-fluid remove-vid-marg">
        <div class="vid-parent">
            <video playsinline autoplay muted loop>
                <source src="videos/banvid.mp4">
            </video>
            <div class="vid-overlay"></div>
            <div class="vid-content">
                <h1 class="my-content">WELCOME TO PADHANTEY</h1>
                <smaLl class="my-content">Learn and Implement</smaLl> <br>
                <a href="#" class="btn btn-primary">Get Started</a>
            </div>
        </div>
    </div>
    <!-- End Video Background -->

    <!-- Start Text Banner -->
    <div class="container-fluid bg-dark txt-banner">
        <div class="row bottom-banner">
            <div class="col-sm">
                <h5><i class="fas fa-book-open mr-3"></i> 10+ Online Courses</h5>
            </div>
            <div class="col-sm">
                <h5><i class="fas fa-users mr-3"></i> Expert Instructors</h5>
            </div>
            <div class="col-sm">
                <h5><i class="fas fa-keyboard mr-3"></i> Lifetime Access</h5>
            </div>
            <div class="col-sm">
                <h5><i class="fas fa-rupee-sign mr-3"></i> Money Back Guarantee</h5>
            </div>

        </div>

    </div>

    <!-- End Text Banner -->

    <!-- Start Most Popular Course  -->
    <div class="container mt-5">
        <h1 class="text-center">Popular Courses</h1>
        <!-- Start most popular courses 1st card deck -->
        <div class="card-deck mt-4">
            <a href="#" class="btn" style="text-align: left; padding:0px; margin:0px;">
            <div class="card">
                <img src="images/phpimage.jpg" class="card-img-top" alt="phpimage">
                <div class="card-body">
                    <h5 class="card-title">Learn PHP Easy Way</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, assumenda.</p>
                </div>

                <div class="card-footer">
                    <p class="card-text d-inline">Price
                        <small>
                            <del>&#8377 2000</del>
                        </small>
                        <span class="font-weight-bolder">&#8377 2000</span>
                    </p>
                    <a href="#" class="btn btn-primary text-white font-weight-bolder float-right">
                        Enroll
                    </a>
                </div>
            </div>
            </a>
        </div>
        <!-- End most popular courses 1st card deck -->

        <!-- start most popular courses 2nd card deck -->
        <div class="card-deck mt-4">
            <a href="#" class="btn" style="text-align: left; padding:0px; margin:0px;">
            <div class="card">
                <img src="images/mlimage.jpg" class="card-img-top" alt="Guitar">
                <div class="card-body">
                    <h5 class="card-title">Learn Machine Learning</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, assumenda.</p>
                </div>

                <div class="card-footer">
                    <p class="card-text d-inline">Price
                        <small>
                            <del>&#8377 2000</del>
                        </small>
                        <span class="font-weight-bolder">&#8377 2000</span>
                    </p>
                    <a href="#" class="btn btn-primary text-white font-weight-bolder float-right">
                        Enroll
                    </a>
                </div>
            </div>

            </a>
        </div>

        <!-- End most popular courses 2nd card deck -->
        <div class="text-center m-2">
            <a href="#" class="btn btn-danger btn-sm">View All Course</a>
        </div>

    </div>
    <!-- End Most Popular Course  -->

    <!-- Start Contact us -->

    <div class="container mt-4" id="contact">
        <!-- Start contact us container  -->
        <h2 class="text-center mb-4">Contact us</h2><!--Contact us heading-->
        <div class="row">
            <!-- start contact us 1st column -->
            <div class="col-md-8"> 
                <form action="" method="post">
                    <input type="text"  name="name" id="" class="form-control" placeholder="Name"><br>
                    <input type="text"  name="subject" id="" class="form-control" placeholder="Subject"><br>
                    <input type="email"  name="email" id="" class="form-control" placeholder="E-mail"><br>
                    <textarea name="message" id="" class="form-control" placeholder="How can i help you?" style="height: 150px;"></textarea><br>
                    <input type="submit" class="btn btn-primary" value="Send" name="sibmit"><br><br>
                </form>
            </div>
            <!-- End contact us 1st column  -->
            <!-- start contact us 2nd column  -->
            <div class="col-md-4 stripe text-white text-center">
                <h4>Padhantey</h4>
                <p>Padhantey, Pokhara Lakeside,
                    www.padhantey.com.np 
                </p>

            </div>
        </div>
    </div>
    <!-- End Contact us -->




     
    <!-- JQuery and Bootstrap JS  -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Font Awesome Js  -->
    <script src="js/all.min.js"></script>
</body>
</html>