<?php
// step1: connect to db
include_once "connect_db.php";

// step2: get data from form
// declare SQL statement (query)
$sql = "SELECT * FROM jokes";
// execute SQL statement (query)
$jokes = $pdo->query($sql);
?>

<!-- step3: display dât to table in webpage -->
<table border="1">
    <tr>
        <th colspan="5">Joke Lists</th>
        <th>
            <form action="add_joke.php" method="get" style="display: flex; justify-content: center; align-items: center;"> 
                <input type="submit" value="add">
            </form>
        </th>
    </tr>
    <tr>
        <th>Joke ID</th>
        <th>Joke Text</th>
        <th>Joke Description</th>
        <th>Joke Date</th>
        <th>Joke Image</th>
        <th>Tools</th>
        <th>Videos</th>
    </tr>

    <?php
    foreach ($jokes as $joke):
    ?>
    <tr>
        <td style="text-align: center;"> <?= $joke['id'] ?> </td>
        <td style="word-wrap: break-word; width: 300px; padding-left: 10px;"> <?= $joke['joke_text'] ?> </td>
        <td style="word-wrap: break-word; width: 300px; padding-left: 10px;"> <?= $joke[2] ?> </td>
        <td> <?= date(" d/m/Y", strtotime($joke['joke_date'])) ?> </td>

        <td> 
            <img src="imgs/<?= $joke['image'] ?>" width="100" height="100">
        </td>

        <td width="100" height="100">
            <form action="edit_joke.php" method="get">
                <input type="hidden" name="id" value="<?= $joke['id'];?>">
                <input type="submit" value="Edit">
            </form>

            <form action="delete_joke.php" method="get" onsubmit="return confirm('R U SURE TO DELETE THIS JOKE ?')">
                <input type="hidden" name="id" value="<?= $joke['id'];?>">
                <input type="submit" value="Delete">
            </form>
        </td>
        <td>
        <iframe width="300" height="150" src="<?= $joke['video']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </td>
    </tr>

    <?php
    endforeach;
    ?>
</table>

