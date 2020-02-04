<?php for ($i = 0; $i < count($arr); $i++) : 
  require_once($_SERVER['DOCUMENT_ROOT'] . '/include/config.php')?>
<figure class="content"> 
  <img class="img" src="/upload/<?= $arr[$i] ?>" title="<?= $arr[$i] ?>">
  <figcaption class="indent"> 
    Название: <?= $arr[$i] ?>
  </figcaption>
  <div class="indent">  
    Размер: <?= helperShow\showSizeOfImage(filesize($_SERVER['DOCUMENT_ROOT'] . "/" . UPLOAD_DIR . $arr[$i])) ?>
  </div>
  <div class="indent"> 
    <?= helperShow\showDateOfImage($arr[$i]) ?>
  </div>          
  <label>
    <input class="indent" id="choose-img" type="checkbox" name="delete_<?= $i ?>" value="<?= $arr[$i] ?>">&nbsp;Выделить
  </label>
</figure> 

<?php endfor ?>