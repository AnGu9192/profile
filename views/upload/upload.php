<h1>Upload file</h1>
<form action="<?php App::asset('upload/upload'); ?>" method="post" enctype="multipart/form-data">
    <input type="file" name="file" id="file">
    <button name="submit" value="upload">UPLOAD FILE</button>
</form>
<?php //echo $textTest;  ?>
