<?php
class File
{
    public static function upload($file)

    {
        $data = $_FILES[$file];
        $dataSize = $data["size"];
        $src = $data["tmp_name"];
        $uploadDir = STORAGE . $file . $data["name"];
        $imageFileType = strtolower(pathinfo($uploadDir, PATHINFO_EXTENSION));
        $allowedExtensions = ["jpg", "png", "jpeg", "gif", "svg", "webp"];

        $errorCode = $data["error"];
        if ($errorCode !== UPLOAD_ERR_OK) {
            exit("UploadError");
        }

        if ($dataSize > 5000000) {
            echo "Sorry, your file is too large.";
        }

        if (!in_array($imageFileType, $allowedExtensions)){
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            return false;
        }


        if (move_uploaded_file($src, $uploadDir)) {

            echo 'File uploaded';
            return true;
        }


        echo "Error";
        return false;
    }
}
