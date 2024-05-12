<!-- start including header  -->
<?php
include('./mainInclude/header.php');
?>
<!-- end including header  -->

<!-- start course page banner  -->
<div class="container-fluid bg-dark">
    <div class="row">
        <img src="./images/coursebanner.jpg" alt="courses" style="height: 500px; width:100%; object-fit:cover; box-shadow:10px;">

    </div>
</div>
<!-- End course page banner  -->



    <!-- Start All Course  -->
    <div class="container mt-5">
        <h1 class="text-center">All Courses</h1>
        <!-- Start all courses 1st card deck -->
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
                    <a href="coursedetails.php" class="btn btn-primary text-white font-weight-bolder float-right">
                        Enroll
                    </a>
                </div>
            </div>
            </a>
        </div>
        <!-- End allcourses 1st card deck -->

        <!-- start all courses 2nd card deck -->
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

        <!-- End all courses 2nd card deck -->


    </div>
    <!-- End all Course  -->




<!-- start including footer  -->
<?php
include('./mainInclude/footer.php');
?>
<!-- End including footer  -->