<?php
include ('includes/login_header.php')
?>
<style>
    .section__contact:after {
        width: 0 !important;
    }
</style>
<section class="innerpage__head mb-0">
    <!--      -->
</section>
<!-- End breadcrumb -->

<!-- Start Section -->
<section class="section section__contact p-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3  js-match-height">
                <div class="contact__main">
                    <h2 class="section__heading">Log In</h2>
                    <form class="row" id="registerForm" method="post" action="login_action.php">
                        <?php include ("includes/info.php") ?>
                        <div class="col-md-12 form-group">
                            <label for="phone">Email</label>
                            <input type="email" class="form-control" id="phone" aria-describedby="phone"
                                   placeholder="Enter your email address"
                                   name="email"
                            >

                        </div>

                        <div class="col-md-12 form-group">
                            <label for="name">Password</label>
                            <input type="password" class="form-control" name="password" id="name"
                                   placeholder="Password">

                        </div>
<!--                        <div class="col-lg-6">-->
<!--                            <a class="text-right" href="#">Forgot password?</a>-->
<!--                        </div>-->
                        <div class="col-lg-6">
                            <a class="text-right" href="register.php">Register here</a>
                        </div>

                        <div class="col-md-12 form-action">
                            <button type="submit" name="login" class="btn btn-primary btn-rounded">Login &nbsp;<i class="fa fa-arrow-right"></i> </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Section -->

<!-- Start Section -->

<?php include ('includes/footer.php') ?>