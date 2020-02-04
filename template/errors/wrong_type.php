<p class="wrong">
    Неправильное расширение "<?= $image['name'][$i] ?>"! (Пожалуйста, загрузите изображение с расширением 
<?php foreach (UPLOAD_TYPES as $type) : ?>
    <?= $type ?>
<?php endforeach ?>
).
</p>