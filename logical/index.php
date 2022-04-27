<?php
function Year( $year){
  if( $year % 4 ==0){
      echo " {$year} is a leap year"  ;
  }else{
      echo " {$year} is not leap year"  ;
  }}
  Year(2013);
  echo "<br>"."*********************"."<br>";
  ?>

  <?php
  function Season($temperature){
    if( $temperature <=20){
        echo "The temperature is {$temperature}   So , It is wentertime!"  ;
    }else{
        echo " The temperature is {$temperature} So , It is summertime!"  ;
    }}
    Season(27);
    echo "<br>"."*********************"."<br>";
  ?>  

<?php
    $first_int =5;
    $seco_int =5;
    echo "first int = ". $first_int ."<br> second int = ". $seco_int ."<br>";
    if ($first_int == $seco_int){
        $sum = ($first_int + $seco_int);
        echo "calculate the triple of thier sum = ";
        echo ($sum * 3);
    }
    else {
        echo " the two integer not the same !";
    }
    echo "<br>"."*********************"."<br>";
    ?>


<?php
   $first_integer =15;
   $seco_integer =15;
   echo "first int = ". $first_integer ."<br> second int = ". $seco_integer ."<br>";
   $summ= $first_integer + $seco_integer ;
   if ($summ= 30){
     echo "the 2 integer sum equal 30 ";
   }
   else {
       echo "False , the two integer not equal 30 !";
   }
    echo "<br>"."*********************"."<br>";
    ?>



<?php
   $num1 = 20; 
   echo $num1. "<br>" ;
   if($num1 % 3 == 0){
       echo "the number is multiple of 3";
     }
     else {
         echo "False ! the number is not multiple of 3 ";
     }
    echo "<br>"."*********************"."<br>";
    ?>

<?php
    $num2 = 49 ;
    echo $num2 . "<br>";
    if($num2 > 20 && $num2 <= 50){
        echo "True , its in the range [20-50]";
    }
    else {
        echo "False ! ita not in the range ";
    }
    echo "<br>"."*********************"."<br>";
    ?>


<?php
    $input = [1, 5, 9];
    echo max($input);
    echo "<br>"."*********************"."<br>";
    ?>


<?php 
   $bill = 250;
   if ($bill <= 50) {
       echo $bill * 2.5 . " JOD ";
   } elseif ($bill <= 150) {
       echo (50 * 2.5 + ($bill - 50) * 5) . " JOD ";
   } elseif ($bill <= 250) {
       echo (50 * 2.5 + 100 * 5 + ($bill - 150) * 6.2) . " JOD ";
   } else {
       echo (50 * 2.5 + 100 * 5 + 100 * 6.2 + ($bill - 250) * 7.5) . " JOD ";
   }
    echo "<br>"."*********************"."<br>";
    ?>



<?php
$int1 = 5;
$int2=10;

echo $int1 . "<br>" . $int2 . "<br>" ;
$addition = $int1 + $int2 ;
echo "Addition : ".$int1  ." + " .$int2 . " = " .$addition. "<br>" ;  
$subtraction = $int2-$int1 ;
echo "subtraction : ".$int1  ." - " .$int2 . " = " .$subtraction. "<br>" ; 
$multiplication = $int1 * $int2 ;
echo "multiplication : ".$int1  ." * " .$int2 . " = " .$multiplication . "<br>" ; 
$Division = $int1 / $int2 ; 
echo "Division : ".$int1  ." / " .$int2 . " = " .$Division. "<br>" ; 

    echo "<br>"."*********************"."<br>";

?>





<?php
    $age = 15;
    echo "input: $age<br/>";
    echo ($age < 18) ? "is no eligible to vote" : "eligible to vote";
    echo "<br>"."*********************"."<br>";
    ?>


<?php
    $temperature = -60;
    echo "input: $temperature<br/>";
    echo ($temperature < 0) ? "Negative" : (($temperature == 0) ? "zero" : (($temperature > 0) ? "positive" : "null"));
    echo "<br>"."*********************"."<br>";
    ?>



<?php
    $grades = [60.86, 95, 63, 55, 74, 79, 62, 50];
    $average = array_sum($grades) / count($grades);
    if ($average < 60) {
        echo "fialed";
    } elseif ($average >= 60) {
        echo "D";
    } elseif ($average >= 70) {
        echo "C";
    } elseif ($average >= 80) {
        echo "B";
    } elseif ($average >= 90 && $average <= 100) {
        echo "A";
    }
    echo "<br>"."*********************"."<br>";
    ?>
































