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
                <div class="range-container">
                    <input type="range" id="length" name="length" min="0" max="50" value="20" required><br>
                    <span id="length-value">20</span>
                </div>
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
    <script>
        const passwordLengthRange = document.querySelector('#length');
        const passwordLengthValue = document.querySelector('#length-value');

        passwordLengthRange.addEventListener('input', (event) => {
            passwordLengthValue.textContent = event.target.value;
        });
    </script>

</body>

</html>