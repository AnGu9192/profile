<h1>Hello </h1>
<?php

echo $user->firstname;
echo $user->lastname;
?>

<img src="<?php App::asset("storage/$user->avatar"); ?>" alt="">
<h1>Upload Avatar</h1>
<a href="<?php App::route("user/edit/$user->id"); ?>">Edit profile</a>
<form action="<?php App::route('user/upload'); ?>" method="post" enctype="multipart/form-data">
    <input type="file" name="avatar" id="avatar">
    <button name="avatar" value="upload">UPLOAD FILE</button>
</form>
