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
            <div class="lenght-container">
                <label for="length">Password length</label>
                <div class="range-container">
                    <input type="range" id="length" name="length" min="0" max="50" value="20"><br>
                    <span id="length-value">20</span>
                </div>
            </div>
            <div class="options-input">
                <div class="lowercase-option">
                    <input type="checkbox" id="lowercase" name="include-lowercase" checked>
                    <label for="lowercase">a-z</label>
                </div>
                <div class="uppercase-option">
                    <input type="checkbox" id="uppercase" name="include-uppercase" checked>
                    <label for="uppercase">A-Z</label>
                </div>
                <div class="numbers-option">
                    <input type="checkbox" id="numbers" name="include-numbers">
                    <label for="numbers">0-9</label>
                </div>
                <div class="symbols-option">
                    <input type="checkbox" id="symbols" name="include-symbols">
                    <label for="symbols">/*·$)(%</label>
                </div>
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
        const button = document.getElementById('myButton');
        button.addEventListener('click', function() {
            button.checked = !button.checked;
        });
    </script>

</body>

</html>