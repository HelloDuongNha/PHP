<?php
// check whether user click "add" button (submit form) or not
// case 1: user did not click
if (!isset($_POST['add'])) :
?>
    <form action="" method="post" style="
        width: 100%; 
        max-width: 600px;">
        <fieldset style="
            width: 100%; 
            padding: 20px; 
            display: flex; 
            flex-direction: column; 
            align-items: center;">
            <legend>
                <h1>Add new joke</h1>
            </legend>
            
            <label for="">Joke text</label>
            <input type="text" name="text" id="" required placeholder="Enter the Joke test">
            <br><br>
            <label for="">Joke description</label>
            <input type="text" name="description" id="" required placeholder="Enter the Joke description">
            <br><br>
            <label for="">Joke date</label>
            <input type="date" name="date" id="" required>
            <br><br>
            <label for="">Joke image</label>
            <input type="text" name="image" id="" required placeholder="Enter the Joke image">
            <br><br>
            <label for="">Joke video</label>
            <input type="text" name="video" id="" required placeholder="Enter the Joke video">
            <br><br>
            <input type="submit" name="add" value="Add">
        </fieldset>
    </form>
<?php
else:
    // case 2: data is not empty
    // connect to db
    require_once "connect_db.php";

    // get data from FORM
    $text = $_POST['text'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    $image = $_POST['image'];
    $video = $_POST['video'];

    // insert data to db
    // $query = "INSERT INTO jokes (text, description, date, image) VALUES ('$text', '$description', '$date', '$image')"; //way 1
    // way 2: (shorter) name_column = :sub_variable to store
    $query = "INSERT INTO jokes SET 
        joke_text = :text,
        description = :description,
        joke_date = :date,
        image = :image,
        video = :video";

    // prepare SQL statement
    $statement = $pdo->prepare($query);
    // bind value
    $statement->bindValue(':text', $text);
    $statement->bindValue(':description', $description);
    $statement->bindValue(':date', $date);
    $statement->bindValue(':image', $image);
    $statement->bindValue(':video', $video);
    // execute SQL
    $statement->execute();
    // redirect to the index page (joke list)
    header("location: index.php");
endif;



?>