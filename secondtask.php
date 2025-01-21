<?php 
echo "===1==a leap year ===";
echo "<br>";

$year = 2020;
if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
  echo "This year is a leap year.";
} else {
  echo "This year is not a leap year.";
}
echo "<br>";
echo "<br>";

echo "===2== season temperature  ===";
echo "<br>";

$temp = 19 ; 
if ($temp < 20 ){
echo "we are in winter season";
}
else 
echo "It is summertime!";
echo "<br>";
echo "<br>";


echo "====3===calculate the sum of the two integers===";
echo "<br>";
echo "<br>";
echo "<br>";

$firstint = 2;
$second =10;
$sum= $firstint + $second;
if ($firstint==$second){
$sum= ($firstint + $second) * 3;
echo $sum;
}
else {
  echo $sum;
}

echo "<br>";
echo "====4===the sum of the two given numbers equals 30===";
echo "<br>";
echo "<br>";
echo "<br>";

$f1 = 20;
$f2 =11;
$f= $f1 + $f2;
if($f == 30){
  echo $f;
}
else {
  echo "false";
}

echo "<br>";
echo "====5==if the given positive number is a multiple of 3===";
echo "<br>";
echo "<br>";
echo "<br>";

$multi= 9;
if ($multi %3 == 0){
  echo "the number is amultiple of 3";
}
else {
  echo "false";
}

echo "<br>";
echo "===6===integer value is in the range of [20-50] inclusive===";
echo "<br>";
echo "<br>";
echo "<br>";

$number =20;
if ($number>20 && $number<=50){
  echo "true";
}
else {
  echo "false";
}

echo "<br>";
echo "===7==the largest number ===";
echo "<br>";
echo "<br>";
echo "<br>";

$num1 =1;
$num2 = 5;
$num3 = 9 ; 
if ($num1 > $num2 && $num1 > $num3){
  echo "the num1 is largest one";
}
else if ($num2 > $num3) {
echo "the num2 is largest one ";
}

else {
  echo "the num3 is largest one";
}

echo "<br>";
echo "====8===calculate the monthly electricity===";
echo "<br>";
echo "<br>";
echo "<br>";

$rule=500;
$unit1 = $rule*2.5;
$unit2 = $rule*5.00;
$unit3= $rule*6.20;
$unit4= $rule*7.50;

if ($rule<=50){
  echo $unit1;
}
else if ($rule>50 && $rule<=150){
  echo $unit2;
}
elseif ($rule>150 && $rule<=250){
  echo $unit3;
}
else {
  echo $unit4;
}

echo "<br>";
echo "====9==a calculator===";
echo "<br>";
echo "<br>";
echo "<br>";

function calculater ($calc1,$calc2,$operation){
if ($operation == 'add') {
  return $calc1 + $calc2;
}
else if ($operation == 'sub'){
  return $calc1 - $calc2;
}
else if ($operation == 'mult'){
  return $calc1 * $calc2;
}
else if ($operation == 'div') {
  return $calc1 / $calc2;
}
}
$res=calculater(27 , 3 ,'mult');
echo $res;

echo "<br>";
echo "====10== eligible vote ===";
echo "<br>";
echo "<br>";
echo "<br>";

$age = 20 ; 
if ($age >=18){
  echo "is eligible to vote ";
}

else {
  echo "is no eligible to vote ";
}

echo "<br>";
echo "===11== number is positive, negative or zero===";
echo "<br>";
echo "<br>";
echo "<br>";

$pn = 20 ; 
if ($pn >0){
  echo "is positive number ";
}

elseif ($pn<0){
  echo "is Negative number ";
}
else{
  echo "is zero number ";
}

echo "<br>";
echo "===12===to find the grade for the student===";
echo "<br>";
echo "<br>";
echo "<br>";

function grads ($sub1,$sub2,$sub3,
$sub4,$sub5,$sub6,$sub7,$sub8,$sub9 ){
$thegrads = ($sub1+$sub2+$sub3+
$sub4+$sub5+$sub6+$sub7+$sub8+$sub9)/9;
echo $thegrads;echo"<br>";
if ($thegrads<=60){
  return "f";
}
elseif ($thegrads>60 && $thegrads<=70 ){
  return "D";
}
elseif ($thegrads>70 && $thegrads<=80 ){
  return "C";
}
elseif ($thegrads>80 && $thegrads<=90 ){
  return "B";
}
elseif ($thegrads>90 && $thegrads<=100 ){
  return "A";
}

}
$thegrads=grads(60,56,55,63,50,54,79,62,50);
echo $thegrads;



?>
