<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>

<body>
    <h1>Password Generator</h1>
    <div class="container">
        <form method="post">
            <label for="length">Password length:</label>
            <input type="number" name="length" min="8" max="50" value="8" required>
            <label for="include-lowercase">Include lowercase letters:</label>
            <input type="checkbox" name="include-lowercase" checked>
            <label for="include-uppercase">Include uppercase letters:</label>
            <input type="checkbox" name="include-uppercase" checked>
            <label for="include-numbers">Include numbers:</label>
            <input type="checkbox" name="include-numbers">
            <label for="include-symbols">Include symbols:</label>
            <input type="checkbox" name="include-symbols">
            <input type="submit" value="Generate password">
        </form>
    </div>

    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $length = $_POST['length'];
        $includeLowercase = isset($_POST['include-lowercase']);
        $includeUppercase = isset($_POST['include-uppercase']);
        $includeNumbers = isset($_POST['include-numbers']);
        $includeSymbols = isset($_POST['include-symbols']);


        $alphabet = '';
        if ($includeLowercase) {
            $alphabet .= 'abcdefghijklmnopqrstuvwxyz';
        }
        if ($includeUppercase) {
            $alphabet .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        }
        if ($includeNumbers) {
            $alphabet .= '0123456789';
        }
        if ($includeSymbols) {
            $alphabet .= '!@#$%^&*()_+-=[]{}|;:,.<>?';
        }

        $password = '';
        $max = strlen($alphabet) - 1;
        for ($i = 0; $i < $length; $i++) {
            $index = rand(0, $max);
            $password .= $alphabet[$index];
        }

        echo '<p>Your password is: ' . htmlspecialchars($password) . '</p>';
    }

    ?>
</body>

</html>