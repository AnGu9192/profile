
<div class="d-flex justify-content-center align-items-center vh-100"  style="margin-top:60px">
    <div class="shadow w-350 p-3 text-center">
        <h1 text-center>Welcome </h1>

        <label>
            <?php if (!$user->avatar) {

                $src = App::asset('images/') . $user->gender . '.jpg';
                // $src = STORAGE . $user->gender . '.jpg';
                echo $src;

            } else {
                $src = STORAGE . $user->avatar;
            } ?>

         <!-- <img width="200" src="<?php  echo $src ?>">  -->

            <form action="<?php App::route('user/upload'); ?>" method="post"
                  enctype="multipart/form-data">
                <input class="hide" type="file" name="avatar" id="avatar" onchange="getImagePreview(event)">
                <div id="preview">
                    <img width="200" src="<?php App::asset("storage/$user->avatar"); ?>" alt="">
                </div>

                <div class="upload_submit" style="display: none;" id="uploadSub">
                    <input type="submit" value="upload" name="avatar">
                </div>
            </form>
        </label>

        <h3 class="display-4 "><?= $user->firstname; ?>&nbsp;&nbsp;<?= $user->lastname; ?></h3>
        <p><?= $user->email; ?></p>
        <a href="<?php App::route("user/edit/$user->id"); ?>" class="btn btn-primary">
            Edit Profile
        </a>
        <a href="<?php App::route("user/logout"); ?>" class="btn btn-warning">
            Logout
        </a>
        <a href="<?php App::route("user/delete"); ?>" class="btn btn-warning"  onclick="return checkDelete()">
            Delete
        </a>
    </div>
</div>

<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>





