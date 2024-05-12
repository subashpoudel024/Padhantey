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
<div class="container">
    <h2 class="text-center my-4">Payment status</h2>
    <form action="" method="post">
        <div class="form-group row">
            <label class="offset-sm-3 col-form-label">Order ID:</label>
            <div>
                <input type="text" class="form-control mx-3 ">
            </div>
            <br>

            <div>
                <br>
                <input type="text" class="btn btn-primary mx-4" value="View">
            </div>

        </div>
    </form>
</div>
<!-- end main content  -->

<!-- start contact us -->
<?php
include('./contact.php');
?>

<!-- end contact us  -->



<!-- start including footer  -->
<?php
include('./mainInclude/footer.php');
?>
<!-- End including footer  -->