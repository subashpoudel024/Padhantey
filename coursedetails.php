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

<!-- start main content  -->
<div class="container mt-5" >
    <div class="row">
        <div class="col-md-4">
            <img src="./images/mlimage.jpg" class="card-img-top" alt="ML">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Course Name: Machine Learning</h5>
                <p class="card-text">Description: Lorem ipsum dolor sit amet consectetur
                     adipisicing elit. Omnis eveniet eos sed 
                     laboriosam porro? Voluptate vel laudantium porro suscipit cum?</p>
                <p class="card-text">Duration: 3 months</p>
                <form action="" method="post">
                    <p class="card-text d-inline">price <small><del>&#8377 2000</del></small>
                    <span class="font-weight-bolder">&#8377 2000</span>
                    </p>
                    <button type="submit" class="btn btn-primary text-white font-weight-bolder float-right" name="buy">
                        Buy Now
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end main content  -->



<!-- start including footer  -->
<?php
include('./mainInclude/footer.php');
?>
<!-- End including footer  -->