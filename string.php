<?php

// Define the array of strings
$strings = ["Hello", "World", "PHP", "Programming"];

// Function to count vowels in a string
function countVowels($string) {
    $vowelCount = preg_match_all('/[aeiou]/i', $string);
    return $vowelCount;
}

// Iterate over each string in the array
foreach ($strings as $string) {
    // Count the number of vowels
    $vowelCount = countVowels($string);

    // Reverse the string
    $reversedString = strrev($string);

    // Print the results
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}

?>
