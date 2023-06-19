<?php
class File
{
    public static function upload($file)

    {
        $data = $_FILES[$file];
        //$data = $this->request()->file('file');

        $errorCode = $data["error"];
        if ($errorCode !== UPLOAD_ERR_OK) {
            exit("UploadError");
        }
        $src = $data["tmp_name"];
        $uploadDir = STORAGE . $file . $data["name"];

        if (move_uploaded_file($src, $uploadDir)) {
            return true;
        }

        echo "Error";
        return false;
    }
}
