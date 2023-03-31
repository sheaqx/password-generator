<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Password Generator</title>
</head>

<body>
    <h1>Password Generator</h1>
    <div class="container">
        <form method="post">

            <?php
            include 'generator.php';
            ?>

            <div>
                <label for="length">Password length</label>
                <input type="number" name="length" min="0" max="50" value="8" required>
            </div>
            <div>
                <label for="include-lowercase">Include lowercase letters</label>
                <input type="checkbox" name="include-lowercase" checked>
            </div>
            <div>
                <label for="include-uppercase">Include uppercase letters</label>
                <input type="checkbox" name="include-uppercase" checked>
            </div>
            <div>
                <label for="include-numbers">Include numbers</label>
                <input type="checkbox" name="include-numbers">
            </div>
            <div>
                <label for="include-symbols">Include symbols</label>
                <input type="checkbox" name="include-symbols">
            </div>
            <input type="submit" value="Generate password">
        </form>
    </div>
    <!-- <p>fhuefhuei</p> -->

</body>

</html>