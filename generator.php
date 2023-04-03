<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $length = $_POST['length'];
    $includeLowercase = isset($_POST['include-lowercase']);
    $includeUppercase = isset($_POST['include-uppercase']);
    $includeNumbers = isset($_POST['include-numbers']);
    $includeSymbols = isset($_POST['include-symbols']);

    if (!empty($length) && ($length >= "8")) {
        if (!empty($includeLowercase) || !empty($includeUppercase) || !empty($includeNumbers) || !empty($includeSymbols)) {
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

            echo '<p>' . htmlspecialchars($password) . '</p>';
        } else {

            echo '<p>Please check at least one box</p>';
        }
    } else {
        echo '<p>Please put a length that is at least 8 characters or more </p>';
    }
}
