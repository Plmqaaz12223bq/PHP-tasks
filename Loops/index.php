<?php
    $input = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    foreach ($input as $key => $value) {
        echo "$value ";
    }
    echo "<br>"."*********************"."<br>";
    ?>

<?php
   $sum = 0 ;
   for($i=1; $i<=30; $i++){
       $sum= $sum+$i ;
   }
   echo "the total for numbers between 0 - 30 is : ". $sum; 
    echo "<br>"."*********************"."<br>";
    ?>




<?php
    $output = 'A';

    for ($rows = 1; $rows <= 5; $rows++) {
        for ($columns = 5 - $rows; $columns > 0; $columns--) {
            echo "A ";
        }
        for ($cell = 0; $cell < $rows; $cell++) {
            echo "$output ";
        }
        $output++;
        echo "<br/>";
    }
    echo "<br>"."*********************"."<br>";
    ?>


<?php
$output = 1;

for ($rows = 1; $rows <= 5; $rows++) {
    for ($columns = 5 - $rows; $columns > 0; $columns--) {
        echo "1 ";
    }
    for ($cell = 0; $cell < $rows; $cell++) {
        echo "$output ";
    }
    $output++;
    echo "<br/>";
}
echo "<br>"."*********************"."<br>";
?>


<?php
$num5 = 1;
for ($i = 0; $i < 5; $i++) {
    echo "<p>";
    for ($j = 0; $j < 5; $j++) {
        if ($j === $i) {
            echo "$num5 ";
            $num5++;
        } else
            echo "0 ";
    }
    echo "</p>";
}
echo "<br>"."*********************"."<br>";
?>

<?php
$num2 =5;
$factorial =1;
for ($i=$num2;$i>=1;$i--){
    $factorial =$factorial*$i;
}
echo $factorial;
    echo "<br>"."*********************"."<br>";  
?>



<?php
echo "0".",";
echo "1".",";
$x=0;
$y=1;
for($i=0; $i<7; $i++){
    $z=$x+$y;
    echo $z.",";
    $x=$y;
    $y=$z;
}
    echo "<br>"."*********************"."<br>";  
    ?>



<?php
 $str8 = "orange coding academy";
 echo substr_count($str8, 'c');
 echo "<br>"."*********************"."<br>";  
 ?>


<?php
echo "<table><tbody>";
for ($i = 1; $i <= 6; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 5; $j++) {
        echo "<td> $i * $j = " . $i * $j . "</td>";
    }
    echo "</tr>";
}
echo "</tbody></table>";
echo "<br>"."*********************"."<br>"; 
?>


<?php
$num10 = range(1, 50);
    echo "<p>";
    foreach ($num10 as $val) {
        if ($val % 3 === 0) echo "Fizz ";
        else echo $val . " ";
    }
    echo "</p>";
    echo "<br>"."*********************"."<br>"; 
    ?>


<?php
 $num11 = 1;
 for ($i = 1; $i <= 5; $i++) {
     for ($j = 1; $j <= $i; $j++) {
         echo "$num11 ";
         $num11++;
     }
     echo "<br>";
 }
 echo "<br>"."*********************"."<br>"; 
 ?>


<?php
for ($i = 1; $i <= 5; $i++) {
    $str12 = 'A';
    for ($j = 1; $j <= $i; $j++) {
        echo "$str12 ";
        $str12++;
    }
    echo "<br>";
    if ($i === 5) {
        for ($k = 4; $k > 0; $k--) {
            $str12 = 'A';
            for ($z = 1; $z <= $k; $z++) {
                echo "$str12 ";
                $str12++;
            }
            echo "<br>";
        }
    }
}
echo "<br>"."*********************"."<br>"; 
?>
















































































