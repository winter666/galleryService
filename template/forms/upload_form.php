<main>
    <section>
        <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data" id="upload_image">
            <fieldset class="field-upload">
                <legend class="bg-black">Загрузить картинку</legend>
                <div><input type="file" id="image" name="upload_image[]" multiple="multiple" accept="image/*" required></div>
                <div><input class="button" type="submit" name="submit" id="submit" value="Загрузить"></div>
            </fieldset>
        </form>
        <div id="output"></div>
    </section>
</main>

<button class="button top"><a href="/">На Главную</a></button>