
<?php ?>

<div class="container">
    <div class="contactForm">
        <form action="<?php App::asset('update'); ?>" method="post" autocomplate="off">
            <div class='registration_page'>
                <h2 class="signup">Update Page</h2>
            </div>

            <div class="inputBox">
                <input type="text" name="firstname" id="firstname" value="">
                <span>First Name *</span>
                <p class="error">
                </p>
            </div>
            <div class="inputBox">
                <input type="text" name="lastname" id="lastname" value="">
                <span>Last Name *</span>
                <p class="error">
                </p>
            </div>
            <div class="inputBox">
                <input type="text" name="email" id="email" value="">
                <span>Email *</span>
                <p class="error">
                </p>
            </div>
            <div class="inputBox">
                <input id="date" type="date" name="birthday" id="birthday"
                       value="">
                <span>Birthday*</span>
                <p class="error">
                </p>
            </div>
            <div class="radio__contant" id="gen">
                <p>Gender:</p>
                <label>
                    <input type="radio" name="gender" value="">
                    Male</label><br>
                <input type="radio" name="gender" value="">
                <label>Female</label><br>
                <p class="error">
                </p>

            </div>
            <div class="inputBox">
                <input type="submit" value="Update" name="submit">
            </div>
        </form>
    </div>
</div>



