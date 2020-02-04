<?php

namespace helperShow;

function showImage (array $arr) {
    if (!empty($arr)) {
        include $_SERVER['DOCUMENT_ROOT'] . '/template/content.php';
    }
}

function deleteImage (array $arr, string $path) {
    require_once($_SERVER['DOCUMENT_ROOT'] . '/include/config.php');
    foreach ($arr as $key => $value) {
        if ($value != DELETE_BUTTON) {
            unlink($path . $value);
        }
    }
}            

function getImageList (array $arr) : array {
    $imageList = array();
    if (!empty($arr)) {
        for ($i = 0; $i < count($arr); $i ++) {
            if (in_array($arr[$i], ['.', '..'])) {
                continue;
            } else {
            array_push($imageList, $arr[$i]);
            }
        }
        natcasesort($imageList);
        return $imageList;
    }
}    

function typeChecking (array $arr, string $currentType) : bool {
    foreach ($arr as $type) {
        if ($currentType === $type) {
            return true;
        }
    }
    return false;
}

function showDateOfImage (string $nameOfImage) : string {
    if (!file_exists($nameOfImage)) {
        require_once($_SERVER['DOCUMENT_ROOT'] . '/include/config.php');
        $date = date("d F Y", filemtime($_SERVER['DOCUMENT_ROOT'] . '/' . UPLOAD_DIR . $nameOfImage));
        return $date;
    }

}

function showSizeOfImage (int $size) : string {
    include_once($_SERVER['DOCUMENT_ROOT'] . '/include/config.php');
    if ($size < (SIZE_BYTE * SIZE_KBYTE)) {
        return $size . " b";
    }
    if ($size > SIZE_BYTE && $size < SIZE_MBYTE) {
        $size = $size / SIZE_KBYTE;
        return floor($size) . " Kb";
    }
    if ($size > SIZE_MBYTE && $size < 5 * SIZE_MBYTE) {
        $size = $size / SIZE_MBYTE;
        return floor($size) . " Mb";
    }
}

function recFileName (array $fileArr) {
    $path = $_SERVER['DOCUMENT_ROOT'] . '/upload_name/filename.txt';
    foreach ($fileArr as $imgname) {
        $rec = file_put_contents($path, $imgname . "\n", FILE_APPEND);
        if (!$rec) {
            echo "Не удалось записать в файл";
        }
    }      
}            
        
    

