     <!-- Start including header  -->
     <?php
     include('./mainInclude/header.php');
     ?>
    <!-- End including header  -->

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
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#stuRegModalCenter">Get Started</a>

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
    <?php
    include ('./contact.php');
    ?>
    <!-- End Contact us -->


    <!-- Start students testimonial -->
    <div class="container-fluid mt5">

    </div>


    <!-- End students testimonial -->

    <!-- start including footer  -->
    <?php
    include ('./mainInclude/footer.php');
    ?>
    <!-- End including footer  -->
 