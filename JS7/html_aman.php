<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
        <button type="submit">Submit</button>
    </form>

    <?php
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $input = $_POST['input'];
    //     $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    //     echo "Input Anda: " . $input;
    // }

    // Memeriksa apakah input adalah email yang valid
    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Lanjutkan dengan pengolahan email yang aman
    } else {
    // Tangani input yang tidak valid
    }
    ?>
</body>
</html>
