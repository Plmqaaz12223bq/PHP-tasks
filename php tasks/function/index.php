<?php
echo "<hr><h1>TASK1</h1>";
$MyNum = 3;
$n = 0;
for($i = 2; $i < $MyNum; $i++) {
  if($MyNum % $i == 0){
    $n++;
    break;
  }
}
if ($n == 0){
  echo $MyNum." is a prime number.";
} else {
  echo $MyNum." is not a prime number.";
}
?>



<?php
echo "<hr><h1>TASK2</h1>";
function Reverse($str){
    return strrev($str);
}
$str = "remove";
echo Reverse($str)
?>



<?php
echo "<hr><h1>TASK3</h1>";
function checkLowerLetters($string){
    if($string==strtolower($string)){
        echo 'Your String is Ok';
    }
    else{
        echo 'remove';
    }
}
checkLowerLetters('hello')
?>



<?php
echo "<hr><h1>TASK4</h1>";
function swap($x, $y) {

  echo "x = $x \n";
  echo "y = $y \n";

  $x = $x + $y;
  $y = $x - $y;
  $x = $x - $y;

  echo "x = $x \n";
  echo "y = $y \n";
}

swap(12, 10);
?>



<?php
echo "<hr><h1>TASK5</h1>";
function armstrong_number($num) {
  $sl = strlen($num);
  $sum = 0;
  $num = (string)$num;
  for ($i = 0; $i < $sl; $i++) {
    $sum = $sum + pow((string)$num{$i},$sl);
  }
  if ((string)$sum == (string)$num) {
   
  } else {
   
  }
}
echo " 407 Is An Armstrong number? ".armstrong_number(407);
?>


 

 <?php
 echo "<hr><h1>TASK6</h1>";
function Palindrome($number){
	$temp = $number;
	$new = 0;
	while (floor($temp)) {
		$d = $temp % 10;
		$new = $new * 10 + $d;
		$temp = $temp/10;
	}
	if ($new == $number){
		return 1;
	}
	else{
		return 0;
	}
}

$original ="Eva, can I see bees in a cave?";
if (Palindrome($original)){
	echo " Yes it is a Palindrome";
}
else {
echo "Not a Palindrome";
}
?>



<?php

echo "<hr><h1>TASK7</h1>";

$array1 = array(2, 4, 7, 4, 8, 4);
$result = array_unique($array1);
print_r($result);
?>

