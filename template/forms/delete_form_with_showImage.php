<form method="POST" action="/">
	<div>
        <input class="button top" type="submit" name="delete" id="delete_btn" value="Удалить">
    </div>    
    <?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/include/config.php'); 
    helperShow\showImage(helperShow\getImageList(scandir(UPLOAD_DIR))); 
    ?>          
</form>
    <script type="text/javascript" src="/js/FancyBox.js"></script>