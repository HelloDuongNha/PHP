<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../templates/style.css">

   <title><?= $title ?></title>


</head>

<body>
   <header>
      <h1>Internet Employee Database</h1>
   </header>

   <nav>
      <ul>
         <li><a href="../homepage/home.php">Home</a></li>
         <li><a href="../view/view.php">All employees</a></li>
         <li><a href="../insert/insert.php">Insert new employee</a></li>
         <!-- <li><a href="../List authors/authors.php">Author List</a></li>
         <li><a href="../add joke/addjoke.php">Add New Joke</a></li>
         <li><a href="../add author/addauthor.php">Add New Author</a></li>-->
         <li><a href="../about/about.php">About</a></li> 
      </ul>
   </nav>

   <main>
      <?= $output ?>
   </main>

   <footer>
      &copy; WEEK 5 HOMEWORK - COMP1841 - FALL 2024
   </footer>
</body>

</html>