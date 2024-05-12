<footer class="container-fluid bg-dark text-center p-2">
        <small class="text-white">
            Copyright &copy; 2024 || Designed by Padhantey || 
            <a href="#login" data-bs-toggle="modal" data-bs-target="#adminLoginModalCenter"> Admin Login</a>
        </small>
    </footer>
    <!-- end footer  -->


     <!-- Start student registration modal -->
     <!-- Button trigger modal -->


<!-- Modal -->
    <div class="modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledby="stuRegModalCenter" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="stuRegModalCenter">Student Registration</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <!-- Start Registration form  -->
        <form >
            <div class="form-group">
                <i class="fas-fa-user"></i> 
                <label for="stuname" class="pl-2-font-weight-bold">Name
                </label>
                <input type="text" class="form-control" placeholder="Name" name="stuname" id="stuname">
            </div>

            <div class="form-group">
                <i class="fas-fa-envelope"></i> 
                <label for="stuemail" class="pl-2-font-weight-bold">Email
                </label>
                <input type="email" class="form-control" placeholder="Email" name="stuemail" id="stuemail">
                <small class="form-text">
                    We'll never share your email with anyone.
                </small>
            </div>

            <div class="form-group">
                <i class="fas-fa-key"></i> 
                <label for="stupass" class="pl-2-font-weight-bold">New Password
                </label>
                <input type="password" class="form-control" placeholder="Password" name="stupass" id="stupass">
            </div>
        </form>
            <!-- End Registration form  -->

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Sign up</button>
        </div>
        </div>
    </div>
    </div>

     <!-- End student registration modal -->

     <!-- start student login modal  -->
          <!-- Button trigger modal -->


<!-- Modal -->
    <div class="modal fade" id="stuLoginModalCenter" tabindex="-1" aria-labelledby="stuLoginModalCenter" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="stuLoginModalCenter">Student Login</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <!-- Start Login form  -->
        <form id="stuLoginForm">
            <div class="form-group">
                <i class="fas-fa-envelope"></i> 
                <label for="stulogemail" class="pl-2-font-weight-bold">Email
                </label>
                <input type="email" class="form-control" placeholder="Email" name="stulogemail" id="stulogemail">

            </div>

            <div class="form-group">
                <i class="fas-fa-key"></i> 
                <label for="stulogpass" class="pl-2-font-weight-bold">Password
                </label>
                <input type="password" class="form-control" placeholder="Password" name="stulogpass" id="stulogpass">
            </div>
        </form>
            <!-- End Login form  -->

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary" id="stuLoginBtn">Login</button>
        </div>
        </div>
    </div>
    </div>


     <!-- end student login modal  -->

     <!-- start admin-login modal  -->
               <!-- Button trigger modal -->


<!-- Modal -->
    <div class="modal fade" id="adminLoginModalCenter" tabindex="-1" aria-labelledby="adminLoginModalCenter" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="adminLoginModalCenter">Admin Login</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <!-- Start Login form  -->
        <form id="adminLoginForm">
            <div class="form-group">
                <i class="fas-fa-envelope"></i> 
                <label for="adminlogemail" class="pl-2-font-weight-bold">Email
                </label>
                <input type="email" class="form-control" placeholder="Email" name="adminlogemail" id="adminlogemail">

            </div>

            <div class="form-group">
                <i class="fas-fa-key"></i> 
                <label for="adminlogpass" class="pl-2-font-weight-bold">Password
                </label>
                <input type="password" class="form-control" placeholder="Password" name="adminlogpass" id="adminlogpass">
            </div>
        </form>
            <!-- End Login form  -->

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary" id="stuLoginBtn">Login</button>
        </div>
        </div>
    </div>
    </div>


     <!-- end admin-login modal  -->



    <!-- JQuery and Bootstrap JS  -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Font Awesome Js  -->
    <script src="js/all.min.js"></script>
</body>
</html>