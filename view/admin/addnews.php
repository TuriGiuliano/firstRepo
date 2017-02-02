<form action="" method="post" enctype="multipart/form-data">
    <p>
        <label>
            Заголавие
            <input type="text" name="title" placeholder="Заглавие"/>
        </label>
    </p>
    <p>
        <label>
            Категория
        <select name="categories" >
            <option disabled>Выберите категорию:</option>
            <?php foreach ($categories as $key => $value) {?>
                <option value="<?=$value?>"><?=$value?></option>
            <?php } ?>
        </select>
        </label>
    </p>
    <P>
        <label>
            Изображение:
            <input type="file" name="img"/>
        </label>
    </p>
    <p>
        <label>
            Краткое описание<br/>
            <textarea name="short" rows="10" cols="100" placeholder="Краткое описание"></textarea>
        </label>
    </p>
    <p>
        <label>
            Текст статьи<br/>
            <textarea name="article" rows="30" cols="100" placeholder="Текст статьи"></textarea>
        </label>
    </p>
    <p>
        <input type="submit" name="submit" value="Добавить">
    </p>
</form>