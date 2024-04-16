<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve input string from form
        $inputString = $_POST["inputString"];

        // Remove punctuation from input string
        $cleanedString = removePunctuation($inputString);

        // Reverse the cleaned string
        $reversedString = strrev($cleanedString);

        // Check if the cleaned string is equal to its reverse
        if (strcasecmp($cleanedString, $reversedString) == 0) {
            echo "<p>Your entry '$inputString' is a palindrome!</p>";
        } else {
            echo "<p>Your entry '$inputString' is not a palindrome.</p>";
        }

        // Provide a link for the player to play again
        echo '<p><a href="palindrome.html">Play Again</a></p>';
?>