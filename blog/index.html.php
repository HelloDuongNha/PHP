<?php
// step1: connect to db
include_once "connect_db.php";

// step2: get data from form
// declare SQL statement (query)
$sql = "SELECT * FROM posts";
// execute SQL statement (query)
$posts = $pdo->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOG VLOG</title>
    <style>
        * {
            font-family: 'Times New Roman', Times, serif;
            font-size: 20px;
        }

        body>div {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            flex-direction: column;
            justify-content: space-between;
        }

        /* form {
            margin-bottom: 50px;
        } */

        form>input {
            font-size: 25px;
            padding: 10px 20px;
            border-radius: 5px;
            margin: 10px 0;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        }

        table {
            border: 2px solid black;
            border-radius: 15px;
            box-shadow: 0 4px 18px rgba(0, 0, 0, 0.5);
            width: auto;
        }

        th {
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #D6EEEE;
        }

        td {
            
            text-align: Center;
            vertical-align: middle;
            margin: 0 auto;
            word-wrap: break-word;
        }

        img {
            width: auto;
            height: auto;
            max-width: 60%;
            max-height: 50vh;
            display: block;
            margin: 0 auto;
        }

        .submit {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        hr {
            border: 1px black dashed;
            width: 100%;
            /* max-width: 1200px; */
            margin: 50px auto;
        }

        aside {
            width: 15%;
            height: 100vh;
            padding: 20px;
            background-color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            border-radius: 20px;
            position: fixed;
            border: 2px black dashed;
            box-shadow: 0 4px 18px rgba(0, 0, 0, 0.5);
            top: 0;
            bottom: 0;
        }

        .left_sidebar {
            margin-left: 5px;
            left: 0;
        }

        .right-sidebar {
            justify-content: space-between;
            right: 0;
            /* chả hiểu sao cùng 1 cách setup mà cái right side bả lại bị khác */
            display: block;
            text-align: center;
        }

        aside>h1{
            font-size: 30px;
            text-decoration-line: underline;
            margin: 0;
        }

        aside>ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        aside li {
            margin: 50px 0;
            padding: 0;
        }
    </style>

    <script>
        function checkWindowSize() {
            if (window.innerWidth < 1200) {
                alert("Vui lòng sử dụng kích thước cửa sổ lớn hơn 1200px.");
            }
        }

        window.onresize = checkWindowSize;
        window.onload = checkWindowSize;
    </script>
</head>

<body>
    <aside class="left_sidebar">
        <h1>** CREATE NEW POST **</h1>
        <ul>
            <li>
                <form action="create_post.php" method="get">
                    <input type="hidden" name="id" value="<?= $post['id']; ?>">
                    <input type="submit" value="Create new post">
                </form>
            </li>
            <li>
                <form action="create_post.php" method="get">
                    <input type="hidden" name="id" value="<?= $post['id']; ?>">
                    <input type="submit" value="Create new post">
                </form>
            </li>
            <li>
                <form action="create_post.php" method="get">
                    <input type="hidden" name="id" value="<?= $post['id']; ?>">
                    <input type="submit" value="Create new post">
                </form>
            </li>
            <li>
                <form action="create_post.php" method="get">
                    <input type="hidden" name="id" value="<?= $post['id']; ?>">
                    <input type="submit" value="Create new post">
                </form>
            </li>
            <li>
                <form action="create_post.php" method="get">
                    <input type="hidden" name="id" value="<?= $post['id']; ?>">
                    <input type="submit" value="Create new post">
                </form>
            </li>
            <li>
                <form action="create_post.php" method="get">
                    <input type="hidden" name="id" value="<?= $post['id']; ?>">
                    <input type="submit" value="Create new post">
                </form>
            </li>
            <li>
                <form action="create_post.php" method="get">
                    <input type="hidden" name="id" value="<?= $post['id']; ?>">
                    <input type="submit" value="Create new post">
                </form>
            </li>
            <li>
                <form action="create_post.php" method="get">
                    <input type="hidden" name="id" value="<?= $post['id']; ?>">
                    <input type="submit" value="Create new post">
                </form>
            </li>
            <li>
                <form action="create_post.php" method="get">
                    <input type="hidden" name="id" value="<?= $post['id']; ?>">
                    <input type="submit" value="Create new post">
                </form>
            </li>
            <li>
                <form action="create_post.php" method="get">
                    <input type="hidden" name="id" value="<?= $post['id']; ?>">
                    <input type="submit" value="Create new post">
                </form>
            </li>
        </ul>
    </aside>
    <div>
        <form action="create_post.php" method="get">
            <input type="hidden" name="id" value="<?= $post['id']; ?>">
            <input type="submit" value="Create new post">
        </form>
        <hr>

        <?php
        foreach ($posts as $post):
        ?>
            <div>
                Date: <?= date(" d/m/Y", strtotime($post['creation_date'])) ?>
                <table>
                    <tr>
                        <th width=20%>Post ID: <?= $post['id'] ?></th>
                        <th>--<?= $post['title'] ?>--</th>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <img src="images/<?= $post['image'] ?>" alt="post image">
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: Right; text-decoration-line: underline; font-weight: bold;">
                            @<?= $post['author'] ?>:
                        </td>
                        <td colspan="2" style="text-align: Left;">
                            <?= $post['content'] ?>
                        </td>
                    </tr>
                </table>
                <div class="submit">
                    <form action="edit_post.php" method="get">
                        <input type="hidden" name="id" value="<?= $post['id']; ?>">
                        <input type="submit" value="Edit post">
                    </form>
                    <form action="delete_post.php" method="get" onsubmit=" return confirm('R U SURE TO DELETE THIS Post ?')">
                        <input type="hidden" name="id" value="<?= $post['id']; ?>">
                        <input type="submit" value="Delete post">
                    </form>
                </div>
            </div>
            <hr>
        <?php
        endforeach;
        ?>
    </div>
    
    <aside class="right-sidebar">
        <h1>** Validate the Button **</h1>
        <ul>
            <li>
                <form action="edit_post.php" method="get">
                    <input type="submit" value="Edit without ID (check)">
                </form>
            </li>
            <li>
                <form action="delete_post.php" method="get" onsubmit=" return confirm('R U SURE TO DELETE THIS Post ?')">
                    <input type="submit" value="Delete without ID (check)">
                </form>
            </li>
        </ul>
    </aside>
</body>

</html>