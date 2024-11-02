<?php 
if (isset($_SESSION['status']) && $_SESSION['status'] !== "edit success"):
    switch ($_SESSION['status']) {
        case "edit duplicate":
            ?> <script>alert("Can not edit \nThis email has already used :(");</script> <?php
            break;
        case "error":
        ?> <script>alert("Some Error occurs. idk");</script> <?php
        break;
        default:
            ?> <script>alert('Operation failed');</script> <?php
            break;
    }
    unset($_SESSION['status']); ?>
<?php endif; ?>


<fieldset>
    <legend style="font-weight: bold;"> Edit employee ID: <?= $_GET['id']?></legend>
    <form action="" method="post" onsubmit="return check_space(first_name, last_name, email)">
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" placeholder="Enter employee first name" value="<?=$employee['first_name']?>" required>

        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" placeholder="Enter employee last name" value="<?=$employee['last_name']?>" required>

        <input type="hidden" name="id" value="<?=$employee['id']?>">

        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Enter author email" value="<?=$employee['email']?>" required>
        <input type="submit" name="edit" value="edit">
    </form>
</fieldset>

<script src="../templates/script.js"></script>