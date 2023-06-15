<?php
?>
<section class="contact-area section-big">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2>Login</h2>
                        <h5>Don't have an account?<a href="<?php BASE_PATH ?>/register/register" class="color:black">Register</a></h5>

                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-12">

                    <!-- Contact form starts -->
                    <div class="contact-form">

                        <form id="" action="" method="post">
                            <div class="form-group in_email">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email" required="required">
                            </div>
                            <div class="form-group in_psw">
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required="required">
                            </div>

                            <div class="actions">
                                <input type="submit" value="Login" name="submit" id="submitButton" class="btn" title="">
                            </div>
                        </form>

                        <!-- Submition status -->
                        <div id="form-messages"></div>

                    </div>
                    <!-- Login form ends-->
                </div>

            </div>

        </div>
    </section>