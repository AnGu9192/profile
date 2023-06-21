
<?php
//
//echo $user->firstname;
//echo $user->lastname;
?>

<div class="d-flex justify-content-center align-items-center vh-100">

    <div class="shadow w-350 p-3 text-center">
        <h1 text-center>Welcome </h1>

        <img src="<?php App::asset("storage/$user->avatar"); ?>">
        <form action="<?php App::route('user/upload'); ?>" method="post" enctype="multipart/form-data">
                <input type="file" name="avatar" id="avatar">
                <button name="avatar" value="upload">UPLOAD FILE</button>
        </form>

        <h3 class="display-4 "><?= $user->firstname; ?>&nbsp;&nbsp;<?= $user->lastname; ?></h3>
        <a href="<?php App::route("user/edit/$user->id"); ?>" class="btn btn-primary">
            Edit Profile
        </a>
        <a href="<?php App::route("user/logout"); ?>" class="btn btn-warning">
            Logout

        </a>
    </div>
</div>



<!--<img src="--><?php //App::asset("storage/$user->avatar"); ?><!--" alt="">-->
<!--<h1>Upload Avatar</h1>-->
<!--<a href="--><?php //App::route("user/edit/$user->id"); ?><!--">Edit profile</a>-->
<!--<form action="--><?php //App::route('user/upload'); ?><!--" method="post" enctype="multipart/form-data">-->
<!--        <input type="file" name="avatar" id="avatar">-->
<!--        <button name="avatar" value="upload">UPLOAD FILE</button>-->
<!--</form>-->


