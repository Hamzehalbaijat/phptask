<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
$words = array('red', 'green', 'white');
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the " 
    . $words[0] . " carpet, the " 
    . $words[1] . " lawn, the " 
    . $words[2] . " house, the leaden sky. The new president and his first lady. - Richard M. Nixon";

echo "<br>";
echo "-------------#2-------------------";
echo "<br>";
$colors = ['white', 'green', 'red'];
echo "<ul>"; 
echo "<li>" . $colors[1] ."</li>";
echo"<li>" .$colors[2] ."</li>";
echo"<li>". $colors[0] ."</li>";
echo "</ul>";

echo "<br>";
echo "-------------#3-------------------";
echo "<br>";
$cities = array(
  "Italy" => "Rome", 
  "Luxembourg" => "Luxembourg", 
  "Belgium" => "Brussels", 
  "Denmark" => "Copenhagen", 
  "Finland" => "Helsinki", 
  "France" => "Paris", 
  "Slovakia" => "Bratislava", 
  "Slovenia" => "Ljubljana", 
  "Germany" => "Berlin", 
  "Greece" => "Athens", 
  "Ireland" => "Dublin", 
  "Netherlands" => "Amsterdam", 
  "Portugal" => "Lisbon", 
  "Spain" => "Madrid"
);
// Sort the array by capital names (values)
asort($cities);

// Display the sorted list
foreach ($cities as $country => $capital) {
  echo "The capital of $country is $capital<br>";
}
echo "<br>";
echo "-------------#4-------------------";
echo "<br>";

echo "-------------#4-------------------";
echo "<br>";
$color = array(4 => 'white', 6 => 'green', 11 => 'red');
echo "The first element is: " . $color[4];
echo "<br>";

echo "-------------#5-------------------";
echo "<br>";
$array = [1, 2, 3, 4, 5];
$new_item = '$';
$location = 4;
array_splice($array, $location - 1, 0, $new_item);
echo implode(' ', $array);
echo "<br>";

echo "-------------#6-------------------";
echo "<br>";
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
ksort($fruits);
foreach ($fruits as $key => $value) {
    echo "$key = $value<br>";
}
echo "<br>";

echo "-------------#7-------------------";
echo "<br>";
$temperatures = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
$average_temp = array_sum($temperatures) / count($temperatures);
sort($temperatures);
$lowest_temps = array_slice($temperatures, 0, 7);
$highest_temps = array_slice($temperatures, -7);
echo "Average Temperature is: $average_temp<br>";
echo "List of seven lowest temperatures: " . implode(", ", $lowest_temps) . "<br>";
echo "List of seven highest temperatures: " . implode(", ", $highest_temps) . "<br>";

echo "-------------#8-------------------";
echo "<br>";
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
echo "<br>";

echo "-------------#9-------------------";
echo "<br>";
$colors = ["red", "blue", "white", "yellow"];
$upper_colors = array_map('strtoupper', $colors);
print_r($upper_colors);
echo "<br>";

echo "-------------#10-------------------";
echo "<br>";
$colors = ["RED", "BLUE", "WHITE", "YELLOW"];
$lower_colors = array_map('strtolower', $colors);
print_r($lower_colors);
echo "<br>";

echo "-------------#11-------------------";
echo "<br>";
for ($i = 200; $i <= 250; $i++) {
    if ($i % 4 == 0) {
        echo $i . ", ";
    }
}
echo "<br>";

echo "-------------#12-------------------";
echo "<br>";
$words = ["abcd", "abc", "de", "hjjj", "g", "wer"];
$lengths = array_map('strlen', $words);
echo "The shortest array length is: " . min($lengths) . ".<br>";
echo "The longest array length is: " . max($lengths) . ".<br>";

echo "-------------#13-------------------";
echo "<br>";
$unique_random_numbers = [];
while (count($unique_random_numbers) < 10) {
    $rand_num = rand(11, 20);
    if (!in_array($rand_num, $unique_random_numbers)) {
        $unique_random_numbers[] = $rand_num;
    }
}
echo implode(" ", $unique_random_numbers);
echo "<br>";

echo "-------------#14-------------------";
echo "<br>";
$array1 = [2, 0, 10, 12, 6];
$filtered = array_filter($array1, fn($value) => $value > 0);
echo "The lowest integer that is not 0 is: " . min($filtered);
echo "<br>";

echo "-------------#15-------------------";
echo "<br>";
$array = [5, 3, 1, 3, 8, 7, 4, 1, 1, 3];
rsort($array);
print_r($array);
echo "<br>";

echo "-------------#16-------------------";
echo "<br>";
function floorWithPrecision($number, $precision, $separator) {
    $factor = pow(10, $precision);
    return floor($number * $factor) / $factor;
}
echo floorWithPrecision(1.155, 2, ".") . "<br>";
echo floorWithPrecision(100.25781, 4, ".") . "<br>";
echo floorWithPrecision(-2.9636, 3, ".") . "<br>";

echo "-------------#17-------------------";
echo "<br>";
$list1 = "4, 5, 6, 7";
$list2 = "4, 5, 7, 8";
$merged_list = array_unique(array_merge(explode(", ", $list1), explode(", ", $list2)));
echo implode(", ", $merged_list);
echo "<br>";

echo "-------------#18-------------------";
echo "<br>";
$array = [4, 5, 6, 7, 4, 7, 8];
$unique_array = array_unique($array);
echo implode(", ", $unique_array);
echo "<br>";

echo "-------------#19-------------------";
echo "<br>";
$array1 = ['a', '1', '2', '3', '4'];
$array2 = ['a', '3'];
$is_subset = empty(array_diff($array2, $array1));
echo $is_subset ? "array2 is a subset array from array1" : "array2 is not a subset array from array1";
?>


</body>
</html>