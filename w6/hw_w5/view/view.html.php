<?php 
session_start();
// var_dump($_SESSION);
// echo ($_SESSION['status']);
if (isset($_SESSION['status'])):
    switch ($_SESSION['status']) {
        case 'delete success':
            ?> <script>alert("Delete succesfully");</script> <?php
            break;
        case 'insert success':
            ?> <script>alert("insert succesfully");</script> <?php
            break;
        case 'edit success':
            ?> <script>alert("edit succesfully");</script> <?php
            break;
        default:
            ?> <script>alert('Operation failed');</script> <?php
            break;
    }
    // var_dump($_SESSION);
    // echo ($_SESSION['status']);
    unset($_SESSION['status']); ?>
<?php endif; ?>

<h3>P/S: right-click to edit</h3>

<hr><br>
<table id="employee-table">
    <caption>LIST OF EMPLOYEE</caption>
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <!-- <th></th> -->
    </tr>
    <?php
    foreach ($employees as $employee) {
    ?>
        <tr data-id="<?= $employee['id'] ?>">
            <td><?= $employee['id'] ?></td>
            <td><?= $employee['first_name'] ?></td>
            <td><?= $employee['last_name'] ?></td>
            <td><?= $employee['email'] ?></td>
            <!-- <td>
                <a href="../edit/edit.php?id=<?= $employee['id'] ?>"
                    onclick="return confirm('Do you want to edit this author?');">Edit</a>
                <form action="../delete/delete.php" method="post"
                    onsubmit="return confirm('Are you sure to delete this employee?');">
                    <input type="hidden" name="id" value="<?= $employee['id'] ?>">
                    <input type="submit" value="Delete">
                </form>
            </td> -->
        </tr>
    <?php
    }
    ?>
</table>
<div id="context-menu" class="context-menu">
    <button id="edit-btn">Sửa</button>
    <button id="delete-btn">Xóa</button>
</div>

<form id="delete-form" action="../delete/delete.php" method="post" style="display: none;">
    <input type="hidden" name="id" id="delete-id" value="">
</form>

<script src="../templates/script.js"></script>