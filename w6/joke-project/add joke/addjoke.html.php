<form action="addjoke.php" method="post">
    <h2 style="margin-left: 150px;">Add new joke</h2>
    <br> <br>
    <label>Joke text</label>
    <input type="text" required name="joke_text" placeholder="Enter joke text">
    <label>Joke author </label>
    <select name="author_id">
        <?php
        foreach ($authors as $author) :
        ?>
            <option value="<?= $author["author_id"] ?>">
                <?= $author["author_name"] ?>
            </option>
        <?php
        endforeach;
        ?>
    </select>

    <label>Joke category </label>
    <select name="category_id">
        <?php
        foreach ($categories as $category) :
        ?>
            <option value="<?= $category["category_id"] ?>">
                <?= $category["category_name"] ?>
            </option>
        <?php
        endforeach;
        ?>
    </select>

    <input type="submit" value="ADD new joke" name="add_joke">
</form>