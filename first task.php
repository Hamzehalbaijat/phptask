<!-- this task for a php script to  -->
<?php
// Task 1a: Convert string to uppercase.
function toUpperCase($str) {
    $result = '';
    for ($i = 0; $i < strlen($str); $i++) {
        $ascii = ord($str[$i]);
        if ($ascii >= 97 && $ascii <= 122) { // Convert lowercase to uppercase
            $result .= chr($ascii - 32);
        } else {
            $result .= $str[$i];
        }
    }
    return $result;
  }
echo "Uppercase: " . toUpperCase("hello world") . "<br>";

// Task 1b: Convert string to lowercase.
function toLowerCase($str) {
    $result = '';
    for ($i = 0; $i < strlen($str); $i++) {
        $ascii = ord($str[$i]);
        if ($ascii >= 65 && $ascii <= 90) { // Convert uppercase to lowercase
            $result .= chr($ascii + 32);
        } else {
            $result .= $str[$i];
        }
    }
    return $result;
}

echo "Lowercase: " . toLowerCase("HELLO WORLD") . "<br>";

// Task 1c: Make the first letter uppercase.
function ucfirstManual($str) {
    if (strlen($str) == 0) return $str;
    $first = $str[0];
    $rest = substr($str, 1);
    return toUpperCase($first) . $rest;
}

echo "First letter uppercase: " . ucfirstManual("hello world") . "<br>";

// Task 1d: Make the first letter of each word capitalized.
function ucwordsManual($str) {
    $words = explode(' ', $str);
    $result = '';
    foreach ($words as $word) {
        $result .= ucfirstManual($word) . ' ';
    }
    return trim($result);
}

echo "Each word capitalized: " . ucwordsManual("hello world") . "<br>";


echo "Uppercase: ",  strtoupper("hello orld");
?>

<?php

// Task 2: Convert numeric string to time format.
$numericString = '085119';
$timeFormatted = substr_replace($numericString, ':', 2, 0);
$timeFormatted = substr_replace($timeFormatted, ':', 5, 0);
echo "Time formatted: $timeFormatted<br>";

?>
<?php
// Task 3: Check if a sentence contains a specific word.
function containsWord($sentence, $word) {
    return strpos(strtolower($sentence), strtolower($word)) !== false ? "Word Found!" : "Word Not Found.";
}

echo containsWord('I am a full stack developer at Orange Coding Academy', 'Orange') . "<br>";

// Task 4: Extract the file name from the URL.
$url = 'www.orange.com/index.php';
$fileName = basename($url);
echo "File name: $fileName<br>";

// Task 5: Extract the username from an email address.
$email = 'info@orange.com';
$username = strstr($email, '@', true);
echo "Username: $username<br>";

// Task 6: Get the last three characters of a string.
$string = 'info@orange.com';
$lastThree = substr($string, -3);
echo "Last three characters: $lastThree<br>";

// Task 7: Generate random password.
function generatePassword($length = 8) {
    $chars = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $chars[mt_rand(0, strlen($chars) - 1)];
    }
    return $password;
}

echo "Random password: " . generatePassword(10) . "<br>";

// Task 8: Replace the first word in a sentence.
function replaceFirstWord($sentence, $replacement) {
    $words = explode(' ', $sentence, 2);
    return $replacement . ' ' . $words[1];
}

echo replaceFirstWord('That new trainee is so genius.', 'Our') . "<br>";

// Task 9: Find the first difference between two strings.
function firstDifference($str1, $str2) {
    for ($i = 0; $i < min(strlen($str1), strlen($str2)); $i++) {
        if ($str1[$i] !== $str2[$i]) {
            return "First difference at position $i: \"{$str1[$i]}\" vs \"{$str2[$i]}\"";
        }
    }
    return "No differences found.";
}

echo firstDifference('dragonball', 'dragonboll') . "<br>";

// Task 10: Put a string into an array and view it with var_dump.
$string = "Twinkle, twinkle, little star.";
$array = explode(' ', $string);
var_dump($array);

// Task 11: Print the next letter of an inputted letter.
function nextLetter($char) {
    if ($char === 'z') return 'a';
    if ($char === 'Z') return 'A';
    return chr(ord($char) + 1);
}

echo "Next letter: " . nextLetter('a') . "<br>";
echo "Next letter: " . nextLetter('z') . "<br>";

// Task 12: Insert a string at a specified position.
function insertString($original, $insert, $position) {
    return substr_replace($original, $insert . ' ', $position, 0);
}

echo insertString('The brown fox', 'quick', 4) . "<br>";

// Task 13: Remove leading zeros from a number.
$num = '0000657022.24';
echo "Number without leading zeros: " . ltrim($num, '0') . "<br>";

// Task 14: Remove part of a string.
function removeWord($sentence, $word) {
    return str_replace($word, '', $sentence);
}

echo removeWord('The quick brown fox jumps over the lazy dog', 'fox') . "<br>";

// Task 15: Remove trailing dashes from a string.
$string = 'The quick brown fox jumps over the lazy dog---';
echo "Without trailing dashes: " . rtrim($string, '-') . "<br>";

// Task 16: Remove special characters.
$string = '\"\1+2/3*2:2-3/4*3';
echo "Without special characters: " . preg_replace('/[^0-9\s]/', '', $string) . "<br>";

// Task 17: Select the first 5 words of a string.
function firstWords($sentence, $count) {
    $words = explode(' ', $sentence);
    return implode(' ', array_slice($words, 0, $count));
}

echo "First 5 words: " . firstWords('The quick brown fox jumps over the lazy dog', 5) . "<br>";

// Task 18: Remove commas from a numeric string.
$numString = '2,543.12';
echo "Without commas: " . str_replace(',', '', $numString) . "<br>";

// Task 19: Print letters from 'a' to 'z'.
foreach (range('a', 'z') as $letter) {
    echo $letter . " ";
}
?>
