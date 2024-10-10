<?php
$output = "";

function print_result($output)
{
?>
    <div style="display: flex; 
        justify-content: center; 
        align-items: center;">
        <form action="result.php" method="post" style="
            width: 100%; 
            max-width: 400px;">
            <fieldset style="
                width: 100%; 
                padding: 20px;">
                <legend style="text-align: center;">
                    <h1>Patient Details</h1>
                </legend>

                <?php
                echo $output;
                ?>
                <br><a href='register.php'>Register Another Patient</a>

            </fieldset>
        </form>
    </div>
<?php
}

if (!isset($_POST['first_name'])) {
    include "register.php";

} else {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];

    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];

    if (isset($_POST['dob'])) {
        $dob = $_POST['dob'];
        $dob_formatted = date("d - m - Y", strtotime($dob));
    }

    if (empty($first_name) || empty($last_name) || empty($dob) || empty($email) || empty($contact_number)) {
        $output = "<h1 style='
            font-size: 20px; 
            color: red;'>
            Please make sure that you fill all the fields</h1>";
        print_result($output); 
        exit;

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $output = "<h1 style='
            font-size: 20px; 
            color:red;'>
            Invalid email address, try again</h1>";
        print_result($output);
        exit;

    } elseif (is_numeric($first_name) || is_numeric($last_name)) {
        $output = "<h1 style='
            font-size: 20px; 
            color:red;'>
            First Name and Last Name must not be numeric, try again</h1>";
        print_result($output);
        exit;
    
    } elseif (!ctype_digit($contact_number)) { 
        $output = "<h1 style='
            font-size: 20px; 
            color:red;'>
            Contact Number must be numeric, try again</h1>";
        print_result($output);
        exit;
    }

    $output = "
        <p>First Name: $first_name</p>
        <p>Last Name: $last_name</p>
        <p>Date of Birth: $dob_formatted</p>
        <p>Email Address: $email</p>
        <p>Contact Number: $contact_number</p>";

    print_result($output);
}
?>