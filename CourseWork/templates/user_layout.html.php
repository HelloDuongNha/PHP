<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../templates/user.css?version=6">
    <title> <?=$title?> </title>
    <script src="../includes/script.js"></script>
</head>

<body>
    <!-- Sidebar trái -->
    <aside class="aside-left">
        <div class="logo">
            <a href="">
                <img src="../images/2022-Greenwich-White-Eng.png" alt="Logo">
            </a>
        </div>

        <div class="menu">
            <nav>
                <ul>
                    <li class="menu-item">
                        <img src="../images/home.svg" alt="Home">
                        <a href="../Homepage/homepage.php">Homepage</a>
                    </li>
                    <li class="menu-item setting">
                        <img src="../images/create.svg" alt="create">
                        <a href="../Create_Post/pop_up.php?action=create">Create new post</a>
                    </li>
                    <li class="menu-item">
                        <img src="../images/profile.svg" alt="profile">
                        <a href="">My profile</a>
                    </li>
                    <li class="menu-item">
                        <img src="../images/bookmark.svg" alt="bookmark">
                        <a href="">Bookmarks</a>
                    </li>
                    <li class="menu-item">
                        <img src="../images/admin.svg" alt="admin">
                        <a href="">Admin</a>
                    </li>
                    <li class="menu-item">
                        <img src="../images/contact.svg" alt="contact">
                        <a href="">Contact us</a>
                    </li>
                    <li class="menu-item">
                        <img src="../images/create_acc.svg" alt="register">
                        <a href="">register Account</a>
                    </li>
                    <li class="menu-item">
                        <img src="../images/Setting.svg" alt="setting">
                        <a href="">Settings</a>
                    </li>
                    <li class="menu-item">
                        <a class="account setting" href="">
                            <img src="../images/profile.svg" alt="avatar">
                            <p> @this account name</p>
                        </a>
                    </li>
                </ul>
            </nav>
    </aside>

    <!-- Nội dung chính -->
    <div class="container">
        <main class="content">
            <?php
            include "../Create_Post/create_post.html.php";?>
            <?=$output?>
        </main>
    </div>

    <!-- Sidebar phải -->
    <aside class="aside-right">
        <div class="search-container">
            <input type="text" placeholder="Search" />
        </div>

        <div class="other-user">
            <h2>Other user:</h2>
            <nav>
                <ul>
                    <?php
                    include '../includes/DatabaseConnection.php';
                    include_once '../includes/Functions.php';
                    $users = GetAllUser($pdo);
                    foreach ($users as $user): ?>
                        <li class="menu-item">
                            <img style="height: 30px; width: 30px;" src="../images/profile.svg" alt="avatar">
                            <p>@<?= $user['user_tag'] ?></p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
    </aside>

    <!-- Footer -->
    <footer>Đây là footer</footer>

</body>

</html>