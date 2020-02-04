<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/app/helpers/helperShow.php");
include $_SERVER['DOCUMENT_ROOT'] . "/template/header.php";

if (!empty($_POST['delete'])) {
    require_once($_SERVER['DOCUMENT_ROOT'] . '/include/config.php'); 
    helperShow\deleteImage($_POST, UPLOAD_DIR);
}
?>

<main>
    <section>
        <button class="button top"><a href="/gallery/">Загрузить изображение</a></button>

        <?php include $_SERVER['DOCUMENT_ROOT'] . "/template/forms/delete_form_with_showImage.php" ?>
    </section>        
</main>


<?php include $_SERVER['DOCUMENT_ROOT'] . "/template/footer.php";