<h3>
   There are <?= $total ?> jokes in database
</h3>
<br><br>

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

   </blockquote>
<?php
}
?>