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
                    <input type="range" id="length" name="length" min="0" max="50" value="20"><br>
                    <span id="length-value">20</span>
                </div>
            </div>
            <div>
                <label for="lowercase">a-z</label>
                <input type="checkbox" id="lowercase" name="include-lowercase" checked>
            </div>
            <div>
                <label for="uppercase">A-Z</label>
                <input type="checkbox" id="uppercase" name="include-uppercase" checked>
            </div>
            <div>
                <label for="numbers">0-9</label>
                <input type="checkbox" id="numbers" name="include-numbers">
            </div>
            <div>
                <label for="symbols">/*·$)(%</label>
                <input type="checkbox" id="symbols" name="include-symbols">
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