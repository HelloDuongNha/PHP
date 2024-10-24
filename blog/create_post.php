<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Creating Post</title>
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

// case 1: user did not click
if (!isset($_POST['post'])) :
    require_once "connect_db.php";
    // calc the next id which will be the new post's id
    $query = "SELECT MAX(id) AS max_id FROM posts";
    $statement = $pdo->query($query);
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    $next_id = $result['max_id'] + 1;
    ?>
    <div>
        <form action="" method="post">
            <fieldset>
                <legend>
                    <h1>Create new post (ID: <?=$next_id?>)</h1>
                </legend>
                <label for="">Author (15 chars MAXIMUM)</label>
                <div>@<input type="text" name="author" maxlength="15" required placeholder="Enter the author's name"></div>

                <br><br>

                <label for="">Post title</label>
                <input type="text" name="title" required placeholder="Enter the Post's decription">
                <br><br>

                <label for="">Post detail</label>
                <input type="text" name="content" required placeholder="Enter the Post's decription">
                <br><br>

                <label for="">Post date</label>
                <input type="date" name="date" id="date" required>
                <br><br>

                <label for="fileInput">Select image files:</label>
                <input type="file" name="image" accept=".png, .jpg" multiple>
                <br><br>
                <hr>
                <input type="submit" name="post" value="Post">
        </form>
    </div>

<?php
else:
    // case 2: data is not empty
    // connect to db
    require_once "connect_db.php";

    // get data from FORM
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = $_POST['image'];
    $author = $_POST['author'];
    $date = $_POST['date'];

    // insert data to db
    // $query = "INSERT INTO jokes (text, description, date, image) VALUES ('$text', '$description', '$date', '$image')"; //way 1
    // way 2: (shorter) name_column = :sub_variable to store
    $query = "INSERT INTO posts SET 
        title = :title,     #Create the query with the sub :title placeholder
        content = :content, 
        image = :image,
        author = :author,
        creation_date = :date";

    // prepare SQL statement
    $statement = $pdo->prepare($query);
    // bind value
    $statement->bindValue(':title', $title); # Bind the actual value to the sub :title placeholder (to secure the data *must do*)
    $statement->bindValue(':content', $content);
    $statement->bindValue(':image', $image);
    $statement->bindValue(':author', $author);
    $statement->bindValue(':date', $date);
    // execute SQL
    $statement->execute();
    // redirect to the index page (joke list)
    header("location: index.html.php");
endif;
?>
