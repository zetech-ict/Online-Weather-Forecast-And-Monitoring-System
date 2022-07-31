<?php include  ("includes/login_header.php") ?>
<style>
    .section__contact:after {
        width: 0 !important;
    }
</style>
<section class="innerpage__head mb-0">

</section>
<!-- End breadcrumb -->

<!-- Start Section -->
<section class="section section__contact p-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3  js-match-height">
                <div class="contact__main">
                    <h2 class="section__heading">Register</h2>
                    <?php include ("includes/info.php") ?>
                    <form class="row" id="registerForm" method="post" action="register_action.php">

                        <div class="col-md-6 form-group">
                            <label for="first_name">First name</label>
                            <input type="text" class="form-control" id="first_name" aria-describedby="email"
                                   placeholder="Enter first name"
                                   name="first_name" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="last_name">Last name</label>
                            <input type="text" class="form-control" id="last_name" aria-describedby="email"
                                   placeholder="Enter first name"
                                   name="last_name" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="email"
                                   placeholder="Enter your email address"
                                   name="email" required>

                        </div>
                        <div class="col-md-6 form-group">
                            <label for="phone">Phone number</label>
                            <input type="number" class="form-control" id="phone" aria-describedby="email"
                                   placeholder="Your phone number"
                                   name="phone"
                                   value="254" required>

                        </div>

                        <div class="col-md-6 form-group">
                            <label for="password1">Password</label>
                            <input type="password" class="form-control" name="password1" id="password1"  placeholder="Password" required>

                        </div>
                        <div class="col-md-6 form-group">
                            <label for="password1">Password confirmation</label>
                            <input type="password" class="form-control" name="password2" id="password2"  placeholder="Password Confirmation" required>

                        </div>
                        <div class="col-lg-6">
                            <a class="text-right" href="login.php">Back to login</a>
                        </div>
                        <div class="col-md-12 form-action">
                            <button type="submit" name="register" class="btn btn-primary btn-rounded">Register &nbsp;<i class="fa fa-arrow-right"></i> </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Section -->
<?php include "includes/footer.php"?>