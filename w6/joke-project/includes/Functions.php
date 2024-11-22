<?php
include "DatabaseConnection.php";

function setTitle($name)
{
    ob_start();
    include '../includes/DatabaseConnection.php';
    return $name;
};

function setClean()
{
    
    $output = ob_get_clean();
    include '../templates/user_layout.html.php';
    return $output;
}

function countTableData($pdo, $table)
{
    $sql = "SELECT COUNT(*) FROM " . $table;
    $statement = $pdo->prepare($sql);
    // -- $statement->bindParam(":table", $table);
    $statement->execute();
    $row = $statement->fetch();
    return $row[0];
};


function getData($pdo, $sql)
{
    return $pdo->query($sql);
};


function GetAllJokes($pdo)
{
    $sql = "SELECT *, author_name, author_email, category_name FROM jokes
    INNER JOIN authors
    ON jokes.author_id = authors.author_id
    INNER JOIN categories
    ON jokes.category_id = categories.category_id";
    //execute (run) SQL and save result to an array
    $jokes = $pdo->query($sql);
    return $jokes->fetchall();
}

// get data by ID and table name and table column
function getDatabyID($pdo, $table_name, $table_column, $id)
{
    $sql = "SELECT * FROM $table_name WHERE $table_column = :id";
    $parameters = [":id" => $id];
    $data = query($pdo, $sql, $parameters);
    return $data->fetch();
};

// delete data by ID and table name and table column
function deleteDataByID($pdo, $table_name, $table_column, $id)
{
    $sql = "DELETE FROM $table_name WHERE $table_column = :id";
    $parameters = [":id" => $id];
    $data = query($pdo, $sql, $parameters);
    return $data->fetch();
}

function getAllDataFromTable($pdo, $table_name)
{
    $data = query($pdo, "SELECT * from $table_name");
    return $data->fetchAll();
}

// query with bind value
function query($pdo, $sql, $parameters = [])
{
    $query = $pdo->prepare($sql);
    $query->execute($parameters);
    return $query;
}

// update joke
function updateJoke($pdo, $id, $text, $author, $category, $date)
{
    $query = "  UPDATE jokes
                    SET joke_text = :text,
                        joke_date = :date,
                        author_id = :author,
                        category_id = :category
                    WHERE joke_id = :id";
    $parameters = [":text" => $text, ":id" => $id, ":date" => $date, ":author" => $author, ":category" => $category];
    query($pdo, $query, $parameters);
}

// update author
function updateAuthor($pdo, $id, $name, $email)
{
    $query = "  
    UPDATE authors
    SET author_name = :name,
    author_email = :email
    WHERE author_id = :id";
    $parameters = [":name" => $name, ":id" => $id, ":email" => $email];
    query($pdo, $query, $parameters);
}
