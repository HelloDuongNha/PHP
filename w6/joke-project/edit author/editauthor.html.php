<form action="editauthor.php" method="post">
    <h2 style="margin-left: 150px;">Editing author (id:<?= $author['author_id'] ?>)</h2>
    <br> <br>

    <label for="">Author name</label>
    <input type="text" name="name"
        value="<?= $author['author_name'] ?>" required>
    <label for="">Author email</label>
    <input type="email" name="email"
        value="<?= $author['author_email'] ?>" required>
    <input type="hidden" name="id"
        value="<?= $author['author_id'] ?>">
    <input type="submit" name="edit" value="Edit">
</form>