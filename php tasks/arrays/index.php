
<?php

$color = array('white' , 'green' ,'red','blue' ,'black');

function textDisplay($color){
 echo "The memory of the scene for me is like a frame of film forever frozen at that moment: the {$color[2]} carpet , the {$color[1]} lawn , the {$color[0]} house , the leaden sky. The new president and his lady
 .- Richard M. Nixon "."<br>";
}
textDisplay($color);
echo "<br>".str_repeat("*",30)."<br>";
?>




<?php

$color2 = array('white' , 'green' ,'red');

function colorDisplay($color2){
"<ul>";
  for($i=0 ; $i< 3 ; $i++)
  echo "<li>".($color2[$i])."</li>";
  
  "</ul>"
  
  ;
 }
 sort($color2);
 colorDisplay($color2);
 echo "<br>".str_repeat("*",30)."<br>";
 ?>
 
 

 <?php

 $cities = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid") ;

function cityDisplay($cities){
  foreach($cities as $x => $x_value) {
    echo "The capital of " . $x . " is " . $x_value;
    echo "<br>";
  }
  ;
 }
asort($cities);
 cityDisplay($cities);
 echo "<br>".str_repeat("*",30)."<br>";
?>



<?php
$color = array(4=>'white' ,6=> 'green' ,11=>'red');
function firstColor($color){
 $first=array_key_first($color);
 echo $color[$first];
}
firstColor($color);
echo "<br>".str_repeat("*",30)."<br>";
?>



<?php
$array = [1, 2, 3, 4, 5];
$insertedValue = "$";
$position = 3;
$length = 0;
array_splice($array, $position, $length, $insertedValue);
foreach ($array as $key => $value) {
echo "$value ";
}
echo "<br>".str_repeat("*",30)."<br>";
?>


<?php
$fruits = ['d' => 'lemon', 'a' => 'orange', 'b' => 'banana', 'c' => 'apple'];
asort($fruits);
foreach ($fruits as $key => $value) {
echo "$key = $value <br/>";
}
echo "<br>".str_repeat("*",30)."<br>";
?>

<?php
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"."<br>"; 
sort($temp_array);
echo " List of seven lowest temperatures :";
for ($i=0; $i< 7; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>";
echo "List of seven highest temperatures :";
for ($i=($temp_array_length-7); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}
echo "<br>".str_repeat("*",30)."<br>";
?>



<?php
    $array1 = array("color" => "red", 2, 4);
    $array2 = array("a", "b", "color"  => "green", "shape" => "trapezoid", 4);
    $mergedArray = array_merge($array1, $array2);
    foreach ($mergedArray as $key => $value) {
        echo "[$key] => $value <br/>";
    }
    echo "<br>".str_repeat("*",30)."<br>";
    ?>
    

<?php
    $colors = ['red', 'blue', 'white', 'yellow'];
    foreach ($colors as $key => $value) {
        $colors[$key] = strtoupper($value);
        echo "[$key] => " . $colors[$key] . "<br/>";
    }
    echo "<br>".str_repeat("*",30)."<br>";
    ?>


<?php
    $colors = ['RED', 'BLUE', 'WHITE', 'YELLOW'];
    foreach ($colors as $key => $value) {
        $colors[$key] = strtolower($value);
        echo "[$key] => " . $colors[$key] . "<br/>";
    }
    echo "<br>".str_repeat("*",30)."<br>";

    ?>


<?php
    function RangeNumber($start,$end,$step){
        foreach (range($start,$end,$step) as $number) {
          echo $number." ";
        }
        }
        
        RangeNumber(200, 250, 4);
        echo "<br>".str_repeat("*",30)."<br>";
        
    ?>

<?php
    $words = ['abcd', 'abc', 'de', 'hjjj', 'g', 'wer'];
    $lengths = array_map('strlen', $words);
    echo "The shortest array length is  " . min($lengths) .
        ".The shortest array length is " . max($lengths) . '.';
        echo "<br>".str_repeat("*",30)."<br>";
    ?>


<?php
function randomArray(){
  $numbers = range(11, 20);
shuffle($numbers);
foreach ($numbers as $number) {
    echo "$number ";
}
}

randomArray();
echo "<br>".str_repeat("*",30)."<br>";

?>


<?php
    $array1 = [2, 0, 10, 12, 6];
    $minimum = PHP_INT_MAX;
    foreach ($array1 as $key => $value) {
        if ($minimum > $value && $value !== 0)
            $minimum = $value;
    }
    echo $minimum;
    echo "<br>".str_repeat("*",30)."<br>";

    ?>
















  





