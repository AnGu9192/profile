
<!-- Register area starts -->
<section class="contact-area section-big">
    <div class="container">

        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2>Register</h2>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-12">

                <!-- Contact form starts -->
                <div class="contact-form">

                    <form id="" action="<?php App::route('user/register'); ?>" method="post"  onSubmit="return checkPassword(this)">
                        <div class="form-group in_name">
                            <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Firstname"   >
                        </div>

                        <div class="form-group in_name">
                            <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Lastname"   >
                        </div>
                        <div class="form-group in_email">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email"   >
                        </div>
                        <div class="form-group in_psw">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password"   >
                        </div>
                        <div class="form-group in_psw">
                            <input type="password" name="repeat_password" class="form-control" id="repeat_password" placeholder="Repeat password"   >
                        </div>
                        <div class="form-group in_birth">
                            <input type="date" name="birthday" class="form-control" id="birthday">
                        </div>
                        <div class="form-group">
                            <label id="gen">Gender</label>
                            <label class="radio-inline"><input type="radio"  name="gender" value="female">Female</label>
                            <label class="radio-inline"><input type="radio" name="gender" value="male" '>Male</label></div>                            </div>
                <div class="actions">
                    <input type="submit" value="Register" name="register" id="submitButton" class="btn" title="" onclick="return Validate()">

                </div>
                <h5>Or</h5><a href="<?php App::route('user/login'); ?>" class="color:black">Login</a>


                </form>

                <!-- Submition status -->
                <div id="form-messages"></div>

            </div>
            <!-- Login form ends-->
        </div>

    </div>

    </div>
</section>

<script>

function checkPassword(form) {
  const password = form.password.value;
  const confirmPassword = form.repeat_password.value;

  if (password != confirmPassword) {
    alert("Error! Password did not match.");
    return false;
  } else {
    return true;
  }
}
</script> 

<!-- Register area ends -->
