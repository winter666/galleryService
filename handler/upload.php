<?php

if (isset($_POST['submit'])) {
    
    include_once $_SERVER['DOCUMENT_ROOT'] . "/include/config.php";
    $uploadPath = $_SERVER['DOCUMENT_ROOT'] . "/upload/";
    $image = $_FILES['upload_image'];
    $total = count($image['name']) <= MAX_UPLOAD_FILE_COUNT ? count($image['name']) : MAX_UPLOAD_FILE_COUNT;
    
    for ($i = 0; $i < $total; $i++) {

        if (count($image['name']) > MAX_UPLOAD_FILE_COUNT) {
            include $_SERVER['DOCUMENT_ROOT'] . "/template/errors/over_count.php";
            return;
        }

        if (!empty($image['error'][$i])) {
            include $_SERVER['DOCUMENT_ROOT'] . "/template/messages/wrong.php";
            return;
        } else {
            require_once($_SERVER['DOCUMENT_ROOT'] . "/app/helpers/helperShow.php");            
            $finfo = finfo_open(FILEINFO_MIME_TYPE);

            if (!helperShow\typeChecking(UPLOAD_TYPES, finfo_file($finfo, $image['tmp_name'][$i]))) {
                include $_SERVER['DOCUMENT_ROOT'] . "/template/errors/wrong_type.php";
                return;
            }

            if ($image['size'][$i] >= MAX_UPLOAD_FILE_SIZE) {
                echo "over_size";
                include $_SERVER['DOCUMENT_ROOT'] . "/template/errors/over_size.php";
                return;
            }

            if (move_uploaded_file($image['tmp_name'][$i], $uploadPath . $image['name'][$i])) {
                require_once $_SERVER['DOCUMENT_ROOT'] . "/app/helpers/helperShow.php";
                helperShow\recFileName($image['name']);
                include $_SERVER['DOCUMENT_ROOT'] . "/template/messages/success.php";
            }
        }    
    }
}  
