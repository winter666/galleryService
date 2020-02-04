<?php
error_reporting(E_ALL);
$gallery = "Галерея";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title><?= $gallery ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/styles/style.css">
    <script type="text/javascript" src="/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="/js/script.js"></script>
</head>
<body>
    <header id="header">
        <div>
            <img src="/styles/img/logo.png" id="logo">
            <h1><?= $gallery ?></h1>
        </div>
    </header>