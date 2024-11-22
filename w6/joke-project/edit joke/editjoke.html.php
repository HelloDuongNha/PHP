<form action="../ADMIN/editjoke.php" method="post">
    <h2 style="margin-left: 150px;">Edit joke</h2>
    <br> <br>
    <label>Joke text</label>
    <input type="text" required name="joke_text" placeholder="Enter joke text" value="<?= $joke['joke_text'] ?>">
    <input type="hidden" name="joke_id" value="<?= $joke['joke_id'] ?>">
    <label>Joke author </label>
    <select name="author_id">
        <?php foreach ($authors as $author):
            if ($author["author_id"] == $joke["author_id"]): ?>
                <option selected value="<?= $author["author_id"] ?>">
                    <?= $author["author_name"] ?>
                </option>
            <?php else: ?>
                <option value="<?= $author["author_id"] ?>">
                    <?= $author["author_name"] ?>
                </option>
            <?php endif; ?>
        <?php endforeach; ?>
    </select>

    <label>Joke category </label>
    <select name="category_id">
        <?php foreach ($categories as $category):
            if ($category["category_id"] == $joke["category_id"]): ?>
                <option selected value="<?= $category["category_id"] ?>">
                    <?= $category["category_name"] ?>
                </option>
            <?php else: ?>
                <option value="<?= $category["category_id"] ?>">
                    <?= $category["category_name"] ?>
                </option>
            <?php endif; ?>
        <?php endforeach; ?>
    </select>

    <input type="submit" value="edit joke" name="edit_joke">
</form>