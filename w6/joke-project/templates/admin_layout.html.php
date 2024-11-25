<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../templates/admin_style.css">

   <title><?= $title ?></title>


</head>

<body>
   <header>
      <h1>Internet Joke Database FOR ADMIN</h1>
   </header>
   <nav>
      <ul>
         <li><a href="../Homepage/index.php">Home</a></li>
         <li><a href="../List jokes/jokes.php">Joke List</a></li>
         <li><a href="../List authors/authors.php">Author List</a></li>
         <li><a href="../add joke/addjoke.php">Add New Joke</a></li>
         <li><a href="../add author/addauthor.php">Add New Author</a></li>
         <li><a href="../about/about.php">About</a></li>
         <li><a href="../ADMIN/jokes.php">Admin</a></li>
         <li><a href="../contact/contact.php">Contact us</a></li>
      </ul>
   </nav>

   <main>
      <?= $output ?>
   </main>

   <footer>
      &copy; IJDB Project - COMP1841 - FALL 2024
   </footer>
</body>

</html>