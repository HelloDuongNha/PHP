<?php 
if (isset($_SESSION['status']) && $_SESSION['status'] !== "insert success"):
    switch ($_SESSION['status']) {
        case "insert duplicate":
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
    <legend>INSERT A NEW EMPLOYEE (ID: <?=$newId?>)</legend>
    <form action="insert.php" method="post" onsubmit="return check_space(first_name, last_name, email)">
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" placeholder="Enter employee first name" required>

        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" placeholder="Enter employee last name" required>

        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Enter author email" required>

        <input type="submit" name="insert" value="Insert">
    </form>
</fieldset>


<script src="../templates/script.js"></script>