<?php
echo "-----------#1-------------------";
echo  "<br>";
for ($i = 1; $i <= 10; $i++) {
  echo $i;
  echo ("-");
 
}

echo  "<br>";
echo "-----------#2-------------------";
echo  "<br>";
$total = 0;
for ($i = 0; $i <= 30; $i++) {
    $total += $i;
}
echo "The total is: $total";

echo  "<br>";
echo "-----------#3-------------------";
echo  "<br>";
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        if ($j < 5 - $i - 1) {
            echo "A ";
        } else {
            echo chr(65 + $i) . " "; 
        }
    }
    echo "\n"; 
}
echo "<br>";
echo "-----------#4-------------------";
echo  "<br>";
for ($i = 0; $i < 5; $i++) {
  for ($j = 0; $j < 5; $j++) {
      if ($j < 5 - $i - 1) {
          echo "1 "; 
      } else {
          echo ($i + 1) . " "; 
      }
  }
  echo "\n"; 
}
echo "<br>";
echo "-----------#5-------------------";
echo  "<br>";
for ($i = 0; $i < 5; $i++) {
  for ($j = 0; $j < 5; $j++) {
      if ($i == $j) {
          echo ($i + 1) . " ";
      } else {
          echo "0 "; 
      }
  }
  echo "\n"; 
}
echo "<br>";
echo "-----------#6-------------------"; 
echo  "<br>";
$number = 5;
$factorial = 1;
for ($i = 1; $i <= $number; $i++) {
    $factorial *= $i;
}
echo "The factorial of $number is: $factorial";


echo "<br>";
echo "-----------#7-------------------";
echo "<br>";
// Fibonacci sequence
$fib1 = 0;
$fib2 = 1;
$limit = 10; // Number of Fibonacci numbers to display
echo "$fib1, $fib2";
for ($i = 3; $i <= $limit; $i++) {
    $fibNext = $fib1 + $fib2;
    echo ", $fibNext";
    $fib1 = $fib2;
    $fib2 = $fibNext;
}

echo "<br>";
echo "-----------#8-------------------";
echo "<br>";
// Count occurrences of 'c' in a string
$text = "Orange Coding Academy";
$count = substr_count(strtolower($text), 'c');
echo "Number of 'c' characters in '$text': $count";

echo "<br>";
echo "-----------#9-------------------";
echo "<br>";
// Multiplication table
echo "<table border='1' cellpadding='3px' cellspacing='0px'>";
for ($i = 1; $i <= 6; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 5; $j++) {
        echo "<td>$i * $j = " . ($i * $j) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<br>";
echo "-----------#10-------------------";
echo "<br>";
// FizzBuzz
for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz ";
    } elseif ($i % 3 == 0) {
        echo "Fizz ";
    } elseif ($i % 5 == 0) {
        echo "Buzz ";
    } else {
        echo "$i ";
    }
}

echo "<br>";
echo "-----------#11-------------------";
echo "<br>";
// Floyd's triangle
$n = 5; // Number of lines
$num = 1;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "$num ";
        $num++;
    }
    echo "<br>";
}

echo "<br>";
echo "-----------#12-------------------";
echo "<br>";
// Alphabet pattern
$alphabet = range('A', 'Z');
$n = 5; // Height of the pyramid
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo $alphabet[$j] . " ";
    }
    echo "<br>";
}
for ($i = $n - 2; $i >= 0; $i--) {
    for ($j = 0; $j <= $i; $j++) {
        echo $alphabet[$j] . " ";
    }
    echo "<br>";
}
?>

