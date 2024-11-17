<?php
require "DatabaseConnection.php";

function setTitle($name)
{
    ob_start();
    include '../includes/DatabaseConnection.php';
    return $name;
};

function setClean()
{
    $output = ob_get_clean();
    include '../templates/layout.html.php';
    return $output;
}

function totalJokes($pdo, $table)
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

function getDatabyID($pdo, $table_name, $table_column, $id)
{
    $sql = "SELECT * FROM $table_name WHERE $table_column = :id";
    $parameters = [":id" => $id];
    $data = query($pdo, $sql, $parameters);
    return $data->fetch();
};

function getAllDataFromTable($pdo, $table_name)
{
    $data = query($pdo, "SELECT * from $table_name");
    return $data->fetchAll();
}

function query($pdo, $sql, $parameters = [])
{
    $query = $pdo->prepare($sql);
    $query->execute($parameters);
    return $query;
}

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

function updateAuthor($pdo, $id, $name, $email) {
    $query = "  UPDATE authors
                SET   author_name = :name,
                    author_email = :email
                WHERE author_id = :id";
    $parameters = [":name" => $name, ":id" => $id, ":email" => $email];
    query($pdo, $query, $parameters);
}
