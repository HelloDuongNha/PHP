<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editing Post</title>
    </head>

    <script>
    function setMaxDate() {
        const today = new Date();
        const month = String(today.getMonth() + 1).padStart(2, '0'); 
        const year = today.getFullYear();
        const day = String(today.getDate()).padStart(2, '0');
        const maxDate = `${year}-${month}-${day}`;
        document.getElementById('date').max = maxDate; 
    }
    window.onload = setMaxDate;
    </script>
<?php
// import style
include_once "style.html.php";

// connect to db
require_once "connect_db.php";

// Check if post ID is provided
if (!isset($_GET['id'])) {
    ?>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        div{
            display: flex;
            flex-direction: column;
            align-items: center;
            border: 2px black dashed;
            border-radius: 20px;
            font-family: 'Times New Roman', Times, serif;
            font-size: 20px;
            width: 500px;
            padding-bottom: 40px;
        }
    </style>

        <div>
            <?php
            echo "<p>No post ID specified to EDIT!</p>";
            ?>
            <a href="index.html.php">
                Click Here to Try Again, Baby!
            </a>
        </div>
    <?php
        return;
    }

$post_id = $_GET['id'];

// Get the data from the ID 
$query = "SELECT * FROM posts WHERE id = :id";
// prepare the query before binding value
$statement = $pdo->prepare($query);
// binding value
$statement->bindValue(':id', $post_id);
// run the query
$statement->execute();
// return the data from the query as an array
$post = $statement->fetch(PDO::FETCH_ASSOC);

// If the post is not found by id
if (!$post) {
    echo "<p>Post not found!</p>";
    return;
}

// Case 1: User did not click submit button
if (!isset($_POST['update'])) :
    ?>
    <div>
        <form action="" method="post">
            <fieldset>
                <legend>
                    <h1>Edit Post (ID: <?= $post_id ?>)</h1>
                </legend>

                <label for="">Author (15 chars MAXIMUM)</label>
                <div>@<input type="text" name="author" maxlength="15" required value="<?= htmlspecialchars($post['author']); ?>"></div>
                <br><br>

                <label for="">Post title</label>
                <input type="text" name="title" required value="<?= htmlspecialchars($post['title']); ?>">
                <br><br>

                <label for="">Post detail</label>
                <input type="text" name="content" required value="<?= htmlspecialchars($post['content']); ?>">
                <br><br>

                <label for="">Post date</label>
                <input type="date" name="date" id="date" required value="<?= $post['creation_date']; ?>">
                <br><br>

                <label for="fileInput">Select image files:</label>
                <input type="file" name="image" accept=".png, .jpg" multiple>
                <br><br>

                <hr>
                <input type="submit" name="update" value="Update Post">
            </fieldset>
        </form>
    </div>

<?php
else: 
    // Case 2: User clicked submit button (handle the form submission)
    $title = $_POST['title'];
    $content = $_POST['content'];
    $author = $_POST['author'];
    $date = $_POST['date'];

    // If a new image is uploaded, use it; otherwise, keep the old image
    if (!empty($_POST['image'])) {
        $image = $_POST['image'];
    } else {
        $image = $post['image'];  // Keep the old image
    }

    // Update the post in the database
    $update_query = "UPDATE posts SET 
        title = :title,
        content = :content,
        image = :image,
        author = :author,
        creation_date = :date
        WHERE id = :id";
    // prepare the query
    $update_statement = $pdo->prepare($update_query);
    // bind the parameters
    $update_statement->bindValue(':title', $title);
    $update_statement->bindValue(':content', $content);
    $update_statement->bindValue(':image', $image);
    $update_statement->bindValue(':author', $author);
    $update_statement->bindValue(':date', $date);
    $update_statement->bindValue(':id', $post_id);
    $update_statement->execute();

    // Redirect back to the post list after updating
    header("Location: index.html.php");
endif;
?>
