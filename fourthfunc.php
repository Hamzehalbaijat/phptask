<?php
function prime ($n){
  if ($n > 1){
    for ($i = 2; $i * $i <= $n; $i++){
      if ($n % $i == 0){
      return $n . " is not a prime number" ;
      }
    }
    return $n . " is a prime number";
  }
  else {
    return $n . " is not a prime number";
  }
}
echo prime(9);

echo "<br>";
echo "-------------#2-------------------";
echo "<br>";
function reverse($str){
  $result = '';
  for ($i = strlen($str) - 1; $i >= 0; $i--){
    $result .= $str[$i];
  }
  return $result;
}
echo reverse("hello");
echo "<br>";
echo "-------------#3-------------------";
echo "<br>";
function lowercase($str){
  $result = '';
  for ($i = 0; $i < strlen($str); $i++){
    if (ord($str[$i]) >= 65 && ord($str[$i]) <= 90){
      $result .= chr(ord($str[$i]) + 32);
    }
    else {
      $result .= $str[$i];
    }
  }
  return $result;
}
echo "<br>";
echo "-------------#4&#5------------------";
echo "<br>";
$a = 20;
$b = 3545;
function swap(&$a, &$b){
  $temp = $a;
  $a = $b;
  $b = $temp;
}
swap($a, $b);
echo "a:" . $a . "\n";
echo "b:" . $b . "\n";
echo "<br>";
echo "-------------#6-------------------";
echo "<br>";
function Armstrong($n){
  $sum = 0;
  $temp = $n;
  while ($temp != 0){
    $remainder = $temp % 10;
    $sum = $sum + $remainder ** 3;
    $temp = $temp / 10;
  }
  if ($n == $sum){
    return $n . " is an Armstrong number";
  }
  else {
    return $n . " is not an Armstrong number";
  }
}
echo Armstrong(153);

echo "<br>";
echo "-------------#7-------------------";
echo "<br>";
function isPalindrome($string) {
  $cleanedString = preg_replace("/[^A-Za-z0-9]/", "", strtolower($string));
  
  $reversedString = strrev($cleanedString);
  
  if ($cleanedString === $reversedString) {
      return "Yes, it is a palindrome";
  } else {
      return "No, it is not a palindrome";
  }
}
$input = "Eva, can I see bees in a cave?";
echo isPalindrome($input);
echo "<br>";
echo "-------------#8-------------------";
echo "<br>";
function removeDuplicates($array) {
  return array_values(array_unique($array));
}
$array1 = array(2, 4, 7, 4, 8, 4);
$result = removeDuplicates($array1);
print_r($result);
?>


