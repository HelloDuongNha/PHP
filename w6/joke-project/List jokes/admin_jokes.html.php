<h3>
   There are <?= $total ?> jokes in database
</h3>
<br> <br>
<?php
foreach ($jokes as $joke) {
?>
   <blockquote>
      (<?=$joke['category_name']?>) <?= date("d/m/Y", strtotime($joke['joke_date'])) ?>
      ---
      <?= $joke['joke_text'] ?>
      (by
      <a href="mailto:<?= $joke['author_email'] ?>">
         <?= $joke['author_name'] ?></a>
      )
      <a href="../ADMIN/editjoke.php?id=<?= $joke['joke_id'] ?>"
         onclick="return confirm('Do you want to edit this joke?');">Edit</a>

      <form action="../ADMIN/deletejoke.php" method="post"
         onsubmit="return confirm('Are you sure to delete this joke?');">
         <input type="hidden" name="id" value="<?= $joke['joke_id'] ?>">
         <input type="submit" value="Delete">
      </form>
   </blockquote>
<?php
}
?>